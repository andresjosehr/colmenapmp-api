<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("regions")->delete();
        DB::table("regions")->insert([

            // ["id" => 1, "name" => "Norte", "code" => null],
            // ["id" => 2, "name" => "Centro", "code" => null],
            // ["id" => 3, "name" => "Sur", "code" => null],

            ["id" => 4, "name" => "Metropolitana", "code" => null, "order" => 0],
            ["id" => 5, "name" => "ARICA Y PARINACOTA", "code" => "XV", "order" =>14],
            ["id" => 6, "name" => "TARAPACA", "code" => "I", "order" => 1],
            ["id" => 7, "name" => "ANTOFAGASTA", "code" => "II", "order" => 2],
            ["id" => 8, "name" => "ATACAMA", "code" => "III", "order" => 3],
            ["id" => 9, "name" => "COQUIMBO", "code" => "IV", "order" => 4],
            ["id" => 10, "name" => "VALPARAISO", "code" => "V", "order" => 5],
            ["id" => 11, "name" => "LIB BERN O´HIGGINS", "code" => "VI", "order" => 6],
            ["id" => 12, "name" => "MAULE", "code" => "VII", "order" => 7],
            ["id" => 13, "name" => "ÑUBLE", "code" => "XVI", "order" =>15],
            ["id" => 14, "name" => "BIOBIO", "code" => "VIII", "order" => 8],
            ["id" => 15, "name" => "ARAUCANIA", "code" => "IX", "order" =>9],
            ["id" => 16, "name" => "LOS RIOS", "code" => "X", "order" =>10],
            ["id" => 17, "name" => "LOS LAGOS", "code" => "XIV", "order" =>13],
            ["id" => 19, "name" => "AYSEN", "code" => "XI", "order" =>11],
            ["id" => 20, "name" => "MAGALLANES", "code" => "XII", "order" =>12],
            ["id" => 21, "name" => "Regional", "code" => "", "order" =>16],

            
            // ["id" => 22, "name" => "METROPOLITANA PONIENTE", "code" => null],
            // ["id" => 23, "name" => "METROPOLITANA SUR", "code" => null],
            // ["id" => 24, "name" => "METROPOLITANA NORTE", "code" => null]
        ]);
    }
}

