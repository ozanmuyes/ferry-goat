<?php

use Illuminate\Database\Seeder;

class FerriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ferries = [
            [
                "route_id" => 1,
                "name" => "Salacak"
            ],
            [
                "route_id" => 2,
                "name" => "Çakabey"
            ]
        ];

        foreach ($ferries as $ferry) {
            app("db")->insert(
                "INSERT INTO ferries (route_id, name, created_at, updated_at) values (?, ?, NOW(), NOW())", [
                    $ferry["route_id"],
                    $ferry["name"]
                ]
            );
        }
    }
}
