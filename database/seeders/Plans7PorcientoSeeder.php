<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Plans7PorcientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 600); //10 minutes

        $path = storage_path('app/public/planestu7porciento.json');
        $data = json_decode( file_get_contents($path), true );

        $planes = [];

        $providers = [];
        
        foreach ($data as $plan) {


            switch ($plan["tipo"]) {
                case 'Preferente'      : $planType=1; break;
                case 'Libre Elección'  : $planType=2; break;
                case 'Cerrado'         : $planType=3; break;
            }

            switch ($plan["isapre"]) {
                case 'Banmedica'  : $isapre=1;     break;
                case 'Consalud'   : $isapre=2;     break;
                case 'Colmena'    : $isapre=3;     break;
                case 'Cruz Blanca': $isapre=4;     break;
                case 'Vidatres'   : $isapre=5;     break;
                default           : $isapre=false; break;
            }
            
            
            if($isapre!=false){
                
                


                $planes[] = [
                    "name"          => explode(" [", $plan["nombre"])[0],
                    "code"          => $plan["codigo"],
                    "base_factor"   => $plan["base"],
                    "pdf"           => $plan["planPdf"],
                    "plan_type_id"  => $planType,
                    "hospitable"    => self::formatProviders($plan["hospitalaria"]),
                    "ambulatory"    => self::formatProviders($plan["ambulatoria"]),
                    "hospitable7"   => $plan["hospitalaria"],
                    "ambulatory7"   => $plan["ambulatoria"],
                    "isapre_id"     => $isapre
                ];
            }
        }
        
        $planes=self::secondFormat($planes);
        $planes=self::secondFormat($planes);
        $planes=self::secondFormat($planes);

        $newPlans=[];
        $ids = [];
        foreach($planes as $plan){
            
            $newPlans[]=$plan;
            $last=count($newPlans)-1;
            $newPlans[$last]["hospitable"]=[];
            $newPlans[$last]["ambulatory"]=[];

            foreach ($plan["hospitable"] as $hospitable){
                if($provider = DB::table("providers_7porciento")->where("name", $hospitable["name"])->first()){
                    $newPlans[$last]["hospitable"][]=[
                        "provider_id" => $provider->super_plan_provider_id,
                        "percentage" => $hospitable["percentege"],
                        "mode" => "hospitable",
                        "top" => $hospitable["tope"],
                    ];
                }
            }

            foreach ($plan["ambulatory"] as $ambulatory){
                if($provider = DB::table("providers_7porciento")->where("name", $ambulatory["name"])->first()){
                    $newPlans[$last]["ambulatory"][]=[
                        "provider_id" => $provider->super_plan_provider_id,
                        "percentage" => $ambulatory["percentege"],
                        "mode" => "ambulatory",
                        "top" => $ambulatory["tope"],
                    ];
                }
            }
        }
        
        $planProviders=[];
        foreach ($newPlans as $plan) {
            try {
                $id = DB::table('plans')->insertGetId([
                    "name" => $plan["name"],
                    "code" => $plan["code"],
                    "isapre_id" => $plan["isapre_id"],
                    "base_factor" => $plan["base_factor"],
                    "plan_type_id" => $plan["plan_type_id"],
                    "source" => "7porciento",
                    "pdf" => "https://tu7porciento.cl/pdf-planes/".$plan["pdf"]
                ]);
                
                foreach ($plan["hospitable"] as $hospitable) {
                    $planProviders[] = $hospitable;
                    $planProviders[count($planProviders)-1]["plan_id"] = $id;
                }
                
                foreach ($plan["ambulatory"] as $ambulatory) {
                    $planProviders[] = $ambulatory;
                    $planProviders[count($planProviders)-1]["plan_id"] = $id;
                }
            } catch (\Throwable $th) {}
        }

        // return $planProviders;
        foreach (array_chunk($planProviders, 1000) as $t) {
            DB::table("plan_providers")->insert($t);
         }

         DB::table("plan_providers")->where("percentage", 0)->update(["percentage" => null]);
         DB::table("plan_providers")->where("percentage", -50)->update(["percentage" => 50]);
         DB::table("plan_providers")->where("percentage", -60)->update(["percentage" => 60]);
         DB::table("plan_providers")->where("percentage", -70)->update(["percentage" => 70]);
         DB::table("plan_providers")->where("percentage", -80)->update(["percentage" => 80]);
         DB::table("plan_providers")->where("percentage", -90)->update(["percentage" => 90]);
         DB::table("plan_providers")->where("percentage", -100)->update(["percentage" => 100]);

         DB::table("plan_providers")->where("percentage", -1090)->update(["percentage" => 90]);
         DB::table("plan_providers")->where("percentage", -1270)->update(["percentage" => 70]);
         DB::table("plan_providers")->where("percentage", -1280)->update(["percentage" => 80]);
         DB::table("plan_providers")->where("percentage", -1550)->update(["percentage" => 50]);

         DB::table("plan_providers")->where("percentage", -1560)->update(["percentage" => 60]);
         DB::table("plan_providers")->where("percentage", -10100)->update(["percentage" => 100]);

        return "Success";
    }

    public function formatProviders($provi)
    {
        $providers=[];
        foreach(explode("%", $provi) as $provider){
            if($provider!=explode("%", $provi)[0]){

                $providers=self::splitProviders(",", $provider, $prevProvider, $providers);
                $providers=self::splitProviders("-", $provider, $prevProvider, $providers, false);
                $providers=self::splitProviders(" y ", $provider, $prevProvider, $providers, false);
                $providers=self::splitProviders("/", $provider, $prevProvider, $providers, false);
            }
            $prevProvider=$provider;
        }

        return isset($providers) ? $providers : [];
    }


    public function splitProviders($character, $provider, $prevProvider, $providers, $getOne=true)
    {
        if(count(explode($character, $provider))>1){

            foreach(explode($character, $provider) as $prov){
                
                if(count($providers)==0){
                    $tope = str_contains($prov." ", 'C/Topes') ? "C/T" : "S/T";
                } else {
                    $tope = str_contains($prevProvider." ", 'C/Topes') ? "C/T" : "S/T";
                }
                

                $name=preg_replace('/[0-9]+/', '', $prov);
                $name=str_replace('S/T', '', $name);
                $providers[]=[
                    "percentege" => (int) filter_var($prevProvider, FILTER_SANITIZE_NUMBER_INT),
                    "tope" => $tope,
                    "name" => $name
                ];
            }
        } 

        if(count(explode(",", $provider))==1 && count(explode(" y ", $provider))==1 && count(explode("/", $provider))==1 && count(explode("-", $provider))==1 && $getOne==true) {


                if(count($providers)==0){
                    $tope = str_contains($provider." ", 'C/Topes') ? "C/T" : "S/T";
                } else {
                    $tope = str_contains($prevProvider." ", 'C/Topes') ? "C/T" : "S/T";
                }

                $name=preg_replace('/[0-9]+/', '', $provider);
                $name=str_replace('S/T', '', $name);
                $providers[]=[
                    "percentege" => (int) filter_var($prevProvider, FILTER_SANITIZE_NUMBER_INT),
                    "tope" => $tope,
                    "name" => $name
                ];
        }

        return $providers;
    }



    public function secondFormat($planes)
    {
        $newPlanes=[];
        foreach ($planes as $plan) {

            $newPlanes[]=$plan;
            $newPlanes[count($newPlanes)-1]["hospitable"]=[];
            $newPlanes[count($newPlanes)-1]["ambulatory"]=[];

            foreach($plan["hospitable"] as $hospitable){
                if(count(explode(" y ", $hospitable["name"]))>1){
                    $newPlanes=self::secondFormatSplit(" y ", $hospitable, $newPlanes, "hospitable");                    
                } elseif(count(explode(",", $hospitable["name"]))>1){
                    $newPlanes=self::secondFormatSplit(",", $hospitable, $newPlanes, "hospitable");                    
                }elseif(count(explode("-", $hospitable["name"]))>1){
                    $newPlanes=self::secondFormatSplit("-", $hospitable, $newPlanes, "hospitable");                    
                }elseif(count(explode("/", $hospitable["name"]))>1){
                    $newPlanes=self::secondFormatSplit("/", $hospitable, $newPlanes, "hospitable");                    
                } else{
                    $newPlanes[count($newPlanes)-1]["hospitable"][]=$hospitable;
                }
            }

            $newPlanes=self::ThirdFormatSplit($newPlanes, "hospitable");                    


            foreach($plan["ambulatory"] as $ambulatory){

                        if(count(explode(" y ", $ambulatory["name"]))>1){
                            $newPlanes=self::secondFormatSplit(" y ", $ambulatory, $newPlanes, "ambulatory");                    
                        } elseif(count(explode(",", $ambulatory["name"]))>1){
                            $newPlanes=self::secondFormatSplit(",", $ambulatory, $newPlanes, "ambulatory");                    
                        }elseif(count(explode("-", $ambulatory["name"]))>1){
                            $newPlanes=self::secondFormatSplit("-", $ambulatory, $newPlanes, "ambulatory");                    
                        }elseif(count(explode("/", $ambulatory["name"]))>1){
                                $newPlanes=self::secondFormatSplit("/", $ambulatory, $newPlanes, "ambulatory");                    
                        } else{
                            $newPlanes[count($newPlanes)-1]["ambulatory"][]=$ambulatory;
                        }                    
                }        

            $newPlanes=self::ThirdFormatSplit($newPlanes, "ambulatory");                       
            
        }

        return $newPlanes;
    }

    public function secondFormatSplit($character, $keylable, $newPlanes, $term)
    {
        foreach(explode($character, $keylable["name"]) as $goodName){                     

            $newPlanes[count($newPlanes)-1][$term][]=[
                "percentege" => $keylable["percentege"],
                "tope" => $keylable["tope"],
                "name" => $goodName
            ];
        }

        return $newPlanes;
    }

    public function ThirdFormatSplit($newPlanes, $term)
    {
            $newTerm=[];
            foreach($newPlanes[count($newPlanes)-1][$term] as $item){                     

                $item["name"]=trim($item["name"]);
                $item["name"]=str_replace(array(".", "\n", ";", ":", "T "), "", $item["name"]);
                $item["name"]=str_replace(array("U "), "Universidad ", $item["name"]);
                $item["name"]=str_replace(array("sin tope en ", "Sin Tope ", "Sin Tope"), "", $item["name"]);
                $item["name"]=str_replace(array("RS"), "RedSaud", $item["name"]);

                $item["name"]=str_replace(array("RedSaludProvidencia"), "RedSalud Providencia ", $item["name"]);
                $item["name"]=str_replace(array("RedSaludSantiago"), "RedSalud Santiago ", $item["name"]);
                $item["name"]=str_replace(array("RedSaludVitacura"), "RedSalud Vitacura ", $item["name"]);
                $item["name"]=str_replace(array("RedsaludVitacura"), "RedSalud Vitacura ", $item["name"]);
                $item["name"]=str_replace(array("Stgo"), "Santiago ", $item["name"]);
                $item["name"]=str_replace(array("stgo"), "Santiago ", $item["name"]);
                $item["name"]=str_replace(array("Cl "), "", $item["name"]);
                $item["name"]=str_replace(array("Clínica "), "", $item["name"]);
                $item["name"]=str_replace(array("Clínicas "), "", $item["name"]);
                $item["name"]=str_replace(array("Clínicas "), "", $item["name"]);
                
                $item["name"]=str_contains($item["name"]." ", ' (') ? explode("(", $item["name"])[0] : $item["name"];
                

                if($item["name"]!=""){
                    $newTerm[]=[
                        "percentege" => $item["percentege"],
                        "tope" => $item["tope"],
                        "name" => $item["name"]
                    ];
                }
            }

            $newPlanes[count($newPlanes)-1][$term]=$newTerm;

            return $newPlanes;
         
    }

    public function getAllProviders($planes)
    {
        $providers=[];
        foreach ($planes as $plan) {
            foreach ($plan["hospitable"] as $provider) {
                $providers[]=["name" => $provider["name"]];
            }
        }

        foreach ($planes as $plan) {
            foreach ($plan["ambulatory"] as $provider) {
                $providers[]=["name" => $provider["name"]];
            }
        }

        return $providers;
        
    }
    
}
