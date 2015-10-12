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
    return view("index");
});


$app->get("api/ferries", function () use ($app) {
    return $app->db->select("SELECT * FROM ferries");
});

$app->post("api/ferries", function () use ($app) {
    //
});


$app->get("api/routes", function () use ($app) {
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

$app->post("api/routes/add", function () use ($app) {
    //
});


$app->get("api/ports", function () use ($app) {
    return $app->db->select("SELECT * FROM ports");
});

$app->post("api/ports/add", function () use ($app) {
    $inputs = $app->request->input();

    if ($app->db->insert("INSERT INTO ports (name, created_at, updated_at) values (:name, NOW(), NOW())", $inputs)) {
        return "ok";
    }

    return "error";
});

$app->get("api/ports/{portName}", function ($portName) use ($app) {
    $portName = urldecode($portName);

    return $app->db->select("SELECT * FROM ports WHERE name = '" . $portName . "'");
});
