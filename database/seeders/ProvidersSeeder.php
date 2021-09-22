<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        
        DB::table("providers")->delete();
        DB::table("providers")->insert([
            ["id" => 1, "name" => 'CLÍNICA LAS CONDES', "region_id" => 4],
            // ["id" => 2, "name" => 'TODOS LOS NO INCLUIDOS EN OTROS GRUPOS', "region_id" => $faker->numberBetween(1,4)],
            ["id" => 3, "name" => 'CLÍNICA ALEMANA', "region_id" => 4],
            ["id" => 4, "name" => 'CLÍNICA SAN CARLOS DE APOQUINDO', "region_id" => 4],
            ["id" => 5, "name" => 'CLÍNICA UNIVERSIDAD CATÓLICA (LIRA)', "region_id" => 4],
            ["id" => 6, "name" => 'CLÍNICA UNIVERSIDAD DE LOS ANDES', "region_id" => 4],
            ["id" => 7, "name" => 'CLÍNICA SANTA MARÍA', "region_id" => 4],
            ["id" => 8, "name" => 'CLÍNICA INDISA', "region_id" => 4],
            ["id" => 9, "name" => 'CLÍNICA MEDS', "region_id" => 4],
            ["id" => 10, "name" => 'CLÍNICA RED SALUD VITACURA', "region_id" => 4],
            ["id" => 11, "name" => 'HOSPITAL CLÍNICO UNIVERSIDAD CATÓLICA', "region_id" => 4],
            ["id" => 12, "name" => 'FUNDACIÓN ARTURO LÓPEZ PÉREZ', "region_id" => 4],
            ["id" => 13, "name" => 'HOSPITAL CLÍNICO DE LA FUERZA AÉREA DE CHILE', "region_id" => 4],
            ["id" => 14, "name" => 'CLÍNICA BUPA REÑACA', "region_id" => 10],
            ["id" => 15, "name" => 'CLÍNICA BUPA SANTIAGO', "region_id" => 4],
            ["id" => 16, "name" => 'NUEVA CLÍNICA CORDILLERA', "region_id" => 4],
            ["id" => 17, "name" => 'HOSPITAL MILITAR DE SANTIAGO', "region_id" => 4],
            ["id" => 18, "name" => 'HOSPITAL DEL TRABAJADOR DE SANTIAGO', "region_id" => 4],
            ["id" => 19, "name" => 'CLÍNICA BUPA ANTOFAGASTA', "region_id" => 7],
            ["id" => 20, "name" => 'CLÍNICA CIUDAD DEL MAR', "region_id" => 10],
            ["id" => 21, "name" => 'HOSPITAL DE NIÑOS', "region_id" => 10],
            ["id" => 22, "name" => 'CLÍNICA LOS ANDES', "region_id" => 13],
            ["id" => 23, "name" => 'CLÍNICA SANATORIO ALEMÁN', "region_id" => 14],
            ["id" => 24, "name" => 'HOSPITAL CLÍNICO DEL SUR', "region_id" => 14],
            ["id" => 25, "name" => 'CLÍNICA ALEMANA DE VALDIVIA', "region_id" => 16],
            ["id" => 26, "name" => 'CLÍNICA ALEMANA DE OSORNO', "region_id" => 17],
            ["id" => 27, "name" => 'CLÍNICA REDSALUD MAGALLANES', "region_id" => 20],
            ["id" => 28, "name" => 'CLÍNICA LOS CARRERA', "region_id" => 10],
            ["id" => 29, "name" => 'CLÍNICA TARAPACÁ', "region_id" => 6],
            ["id" => 30, "name" => 'CLÍNICA REDSALUD PROVIDENCIA', "region_id" => 4],
            ["id" => 31, "name" => 'CLÍNICA DÁVILA', "region_id" => 4],
            ["id" => 32, "name" => 'CLÍNICA VESPUCIO', "region_id" => 4],
            ["id" => 33, "name" => 'HOSPITAL CLÍNICO U. DE CHILE', "region_id" => 4],
            ["id" => 34, "name" => 'CLÍNICA SAN JOSÉ DE ARICA', "region_id" => 5],
            ["id" => 35, "name" => 'CLÍNICA EL LOA', "region_id" => 7],
            ["id" => 36, "name" => 'CLÍNICA PORTADA', "region_id" => 7],
            ["id" => 37, "name" => 'CLÍNICA CUMBRES DEL NORTE', "region_id" => 7],
            ["id" => 38, "name" => 'HOSPITAL MILITAR DEL NORTE', "region_id" => 7],
            ["id" => 39, "name" => 'CLÍNICA RCR DE ATACAMA', "region_id" => 8],
            ["id" => 40, "name" => 'CLÍNICA REDSALUD ELQUI', "region_id" => 9],
            ["id" => 41, "name" => 'CLÍNICA REDSALUD VALPARAISO', "region_id" => 10],
            ["id" => 42, "name" => 'HOSPITAL CLÍNICO DE VIÑA DEL MAR', "region_id" => 10],
            ["id" => 43, "name" => 'HOSPITAL NAVAL ALMIRANTE NEF', "region_id" => 10],
            ["id" => 44, "name" => 'HOSPITAL CLÍNICO FUSAT', "region_id" => 11],
            ["id" => 45, "name" => 'CLÍNICA LIRCAY', "region_id" => 13],
            ["id" => 46, "name" => 'CLÍNICA CHILLÁN', "region_id" => 12],
            ["id" => 47, "name" => 'CLÍNICA UNIVERSITARIA DE CONCEPCIÓN', "region_id" => 14],
            ["id" => 48, "name" => 'CLÍNICA BIOBÍO', "region_id" => 14],
            ["id" => 49, "name" => 'CLÍNICA ALEMANA DE TEMUCO', "region_id" => 15],
            ["id" => 50, "name" => 'CLÍNICA REDSALUD MAYOR TEMUCO', "region_id" => 15],
            ["id" => 51, "name" => 'CLÍNICA PUERTO VARAS', "region_id" => 17],
            ["id" => 52, "name" => 'CLÍNICA UNIVERSITARIA DE PUERTO MONTT', "region_id" => 17],
            ["id" => 53, "name" => 'CLÍNICA PUERTO MONTT', "region_id" => 17],
            ["id" => 54, "name" => 'CLÍNICA REDSALUD SANTIAGO', "region_id" => 4],
            ["id" => 55, "name" => 'CLÍNICA JUAN PABLO II', "region_id" => 4],
            ["id" => 56, "name" => 'CLÍNICA SIERRA BELLA', "region_id" => 4],
            ["id" => 57, "name" => 'HOSPITAL DEL PROFESOR', "region_id" => 4],
            ["id" => 58, "name" => 'HOSPITAL PARROQUIAL DE SAN BERNARDO', "region_id" => 4],
            ["id" => 59, "name" => 'CLÍNICA FLEMING ARICA', "region_id" => 5],
            ["id" => 60, "name" => 'CLÍNICA REDSALUD IQUIQUE', "region_id" => 6],
            ["id" => 61, "name" => 'CLÍNICA RÍO BLANCO', "region_id" => 10],
            ["id" => 62, "name" => 'CLÍNICA SAN ANTONIO', "region_id" => 10],
            ["id" => 63, "name" => 'CLÍNICA ISAMÉDICA', "region_id" => 11],
            ["id" => 64, "name" => 'CLÍNICA REDSALUD RANCAGUA', "region_id" => 11],
            ["id" => 65, "name" => 'CLÍNICA LAS AMAPOLAS', "region_id" => 13],
            ["id" => 66, "name" => 'HOSPITAL DE LAS FFAA CIRUJANO GUZMÁN', "region_id" => 20],
            ["id" => 67, "name" => 'HOSPITAL CLÍNICO IST', "region_id" => 4],
            ["id" => 68, "name" => 'Centros Médicos Red Salud UC Christus', "region_id" => 4],
            ["id" => 69, "name" => 'Integramédica', "region_id" => 4],
            ["id" => 70, "name" => 'Medicien', "region_id" => 4],
            ["id" => 71, "name" => 'Clínica Iram', "region_id" => 4],
            ["id" => 72, "name" => 'Clínica Oftalmológica Pasteur', "region_id" => 4],
            ["id" => 73, "name" => 'Centros Médicos RedSalud', "region_id" => 4],
            ["id" => 74, "name" => 'Centros Médicos Vidaintegra', "region_id" => 4],
            ["id" => 75, "name" => 'Arauco Salud', "region_id" => 4],
            ["id" => 76, "name" => 'Centro Médico San Joaquin', "region_id" => 4],
            ["id" => 77, "name" => 'Instituto Oftalmológico Puerta Del Sol', "region_id" => 4],
            ["id" => 78, "name" => 'Sonorad centros médicos', "region_id" => 4],
            ["id" => 79, "name" => 'Clínica Andes Salud Concepción', "region_id" => 14],
            ["id" => 80, "name" => 'CENTROMED', "region_id" => 10],
            ["id" => 81, "name" => 'Clínica Los Leones', "region_id" => 10],

            //No tiene plan asignado
            ["id" => 82, "name" => 'Hospital FACH', "region_id" => 4],
            ["id" => 83, "name" => 'CLÍNICA ANTOFAGASTA', "region_id" => 7],
            ["id" => 84, "name" => 'CLÍNICA LOS ANGELES', "region_id" => 14],
            ["id" => 85, "name" => 'Clinicas de ambas regiones', "region_id" => 19],
            ["id" => 86, "name" =>  'Clínica Tarapaca', "region_id" => null], 
            ["id" => 87, "name" =>  'Hospital Clínico De Magallanes', "region_id" => null],
            ["id" => 88, "name" =>  'Hospital De Niños Y Cunas Viña Del Mar', "region_id" => null],

            ["id" => 89, "name" =>  'Hospital Clínico UC', "region_id" => 4],
            
            ]);


    }
}


