<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->delete();
        DB::table("roles")->insert([
            ["id" => 1, "name" => "Administrator"],
            ["id" => 2, "name" => "Employee"],
            ["id" => 3, "name" => "Client"]
        ]);
    }
}
