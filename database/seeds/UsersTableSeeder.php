<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "first_name" => "Ozan",
                "last_name" => "Müyesseroğlu",
                "username" => "ozanmuyes",
                "email" => "ozi5169@gmail.com",
                "password" => "123"
            ]
        ];

        foreach ($users as $user) {
            $password = $user["password"];

            app("db")->insert(
                "INSERT INTO users (first_name, last_name, username, email, password, remember_token, created_at, updated_at) values (?, ?, ?, ?, ?, NULL, NOW(), NOW())", [
                    $user["first_name"],
                    $user["last_name"],
                    $user["username"],
                    $user["email"],
                    $user["password"]
                ]
            );
        }
    }
}
