<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlanTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("plan_types")->delete();
        DB::table("plan_types")->insert([
            ["id" => 1, "name" => "Preferente"],
            ["id" => 2, "name" => "Libre Elección"],
            ["id" => 3, "name" => "Cerrado"]
        ]);
    }
}
