<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $faker = \Faker\Factory::create();
        $providers = ["CLÍNICA LAS CONDES", "CLÍNICA ALEMANA", "CLÍNICA SAN CARLOS DE APOQUINDO", "CLÍNICA UNIVERSIDAD CATÓLICA (LIRA)", "CLÍNICA UNIVERSIDAD DE LOS ANDES", "CLÍNICA SANTA MARÍA", "CLÍNICA INDISA", "CLÍNICA MEDS", "CLÍNICA RED SALUD VITACURA", "HOSPITAL CLÍNICO UNIVERSIDAD CATÓLICA", "FUNDACIÓN ARTURO LÓPEZ PÉREZ", "HOSPITAL CLÍNICO DE LA FUERZA AÉREA DE CHILE", "CLÍNICA BUPA REÑACA", "CLÍNICA BUPA SANTIAGO (Hab. Individual)", "NUEVA CLÍNICA CORDILLERA", "HOSPITAL CLÍNICO U. DE CHILE (Mod. Pensionado)", "HOSPITAL MILITAR DE SANTIAGO", "HOSPITAL DEL TRABAJADOR DE SANTIAGO", "CLÍNICA BUPA ANTOFAGASTA (Hab. Individual)", "CLÍNICA CIUDAD DEL MAR", "HOSPITAL DE NIÑOS", "CLÍNICA LOS ANDES", "CLÍNICA SANATORIO ALEMÁN", "HOSPITAL CLÍNICO DEL SUR", "CLÍNICA ALEMANA DE TEMUCO (Hab. Individual)", "CLÍNICA ALEMANA DE VALDIVIA", "CLÍNICA ALEMANA DE OSORNO (Hab. Individual)", "CLÍNICA REDSALUD MAGALLANES", "CLÍNICA LOS CARRERA", "CLÍNICA TARAPACÁ", "CLÍNICA REDSALUD PROVIDENCIA", "CLÍNICA REDSALUD SANTIAGO (Hab. Individual)", "CLÍNICA DÁVILA", "CLÍNICA VESPUCIO", "CLÍNICA BUPA SANTIAGO (Hab. Compartida)", "HOSPITAL CLÍNICO U. DE CHILE (Mod. Institucional)", "CLÍNICA SAN JOSÉ", "CLÍNICA EL LOA", "CLÍNICA PORTADA", "CLÍNICA BUPA ANTOFAGASTA (Hab. Compartida)", "CLÍNICA CUMBRES DEL NORTE", "HOSPITAL MILITAR DEL NORTE", "CLÍNICA RCR DE ATACAMA", "CLÍNICA REDSALUD ELQUI (Hab. Individual)", "CLÍNICA REDSALUD VALPARAISO", "HOSPITAL CLÍNICO DE VIÑA DEL MAR", "HOSPITAL NAVAL ALMIRANTE NEF", "CLÍNICA ISAMÉDICA (Hab. Individual)", "HOSPITAL CLÍNICO FUSAT", "CLÍNICA LIRCAY", "CLÍNICA CHILLÁN", "CLÍNICA UNIVERSITARIA DE CONCEPCIÓN", "CLÍNICA BIOBÍO", "CLÍNICA ALEMANA DE TEMUCO (Hab. Compartida)", "CLÍNICA REDSALUD MAYOR (Hab. Individual)", "CLÍNICA ALEMANA DE OSORNO (Hab. Compartida)", "CLÍNICA PUERTO VARAS", "CLÍNICA UNIVERSITARIA DE PUERTO MONTT (Hab. Individual)", "CLÍNICA PUERTO MONTT", "CLÍNICA REDSALUD SANTIAGO (Hab. Compartida)", "CLÍNICA JUAN PABLO II", "CLÍNICA SIERRA BELLA", "HOSPITAL DEL PROFESOR", "HOSPITAL PARROQUIAL DE SAN BERNARDO", "CLÍNICA FLEMING ARICA", "CLÍNICA REDSALUD IQUIQUE", "CLÍNICA REDSALUD ELQUI (Hab. Compartida)", "CLÍNICA RÍO BLANCO", "CLÍNICA SAN ANTONIO", "CLÍNICA ISAMÉDICA (Hab. Compartida)", "CLÍNICA REDSALUD RANCAGUA", "CLÍNICA LAS AMAPOLAS", "CLÍNICA REDSALUD MAYOR (Hab. Compartida)", "CLÍNICA UNIVERSITARIA DE PUERTO MONTT (Hab. Compartida)", "HOSPITAL DE LAS FFAA CIRUJANO GUZMÁN", "HOSPITAL CLÍNICO IST"];
        
        $hospitalization = '';
        $preferential_consultation = '';

        for ($i=0; $i < $faker->numberBetween(1, 5); $i++) { 
            if($i!=0){
                $hospitalization .= ", ";
                $preferential_consultation .= ", ";
            }
            $hospitalization .= $faker->numberBetween(10, 100)."% ".$providers[$faker->numberBetween(0, 75)];
            $preferential_consultation .= $faker->numberBetween(10, 100)."% ".$providers[$faker->numberBetween(0, 75)];

        }
            
        return [
            "name" => $faker->name,
            "description" =>$faker->text,
            "isapre_id" => $faker->numberBetween(1, 5),
            "base_factor" => $faker->randomFloat(2, 0, 3),
            "hospitalization" =>$hospitalization,
            "preferential_consultation" => $preferential_consultation,
            "plan_type_id" => $faker->numberBetween(1, 3)
        ];
    }
}
