<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                "name" => "Pasaport-Alsancak-Karşıyaka",
                "number" => 105,
                "fee" => 1.25
            ],
            [
                "name" => "Bayraklı-Konak",
                "number" => 113,
                "fee" => 1.25
            ]
        ];

        foreach ($routes as $route) {
            app("db")->insert(
                "INSERT INTO routes (name, `number`, fee, created_at, updated_at) values (?, ?, ?, NOW(), NOW())", [
                    $route["name"],
                    $route["number"],
                    $route["fee"]
                ]
            );
        }
    }
}
