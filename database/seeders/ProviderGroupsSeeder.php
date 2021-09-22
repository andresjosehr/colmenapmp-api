<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProviderGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("provider_groups")->delete();
        DB::table("provider_groups")->insert([
            ["id" => 1, "name" => "G31"],
            ["id" => 2, "name" => "G32"],
            ["id" => 3, "name" => "G33"],
            ["id" => 4, "name" => "G34"],
            ["id" => 5, "name" => "G35"],
            ["id" => 6, "name" => "G36"]
        ]);
    }
}
