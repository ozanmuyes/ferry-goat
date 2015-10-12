<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call("PortsTableSeeder");
        $this->call("RoutesTableSeeder");
        $this->call("RoutePortTableSeeder");
        $this->call("FerriesTableSeeder");

        Model::reguard();
    }
}
