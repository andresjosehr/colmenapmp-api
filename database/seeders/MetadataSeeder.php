<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("metadata")->delete();
        DB::table("metadata")->insert([
            [
                "name" => "valor_uf", 
                "value" => "29613.26" 
            ],
            [
                "name" => "tope_imponible", 
                "value" => "81.6" 
            ],
        ]);
    }
}
