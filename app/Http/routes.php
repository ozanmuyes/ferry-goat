<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get("/", function () use ($app) {
    return view("site");
});

$app->get("admin", function () use ($app) {
    return view("admin");
});

$app->group(
    [
        // "middleware" => "OnlyUserAgents",
        // "middleware" => "Cacheable",
        "prefix" => "api"
    ],
    function ($app) {
        $app->options("ferries", function () {
            return "fffffff1111";
        });

        $app->get("ferries", function () use ($app) {
            // return $app->cache->remember("ferries", 1, function () use ($app) {
                return $app->db->select("SELECT * FROM ferries");
            // });
        });

        $app->post("ferries", function () use ($app) {
            $inputs = $app->request->input();

            // TODO Use transaction if feasible
            if (!$app->db->insert("INSERT INTO ferries (name, created_at, updated_at) values (:name, NOW(), NOW())", $inputs)) {
                return abort(500, "SQL error");
            }

            // We got the ID of last insert, use it to retrieve the resource...
            $createdFerryId = $app->db->getPdo()->lastInsertId();

            $createdFerry = $app->db->select("SELECT * FROM ferries WHERE id = $createdFerryId LIMIT 1");
            $createdFerry = $createdFerry[0];

            // ...and create a proper response data out of it
            $createdFerry->self = [
                "link" => $app->make("url")->to("/api/ferries") . "/" . $createdFerryId
            ];

            return response()->json($createdFerry, 201);
        });

        $app->get("ferries/{id}", function ($id) use ($app) {
            $ferry = $app->db->select("SELECT * FROM ferries WHERE id = $id LIMIT 1");
            $ferry = $ferry[0];

            $ferry->self = [
                "link" => $app->make("url")->to("/api/ferries") . "/" . $id
            ];

            return response()->json($ferry, 200);
        });


        $app->get("routes", function () use ($app) {
            $from = $app->request->input("from");
            $to = $app->request->input("to");

            if ($from === null && $to === null) {
                $query = "SELECT * FROM routes";
            } else if ($from !== null && $to === null) {
                $query = "SELECT * FROM routes WHERE id = (SELECT route_id FROM port_route WHERE port_id = (SELECT id FROM ports WHERE name = '" . $from . "'))";
                $query = $app->db->raw($query);
            } else if ($from === null && $to !== null) {
                $query = "SELECT * FROM routes WHERE id = (SELECT route_id FROM port_route WHERE port_id = (SELECT id FROM ports WHERE name = '" . $to . "'))";
                $query = $app->db->raw($query);
            } else if ($from !== null && $to !== null) {
                $query = "SELECT * FROM routes WHERE id = (SELECT DISTINCT route_id FROM port_route WHERE port_id IN (SELECT id FROM ports WHERE name IN ('" . $from . "', '" . $to . "')))";
                $query = $app->db->raw($query);
            }

            $routes = $app->db->select($query);

            return $routes;
        });

        $app->post("routes", function () use ($app) {
            $inputs = $app->request->input();

            if (!isset($inputs["number"])) {
                return abort(400, "Missing input, route number.");
            }

            if (!isset($inputs["name"])) {
                return abort(400, "Missing input, route name.");
            }

            if (!isset($inputs["fee"])) {
                return abort(400, "Missing input, route fee.");
            }

            if (!isset($inputs["fromPortId"])) {
                return abort(400, "Missing input, route fromPortId.");
            }

            if (!isset($inputs["toPortId"])) {
                return abort(400, "Missing input, route toPortId.");
            }

            if (!isset($inputs["ferryId"])) {
                return abort(400, "Missing input, route ferryId.");
            }

            // Add newly created route and get the id
            $app->db->insert("INSERT INTO routes (number, name, fee, created_at, updated_at) values (?, ?, ?, NOW(), NOW())", [
                $inputs["number"],
                $inputs["name"],
                $inputs["fee"]
            ]);

            $createdRouteId = $app->db->getPdo()->lastInsertId();

            // Add ports to newly created route
            $app->db->insert("INSERT INTO port_route (port_id, route_id, created_at, updated_at) values (" . $inputs["fromPortId"] . ", " . $createdRouteId . ", NOW(), NOW()), (" . $inputs["toPortId"] . ", " . $createdRouteId . ", NOW(), NOW())");

            // Associate the ferry with newly created route
            $app->db->update("UPDATE ferries SET route_id = $createdRouteId WHERE id = " . $inputs["ferryId"]);

            // TODO Return newly created route with associations
            return response()->json([], 200);
        });


        $app->get("ports", function () use ($app) {
            return $app->db->select("SELECT * FROM ports");
        });

        $app->post("ports", function () use ($app) {
            $inputs = $app->request->input();

            if ($app->db->insert("INSERT INTO ports (name, created_at, updated_at) values (:name, NOW(), NOW())", $inputs)) {
                return "ok";
            }

            return "error";
        });

        $app->get("ports/{portName}", function ($portName) use ($app) {
            $portName = urldecode($portName);

            return $app->db->select("SELECT * FROM ports WHERE name = '" . $portName . "'");
        });


        $app->get("users/{username}", function ($username) use ($app) {
            // TODO Check the Authorization headers and return the user if credentials are valid

            $authorizationHeader = $app->request->header("Authorization");

            if ($authorizationHeader === null) {
                return abort(401, "Authorization required.", [
                    "WWW-Authenticate" => "Basic: realm=\"ferry-goat\""
                ]);
            }

            // TODO Move them to function for inspect and spliting authorization header and
            // return type, username and password
            //
            $authorizationType = explode(" ", $authorizationHeader);
            $encodedCredentials = base64_decode($authorizationType[1]);
            $authorizationType = $authorizationType[0];

            $usernameFromHeader = explode(":", $encodedCredentials);
            $password = $usernameFromHeader[1];
            $usernameFromHeader = $usernameFromHeader[0];

            // TODO Decrypt password

            if ($username !== $usernameFromHeader) {
                return abort(422, "Authorization request integrity check failure.");
            }

            $user = $app->db->select("SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1");

            if ($user == null) {
                return abort(422, "Bad credentials.");
            }

            $user = $user[0];

            // Do NOT expose sensitive data
            unset($user->password);
            unset($user->created_at);
            unset($user->updated_at);
            unset($user->remember_token);

            // TODO Add token to response

            return response()->json([
                "user" => $user
            ], 200);
        });
    }
);

$app->get("{route:\w+}", function ($route) {
    return redirect("/#/" . $route);
});
