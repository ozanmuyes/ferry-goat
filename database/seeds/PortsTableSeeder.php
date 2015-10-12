<?php

use Illuminate\Database\Seeder;

class PortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ports = [
            [
                "name" => "Alsancak"
            ],
            [
                "name" => "Bayraklı"
            ],
            [
                "name" => "Bostanlı"
            ],
            [
                "name" => "Foça"
            ],
            [
                "name" => "Karşıyaka"
            ],
            [
                "name" => "Konak"
            ],
            [
                "name" => "Pasaport"
            ],
            [
                "name" => "Üçkuyular"
            ]
        ];

        foreach ($ports as $port) {
            app("db")->insert(
                "INSERT INTO ports (name, created_at, updated_at) values (?, NOW(), NOW())", [
                    $port["name"]
                ]
            );
        }
    }
}
