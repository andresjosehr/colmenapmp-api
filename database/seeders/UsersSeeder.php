<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("users")->delete();
        DB::table('users')->insert([
            [
                'name' => 'José Andrés',
                'email' => 'andresjosehr@gmail.com',
                'password' => Hash::make('Paralelepipe2'),
                "whatsapp_api_token" => 472184,
                "phone" => "+584140339097",
                'role_id' => 1
            ],

            [
                'name' => 'Paulina Muñoz',
                'email' => 'munozpaulina2015@gmail.com',
                'password' => Hash::make('secret'),
                "whatsapp_api_token" => 247188,
                "phone" => "+56995285187",
                'role_id' => 1
            ],

            [
                'name' => 'Francis',
                'email' => 'mendezfrancis0107@gmail.com',
                'password' => Hash::make('secret'),
                "whatsapp_api_token" => 487697,
                "phone" => "+56966802172",
                'role_id' => 1
            ],
            [
                'name' => 'Diana Menddez',
                'email' => 'diana.mendez@tusuperplan.cl',
                'password' => Hash::make('secret'),
                "whatsapp_api_token" => 807994,
                "phone" => "+56942953331",
                'role_id' => 1
            ],
            [
                'name' => 'Paulina Muñoz',
                'email' => 'paulinamunozpalma@icloud.com',
                'password' => Hash::make('123e4ingr0fnm342adsfc1wsdf1w65fe1wef146w84efw5e1f3f26r512f1'),
                "whatsapp_api_token" => null,
                "phone" => null,
                'role_id' => 1
            ],
            [
                'name' => 'Paulina Muñoz',
                'email' => 'paulina.munoz@tusuperplan.cl',
                'password' => Hash::make('eofvihnpqaeovnbqeopjvbòfinhvòeivhqòifvnlxcnvñlaknvfòquinnváoinv'),
                "whatsapp_api_token" => null,
                "phone" => null,
                'role_id' => 1
            ]
        ]);
    }
}
