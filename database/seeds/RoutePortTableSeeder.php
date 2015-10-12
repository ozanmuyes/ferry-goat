<?php

use Illuminate\Database\Seeder;

class RoutePortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route_ports = [
            [
                "port_id" => 7,
                "route_id" => 1
            ],
            [
                "port_id" => 1,
                "route_id" => 1
            ],
            [
                "port_id" => 5,
                "route_id" => 1
            ],
            [
                "port_id" => 2,
                "route_id" => 2
            ],
            [
                "port_id" => 6,
                "route_id" => 2
            ]
        ];

        foreach ($route_ports as $route_port) {
            app("db")->insert(
                "INSERT INTO port_route (port_id, route_id, created_at, updated_at) values (?, ?, NOW(), NOW())", [
                    $route_port["port_id"],
                    $route_port["route_id"]
                ]
            );
        }
    }
}
