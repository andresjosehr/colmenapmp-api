<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use DB;

class PlansQuePlanSeeder extends Seeder
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

        $response =  Http::withHeaders([
                "accept" => "application/json, text/plain, */*",
                "content-type" => "application/json",
                "x-country" => "chile"
            ])->post("https://queplan.cl/api/buscarplanes/comparar/metadata", [
                "precio" => 60.177576212345, 
                "preciomin" => 0.67358120223467, 
                "carga" => [], 
                "cotizante" => [
                        [ "sexo" => "Masculino", "edad" => 25, "ingreso" => 300000  ] 
                ], 
                "filtros" => [
                            "cobertura" => [
                                    [ "nombre" => "Con parto", "seleccionado" => true, "elementosenbusqueda" => 1329 ], 
                                    [ "nombre" => "Reducido en parto",  "seleccionado" => true,  "elementosenbusqueda" => 0 ] 
                            ], 
                            "comerciali" => [
                                    [ "nombre" => "Comercializable",  "seleccionado" => true ], 
                                    [ "nombre" => "No Comercializable",  "seleccionado" => true  ] 
                                ], 

                            "modalidadplan" => [
                                    [ "nombre" => "Libre elección",  "seleccionado" => true,  "elementosenbusqueda" => 222  ], 
                                    [ "nombre" => "Preferentes",  "seleccionado" => true,  "elementosenbusqueda" => 1027  ], 
                                    [ "nombre" => "Cerrados",  "seleccionado" => true,  "elementosenbusqueda" => 80  ] 
                                ], 
                            "isapres" => [ "99",  "67",  "107",  "78",  "81",  "80" ], 
                            "prestador" => null, 
                            "filtroCobertura" => [] 
                            ], 
                "pagina" => 1, 
                "cantidadElementos" => 1500, 
                "order" => null 
            ]);

        $data = $response["data"];
        
        $planes = [];
        $rezagedPlans=0;
        foreach ($data as $plan) {

            switch ($plan["modalidadplan"]) {
                case 'Prestador Preferente' : $planType = 1;     break;
                case 'Libre elección'       : $planType = 2;     break;
                case 'Plan Cerrado'         : $planType = 3;     break;
                default                     : $planType = false; break;
            }

            switch ($plan["codigoprestador"]) {
                case    99  : $isapre = 1;     break;
                case    107 : $isapre = 2;     break;
                case    67  : $isapre = 3;     break;
                case    78  : $isapre = 4;     break;
                case    80  : $isapre = 5;     break;
                default     : $isapre = false; break;
            }
            
            
            if($isapre!=false && $planType!=false){
                // $planCode= str_replace("+", "%2B", $plan["codigoplan"]);
                // $url='https://queplan.cl/api/buscarplanes/cargasycotizantes/?codigoplan="'.$planCode.'"&cotizante=[{"sexo":"Masculino","edad":25,"ingreso":1000000}]&carga=[]';
                // $planQuePlan = Http::get($url)->json();
                
                // try {
                //     $baseFactor = $planQuePlan[0]["preciobasef"];
                // } catch (\Throwable $th) {
                //     $baseFactor=null;
                // }
                // return $planQuePlan[0];
                $planes[] = [
                    "name"         => $plan["nombreplan"],
                    "code"         => $plan["codigoplan"],
                    "base_factor"  => 0,
                    "hospitable"   => self::formatProviders($plan["preferentes"], "ptje_cta_hosp_preferente"),
                    "ambulatory"   => self::formatProviders($plan["preferentes"], "ptje_cta_amb_preferente"),
                    "pdf"          => "",
                    "plan_type_id" => $planType,
                    "isapre_id"    => $isapre
                ];
            }
        }
        $planProviders=[];
        foreach ($planes as $plan) {
            try {
                $id = DB::table('plans')->insertGetId([
                    "name" => $plan["name"],
                    "code" => $plan["code"],
                    "isapre_id" => $plan["isapre_id"],
                    "base_factor" => $plan["base_factor"],
                    "plan_type_id" => $plan["plan_type_id"],
                    "source" => "queplan",
                    "pdf" => $plan["pdf"]
                ]);            
                if($plan["hospitable"]!=null){
                    foreach ($plan["hospitable"] as $hospitable) {
                        $planProviders[] = $hospitable;
                        $planProviders[count($planProviders)-1]["plan_id"] = $id;
                    }
                }
                if($plan["ambulatory"]!=null){
                    foreach ($plan["ambulatory"] as $ambulatory) {
                        $planProviders[] = $ambulatory;
                        $planProviders[count($planProviders)-1]["plan_id"] = $id;
                    }
                }
            } catch (\Throwable $th) {}
        }

        // return $planProviders;
        foreach (array_chunk($planProviders, 1000) as $t) {
            DB::table("plan_providers")->insert($t);
         }

         print_r($planProviders);



        $filesInFolder = \File::files(public_path("storage/pdf"));     
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            DB::table("plans")->where("code", $file['filename'])->update(["pdf" => $file['filename'].".pdf"]);
        }

        return "Success";
    }

    public function formatProviders($preferentes, $mode)
    {   
        $proveedores = [];
        if ($preferentes==null) { return null; }
        
        foreach ($preferentes as $preferente) {
            if($provider = DB::table("providers_queplan")->where("name", "like", "%".$preferente["nombre"]."%")->first()){
                $proveedores[]=[
                    "provider_id" => $provider->super_plan_provider_id,
                    "percentage" => $preferente[$mode],
                    "mode" => $mode=="ptje_cta_amb_preferente" ? "ambulatory" : "hospitable",
                    "top" => null,
                ];
            }           
                        
        }

        return $proveedores;

    }
}
