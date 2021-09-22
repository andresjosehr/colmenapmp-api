<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SuscriptionPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("suscription_prices")->delete();
        DB::table("suscription_prices")->insert([
            ["age" => 0, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 1, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 2, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 3, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 4, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 5, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 6, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 7, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 8, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 9, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 10, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 11, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 12, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 13, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 14, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 15, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 16, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 17, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 18, "contributor_price" => 0.6, "burden_price" => 0.6],
            ["age" => 19, "contributor_price" => 0.6, "burden_price" => 0.6],

            ["age" => 20, "contributor_price" => 0.9, "burden_price" => 0.7],
            ["age" => 21, "contributor_price" => 0.9, "burden_price" => 0.7],
            ["age" => 22, "contributor_price" => 0.9, "burden_price" => 0.7],
            ["age" => 23, "contributor_price" => 0.9, "burden_price" => 0.7],
            ["age" => 24, "contributor_price" => 0.9, "burden_price" => 0.7],

            ["age" => 25, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 26, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 27, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 28, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 29, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 30, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 31, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 32, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 33, "contributor_price" => 1, "burden_price" => 0.7],
            ["age" => 34, "contributor_price" => 1, "burden_price" => 0.7],


            ["age" => 35, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 36, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 37, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 38, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 39, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 40, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 41, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 42, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 43, "contributor_price" => 1.3, "burden_price" => 0.9],
            ["age" => 44, "contributor_price" => 1.3, "burden_price" => 0.9],


            ["age" => 45, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 46, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 47, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 48, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 49, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 50, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 51, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 52, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 53, "contributor_price" => 1.4, "burden_price" => 1],
            ["age" => 54, "contributor_price" => 1.4, "burden_price" => 1],


            ["age" => 55, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 56, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 57, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 58, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 59, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 60, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 61, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 62, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 63, "contributor_price" => 2, "burden_price" => 1.4],
            ["age" => 64, "contributor_price" => 2, "burden_price" => 1.4],


            ["age" => 65, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 66, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 67, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 68, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 69, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 70, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 71, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 72, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 73, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 74, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 75, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 76, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 77, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 78, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 79, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 80, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 81, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 82, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 83, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 84, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 85, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 86, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 87, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 88, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 89, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 90, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 91, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 92, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 93, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 94, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 95, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 96, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 97, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 98, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 99, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 100, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 101, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 102, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 103, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 104, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 105, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 106, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 107, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 108, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 109, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 110, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 111, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 112, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 113, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 114, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 115, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 116, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 117, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 118, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 119, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 120, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 121, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 122, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 123, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 124, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 125, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 126, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 127, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 128, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 129, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 130, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 131, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 132, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 133, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 134, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 135, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 136, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 137, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 138, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 139, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 140, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 141, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 142, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 143, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 144, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 145, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 146, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 147, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 148, "contributor_price" => 2.4, "burden_price" => 2.2],
            ["age" => 149, "contributor_price" => 2.4, "burden_price" => 2.2],

            ["age" => 150, "contributor_price" => 2.4, "burden_price" => 2.2]

        ]);
    }
}
