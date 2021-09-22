<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class IsapresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("isapres")->delete();
        DB::table("isapres")->insert([
            ["id" => 3, "name" => "Colmena",       "ges" => 0.77,  "logo" => "colmena.png", "show_for_seek" => true]
        ]);
    }
}
