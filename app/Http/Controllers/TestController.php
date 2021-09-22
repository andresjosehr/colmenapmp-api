<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Provider;
use App\Models\User;
use App\Models\Contact as ContactModel;
use App\Models\ProvidersQuePlan;
use Illuminate\Support\Facades\Mail;
use App\Models\PlanProvider;
use App\Models\Client;
use App\Mail\Contact;
use DB;

class TestController extends Controller
{
    public function index()
    {

        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 12000); //10 minutes

        // $fields = [
        //     "category" => "category",
        //     "codigoisapre" => "isapre_id",
        //     "codigoplan" => "plan_id",
        //     "copago_amb" => "ambulatory_payment_code",
        //     "descitem" => "description",
        //     "moneda_tope_amb" => "currency_ambulatory_type",
        //     "moneda_tope_hosp" => "currency_hospitable_type",
        //     "peso_item" => "score_weighting",
        //     "porccob_amb" => "ambulatory_porccob",
        //     "porccob_hosp" => "hospitable_porccob",
        //     "prest_analizadas" => "benefits_analyzed",
        //     "puntaje_cta" => "account_score",
        //     "puntaje_plan" => "plan_score",
        //     "puntajeamb" => "ambulatory_score",
        //     "puntajehosp" => "hospitable_score",
        //     "rutprestador" => "provider_id",
        //     "topeamb" => "ambulatory_limit",
        //     "topehosp" => "hospitable_limit"
        // ];


        // $ProvidersQuePlan=ProvidersQuePlan::all();

        // $plans = Plan::with("providers.providerQuePlan")->get();
        
        // foreach ($plans as $plan) {
        //     $scores = [];

        //     switch ($plan->isapre_id) {
        //         case    1 : $isapre = 99;     break;
        //         case    2 : $isapre = 107;     break;
        //         case    3 : $isapre = 67;     break;
        //         case    4 : $isapre = 78;     break;
        //         case    5 : $isapre = 80;     break;
        //         default   : $isapre = false; break;
        //     }

        //     if($isapre){

                

        //         $response =  Http::withHeaders([
        //             "accept" => "application/json, text/plain, */*",
        //             "content-type" => "application/json",
        //             "x-country" => "chile"
        //         ])->post("https://queplan.cl/api/buscarplanes/analisisypuntaje", [
        //             "cisapre" => $isapre,
        //             "cplan" => $plan->code,
        //             "rut_prestador" => null
        //         ]);

        //         try {
        //             $scores = [...$scores, ...$response["puntajes"]];
        //         } catch (\Throwable $th) {}

        //         foreach ($plan->providers as $provider) {
        //             if($provider->providerQuePlan){
        //                 $response =  Http::withHeaders([
        //                     "accept" => "application/json, text/plain, */*",
        //                     "content-type" => "application/json",
        //                     "x-country" => "chile"
        //                 ])->post("https://queplan.cl/api/buscarplanes/analisisypuntaje", [
        //                     "cisapre" => $isapre,
        //                     "cplan" => $plan->code,
        //                     "rut_prestador" => $provider->providerQuePlan->rut
        //                 ]);
                        
                
        //                 try {
        //                     $scores = [...$scores, ...$response["puntajes"]];
        //                 } catch (\Throwable $th) {}
        //             }

        //         }

        //     }
        //     $scoreUltimate = [];

        //     foreach ($scores as $score) {
        //         $scoreUltimate[]=[
        //             "category" => $score["category"],
        //             "isapre_id" => $plan->isapre_id,
        //             "plan_id" => $plan->id,
        //             "ambulatory_payment_code" => $score["copago_amb"],
        //             "description" => $score["descitem"],
        //             "currency_ambulatory_type" => $score["moneda_tope_amb"],
        //             "currency_hospitable_type" => $score["moneda_tope_hosp"],
        //             "score_weighting" => $score["peso_item"],
        //             "ambulatory_porccob" => $score["porccob_amb"],
        //             "hospitable_porccob" => $score["porccob_hosp"],
        //             "benefits_analyzed" => $score["prest_analizadas"],
        //             "account_score" => $score["puntaje_cta"],
        //             "plan_score" => $score["puntaje_plan"],
        //             "ambulatory_score" => $score["puntajeamb"],
        //             "hospitable_score" => $score["puntajehosp"],
        //             "provider_id" => $score["rutprestador"],
        //             "ambulatory_limit" => $score["topeamb"],
        //             "hospitable_limit" => $score["topehosp"]
        //         ];
        //     }

        //     DB::table("scores")->insert($scoreUltimate);

        // }

        // return "Success";


        // $response =  Http::withHeaders([
        //     "accept" => "application/json, text/plain, */*",
        //     "content-type" => "application/json",
        //     "x-country" => "chile"
        // ])->post("https://queplan.cl/api/buscarplanes/analisisypuntaje", [
        //     "cisapre" => 67,
        //     "cplan" => "CLTC26120",
        //     "rut_prestador" => null
        // ]);

            // return $response;






        // $user = User::find(1);
        // $contact = ContactModel::with("client.burdens", "client.isapre", "client.region", "client.couple", "plan")->find(2);

        // Ship the order...

        // Mail::to($user)->send(new Contact($contact));
        
    // for ($i=66; $i < 68; $i++) { 
        
            // $response =  Http::withHeaders([
            //     "accept" => "application/json, text/plain, */*",
            //     "content-type" => "application/json",
            //     "x-country" => "chile"
            // ])->post("https://queplan.cl/api/buscarplanes/comparar/metadata", [
            //     "precio" => 60.177576212345, 
            //     "preciomin" => 0.67358120223467, 
            //     "carga" => [], 
            //     "cotizante" => [
            //             [ "sexo" => "Masculino", "edad" => 25, "ingreso" => 300000  ] 
            //     ], 
            //     "filtros" => [
            //                 "cobertura" => [
            //                         [ "nombre" => "Con parto", "seleccionado" => true, "elementosenbusqueda" => 1329 ], 
            //                         [ "nombre" => "Reducido en parto",  "seleccionado" => true,  "elementosenbusqueda" => 0 ] 
            //                 ], 
            //                 "comerciali" => [
            //                         [ "nombre" => "Comercializable",  "seleccionado" => true ], 
            //                         [ "nombre" => "No Comercializable",  "seleccionado" => true  ] 
            //                     ], 

            //                 "modalidadplan" => [
            //                         [ "nombre" => "Libre elección",  "seleccionado" => true,  "elementosenbusqueda" => 222  ], 
            //                         [ "nombre" => "Preferentes",  "seleccionado" => true,  "elementosenbusqueda" => 1027  ], 
            //                         [ "nombre" => "Cerrados",  "seleccionado" => true,  "elementosenbusqueda" => 80  ] 
            //                     ], 
            //                 "isapres" => [ "99",  "67",  "107",  "78",  "81",  "80" ], 
            //                 "prestador" => null, 
            //                 "filtroCobertura" => [] 
            //                 ], 
            //     "pagina" => 1, 
            //     "cantidadElementos" => 1500, 
            //     "order" => null 
            // ]);
            
            // return $response["data"];
            
        // }




        // $path = storage_path('app/public/basefactors.json');
        // $baseFactors = json_decode( file_get_contents($path), true );

        
        // foreach($baseFactors as $baseFactor){
        //     try {
        //         Plan::where("code", $baseFactor["code"])->update(["base_factor" => $baseFactor["base_factor"]]);
        //     } catch (\Throwable $th) {
        //         //throw $th;
        //     }
            
        // }
        // return count($baseFactors);
        // $plans = Plan::all();
        // $planesitos = [];
        // foreach ($plans as $plan) {
        //     $planCode= str_replace("+", "%2B", $plan->code);
        //     $url='https://queplan.cl/api/buscarplanes/cargasycotizantes/?codigoplan="'.$planCode.'"&cotizante=[{"sexo":"Masculino","edad":25,"ingreso":1000000}]&carga=[]';
        //     $planQuePlan = Http::get($url)->json();
        //             try {
        //                 $baseFactor = $planQuePlan[0]["preciobasef"];
        //             } catch (\Throwable $th) {
        //                 $baseFactor=0;
        //             }
        //             $planesitos[]=[
        //                 "code" => $plan->code,
        //                 "base_factor" => $baseFactor
        //             ];
        //             // return $planQuePlan[0];

        //     // Plan::find($plan->id)->update(["base_factor" => $baseFactor]);
        // }
        // return $planesitos;

        // $planProviders = PlanProvider::all();
        
        // foreach ($planProviders as $planProvider) {
        //     PlanProvider::find($planProvider->id)->update(["percentage" => $planProvider->percentage."0"]);
        // }
        // return "Exito";


        // $filesInFolder = \File::files(public_path("storage/pdf"));     
        // foreach($filesInFolder as $path) { 
        //     $file = pathinfo($path);
        //     Plan::where("code", $file['filename'])->update(["pdf" => $file['filename'].".pdf"]);
        // }

        // return "success";


        // $path = storage_path('app/public/planesqueplan.json');
        // $data = json_decode( file_get_contents($path), true );




        
        // foreach($data as $planJSON){

        //     try {
        //         Plan::where("code", $planJSON["codigoplan"])->update([
        //             "ambulatory_percentage" => $planJSON["porc_amb_le"],
        //             "hospitable_percentage" =>$planJSON["porc_hosp_le"],
        //             "urgency_percentage" =>$planJSON["porc_urg_le"],
        //             "annual_limit" => $planJSON["topeanual"]
        //         ]);
        //     } catch (\Throwable $th) {
        //         //throw $th;
        //     }
        // }



        // foreach($data as $planJSON){

        //     try {

        //         if($planJSON["preferentes"]!=null && $plan = Plan::where("code", $planJSON["codigoplan"])->first()){
        //             foreach ($planJSON["preferentes"] as $proveedor) {
        //                 if($providerQuePlan= DB::table("providers_queplan")->where("name", "LIKE", "%".$proveedor["nombre"]."%")->first()){
        //                     PlanProvider::insert([                                
        //                         "plan_id" => $plan->id, 
        //                         "provider_id" => $providerQuePlan->super_plan_provider_id,
        //                         "percentage_ambulatory" => $proveedor["ptje_cta_amb_preferente"],  
        //                         "percentage_hospitable" => $proveedor["ptje_cta_hosp_preferente"],  
        //                         "urgency_amount" => $proveedor["urg_cob_amount"],  
        //                         "urgency_unit" => $proveedor["urg_cob_unit"]
        //                     ]);
                            
        //                 }

        //             }
        //         }
                
        //     } catch (\Throwable $th) {
        //         return $th;
        //     }
        // }
        
        // return "Success";




        
        // $response =  Http::get('https://queplan.cl/api/infoplanes/prestadoresplan/?codigoplan=%221ONQ92G521%22');
        // return $response



        // $path = storage_path('app/public/planesqueplan.json');
        // $data = json_decode( file_get_contents($path), true );
        
        // $planProvidersQuePlan = [];

        // foreach($data as $planJSON){

        //     $planProvidersQuePlan[$planJSON['codigoplan']] = [];

        //     $response =  Http::get('https://queplan.cl/api/infoplanes/prestadoresplan/?codigoplan="'.$planJSON['codigoplan'].'"');

        //     $res = $response->json() == null ? [] : $response->json();
        //     $planProvidersQuePlan[$planJSON['codigoplan']] = array_merge($planProvidersQuePlan[$planJSON['codigoplan']], $res);
        // }

        // return $planProvidersQuePlan; 
        


        // $path = storage_path('app/public/plan_providers_queplan.json');
        // $data = json_decode( file_get_contents($path), true );
        
        // $plansCodeId = [];
        // foreach(DB::table("plans")->get() as $plan){

        //     $plansCodeId[$plan->code]=$plan->id;

        // };


        // $providersQuePlanNameId = [];
        // foreach(DB::table("providers_queplan")->get() as $providerQuePlan){

        //     $providersQuePlanNameId[$providerQuePlan->name]=$providerQuePlan->super_plan_provider_id;

        // };

        // $dataToUpdate = [];
        // foreach ($data as $plan_code => $planProviders){
        //     foreach ($planProviders as $planProvider){
        //         if(isset($providersQuePlanNameId[$planProvider["nombre"]]) 
        //             && isset($plansCodeId[$plan_code])){

        //             $dataToUpdate[]=DB::table("plan_providers")
        //             ->where("plan_id", $plansCodeId[$plan_code])
        //             ->where("provider_id", $providersQuePlanNameId[$planProvider["nombre"]])
        //             ->update([
        //                 "percentage_ambulatory" => $planProvider["porc_amb"]/10,
        //                 "percentage_hospitable" => $planProvider["porc_hosp"]/10
        //             ]);

        //         }
        //     }
        // }


        // // porc_hosp
        // // porc_amb

        // return "Exito";


        















        //$plans = ["BCSF2012A1", "BCSF2012A2", "BCSF2012B1", "BCSF2012A3", "BCSF2012B2", "BCSF2012C1", "BCSF2012B3", "BCSF2012C2", "BCSF2012C3", "BCSF2012B4", "BCSF2012B5", "BCSF2012C4", "BCSF2012C5", "BCSF2012D4", "BCSF2012D5", "BCCF2012C1", "BCCF2012B2", "BCCF2012A3", "BCCF2012C2", "BCCF2012B3", "BCCF2012C3", "BCCF2012B4", "BCCF2012B5", "BCCF2012C4", "BCCF2012D4", "BCCF2012C5", "BCCF2012D5", "B5SH209B0", "B5SH209B1", "B5SH209C2", "B5PRH209A1", "BCSU204A1", "BCSU204B1", "BCSU204B2", "BCSU204C1", "BCSU204D1", "BCSU204C2", "BCSU204C3", "BCSU204B4", "BCSU204D2", "BCSU204C4", "BCSU204D3", "BCSU204C5", "BCSU204D4", "BCSU204E4", "BCSU204E5", "B5SPRU204A1", "B5SPRU204B2", "B5SPRU204C3", "B5SPRU204C4", "B5PRU2041A", "B5PRU204D5", "BNCU204BA3", "BNCU204BB2", "BNCU204BC1", "BNCU204BB3", "BNCU204BC2", "BNCU204BC3", "BNCU204BB4", "BNCU204BB5", "BNCU204BC4", "BNCU204BC5", "BNCU204B6", "BNCU204BD5", "BNSU2103A0", "BNSU204A1", "BNSU204B1", "BNSU204B2", "BNSU204C1", "BNSU204D1", "BNSU204C2", "BNSU204C3", "BNSU204B4", "BNSU204D2", "BNSU204C4", "BNSU204D3", "BNSU204C5", "BNSU204D4", "BNSU204E4", "BNSU204E5", "BNSPRU204A1", "BNSPRU204A2", "BNPRU204B3", "BSCU204BB1", "BSCU204BA2", "BSCU204BC1", "BSCU204BA3", "BSCU204BB2", "BSCU204BB3", "BSCU204BC2", "BSCU204BC3", "BSCU204BB4", "BSCU204BC4", "BSCU204BB5", "BSCU204B6", "BSCU204BC5", "BSCU204BD5", "BSSU2103A0", "BSSU204A1", "BSSU204B1", "BSSU204B2", "BSSU204C1", "BSSU204C2", "BSSU204D1", "BSSU204C3", "BSSU204B4", "BSSU204D2", "BSSU204C4", "BSSU204D3", "BSSU204C5", "BSSU204D4", "BSSU204E4", "BSSU204E5", "BSSPRU204A1", "BSSPRU204A2", "BSSPRU204B3", "BBSF2102A1", "BBSF2102A2", "BBSF2102B1", "BBSF2102A3", "BBSF2102B2", "BBSF2102C1", "BBSF2102B3", "BBSF2102C2", "BBSF2102C3", "BBSF2102B4", "BBSF2102C4", "BBSF2102B5", "BBSF2102D4", "BBSF2102C5", "BBSF2102D5", "B8SU2103AC", "B8SU2103AB", "B8SU2103BC", "B8SU2103AA", "B8SU2103A0", "B8SU2103BB", "B8SU2103CC", "B8SU2103A1", "B8SU2103BA", "B8SU2103B0", "B8SU2103CB", "B8SU2103A2", "B8SU2103A3", "B8SU2103B1", "B8SU2103A4", "B8SU2103C0", "B8SU2103B2", "B8SU2103A5", "B8SU2103C1", "B8SU2103D0", "B8SU2103C2", "B8SU2103B4", "B8SU2103D1", "B8SU2103C3", "B8SU2103D2", "B8SU2103C4", "B8SU2103D3", "B8SU2103C5", "B8SU2103E4", "B8SU2103E5", "B8SPRU201000", "B8SPRU210400", "B8SPRU2103A1", "B8SPRU2103A2", "B8PRU2103B3"];
        // $plans = ["13-SLCT10-21", "13-SLCT20-21", "13-SLCT30-21", "13-SLCT40-21", "13-SLCT50-21", "13-SLCT60-21", "13-SLCT70-21", "13-SLCT80-21", "13-SLCT90-21", "13-SLCT100-21", "13-SLCT110-21", "13-SLCT120-21", "15-LEN04A-20", "15-LEN05A-20", "15-LEN06A-20", "15-LEN07A-20", "15-LEN08A-20", "15-LEN09A-20", "15-LEN10A-20", "15-LEN11A-20", "15-LEN12A-20", "15-LEN13A-20", "15-LEN14A-20", "15-LEN15A-20", "15-LEN16A-20", "15-LEN17A-20", "15-LEN18A-20", "15-LEN19A-20", "15-LEN01A-20", "15-LEN02A-20", "15-LEN01-20", "15-LEN02-20", "15-LEN03-20", "15-LEN04-20", "15-LEN05-20", "15-LEN06-20", "15-LEN07-20", "15-LEN08-20", "15-LEN09-20", "15-LEN10-20", "15-LEN11-20", "15-LEN12-20", "15-LEN13-20", "15-LEN14-20", "15-LEN15-20", "15-LEN16-20", "15-LEN17-20", "15-LEN18-20", "15-LEN19-20", "13-EP1000-20", "13-EP1001-20", "13-EP1002-20", "13-EP10025-20", "13-EP1003-20", "13-EP1004-20", "13-EP1005-20", "13-EP1006-20", "13-EP1007-20", "13-EP1008-20", "13-EP1009-20", "13-EP1010-20", "13-EP1011-20", "13-EP1012-20", "13-EP1013-20", "13-EP1014-20", "13-EP1015-20", "13-EP1016-20", "13-EP02-20", "13-EP03-20", "13-EP04A-20", "13-EP05A-20", "13-EP06A-20", "13-EP07A-20", "13-EP08A-20", "13-EP09A-20", "13-EP10A-20", "13-EP11A-20", "13-EP12A-20", "13-EP13A-20", "13-EP08B-20", "13-EPROT10-21", "13-EPROT20-21", "13-EPROT30-21", "13-SM210-20", "13-SM220-20", "13-SM230-20", "13-SM240-20", "13-SM250-20", "13-SM260-20", "13-SM270-20", "13-SM280-20", "13-SM290-20", "13-SM2100-20", "13-SM2110-20", "13-SM2120-20", "13-SM1001-20", "13-SM1002-20", "13-SM1003-20", "13-SM1003B-20", "13-SM1004-20", "13-SM1005-20", "13-SM1006-20", "13-SM1007-20", "13-SM1008-20", "13-SM1009-20", "13-SM100A-20", "13-SM110A-20", "13-SM120A-20", "13-SM130A-20", "13-SMTA19-20", "13-SMTA20-20", "13-SMRT11B-20", "13-SMRT12B-20", "13-SMRT16B-20", "13-SMART01-20", "13-SMART03-20", "13-SMRT11A-20", "13-SMRT14A-20", "13-SMART15-20", "14-NVSD10-21", "14-NVSD20-21", "14-NVSD30-21", "14-NVSD40-21", "14-NVSD50-21", "14-CP1010-20", "14-CP1020-20", "14-CP1030-20", "14-CP1040-20", "14-CP1050-20", "14-CP1060-20", "14-CP1070-20", "14-CP1080-20", "14-CP1090-20", "14-CP10100-20", "14-CP10110-20", "14-CP1000-21", "14-CP1015-21", "14-CP10120-21", "14-CP0902-20", "14-CP0904-20", "14-CP0906-20", "14-CP0910-20"];
        // $plansUltimate = [];
        // $noExiste = [];
        // foreach ($plans as $planCode){
            

        //         $factorBase =  Http::get('https://queplan.cl/api/buscarplanes/cargasycotizantes/?codigoplan="'.$planCode.'"&cotizante=%5B%7B%22sexo%22%3A%22Masculino%22%2C%22edad%22%3A25%2C%22ingreso%22%3A2000000%7D%5D&carga=%5B%5D');
        //         $factorBase = $factorBase->json() == null ? [] : $factorBase->json();
        //         if(isset($factorBase[0])){
        //             $plansUltimate[$planCode] = [];
        //             $factorBase[0]['preciobasef'];


        //             $infoPlan = Http::get('https://queplan.cl/api/infoplanes/infoplan?planid='.$planCode.'&datospersona=%7B%22enPareja%22%3Afalse%2C%22cotizante%22%3A%5B%7B%22sexo%22%3A%22Masculino%22%2C%22edad%22%3A25%2C%22ingreso%22%3A2000000%7D%5D%2C%22cargas%22%3A%5B%5D%2C%22region%22%3A%7B%22stateCode%22%3A%2213%22%2C%22stateName%22%3A%22Metropolitana%22%2C%22orderPosition%22%3A1%2C%22abbreviation%22%3A%22RM%22%7D%2C%22ingresodatos%22%3Atrue%2C%22referido%22%3Anull%2C%22precios%22%3A%7B%22preciomax%22%3A352286%2C%22preciomin%22%3A50000%2C%22topeimponible%22%3A%5Btrue%2Cfalse%5D%2C%22calculadoUF%22%3A5.71199498611514%2C%22calculadoPeso%22%3A171341%2C%22precioReal%22%3A175000%2C%22precioRealUF%22%3A0%7D%2C%22preciosSeguros%22%3A%7B%22precio%22%3A0%7D%2C%22prices%22%3A%7B%22preciomax%22%3A0%2C%22preciomin%22%3A0%7D%2C%22previsiones%22%3A%7B%7D%2C%22prevision%22%3Anull%7D');
        //             $infoPlan = $infoPlan->json() == null ? [] : $infoPlan->json();

        //             $plansUltimate[$planCode]=[
        //                 "name" => $infoPlan["nombreplan"],
        //                 "base_factor" => $factorBase[0]['preciobasef'],
        //                 "isapre_id" => 1,
        //                 "plan_type" => 1,
        //                 "ambulatory_percentage" => $infoPlan["porc_amb_le"],
        //                 "hospitable_percentage" => $infoPlan["porc_hosp_le"],
        //                 "urgency_percentage" => $infoPlan["porc_urg_le"],
        //                 "annual_limit" => $infoPlan["topeanual"],
        //             ];


        //             $plansUltimate[$planCode]["plan_providers"]=[];
        //             $planProviders =  Http::get('https://queplan.cl/api/infoplanes/prestadoresplan/?codigoplan="'.$planCode.'"');
        //             $planProviders = $planProviders->json() == null ? [] : $planProviders->json();

        //             $plansUltimate[$planCode]["plan_providers"] = array_merge($plansUltimate[$planCode]["plan_providers"], $planProviders);
        //         } else {
        //             $noExiste[]=$planCode;
        //         }
        // }

        // return [$plansUltimate, $noExiste];







         $path = storage_path('app/public/nuevos_planes_consalud.json');
         $data = json_decode( file_get_contents($path), true );

         $providersQuePlanNameId = [];
            foreach(DB::table("providers_queplan")->get() as $providerQuePlan){
                $providersQuePlanNameId[$providerQuePlan->name]=$providerQuePlan->super_plan_provider_id;
            }
            $providersQuePlanNameId['Clínica Reñaca ']=14;
            $providersQuePlanNameId['Clínica Andes Salud Puerto Montt']=6;
            $providersQuePlanNameId['Clínica Alemana Valdivia ']=25;
            
            


        // return $providersQuePlanNameId;

         foreach($data[0] as $codigoPlan => $plan){
             if($planFromDatabase = DB::table("plans")->where("code", $codigoPlan)->first()){
                DB::table("plans")->where("code", $codigoPlan)->update([
                    "base_factor" => $plan['base_factor'],
                    "isapre_id" => 2,
                    "plan_type_id" => 1,
                    "ambulatory_percentage" => $plan["ambulatory_percentage"]==null ? 0 : $plan["ambulatory_percentage"],
                    "hospitable_percentage" => $plan["hospitable_percentage"]==null ? 0 : $plan["hospitable_percentage"],
                    "urgency_percentage" => $plan["urgency_percentage"]==null ? 0 : $plan["urgency_percentage"],
                    "annual_limit" => $plan["annual_limit"],
                ]);
             } else{
                DB::table("plans")->insert([
                    "name" => $plan['name'],
                    "code" => $codigoPlan,
                    "base_factor" => $plan['base_factor'],
                    "isapre_id" => 2,
                    "plan_type_id" => 1,
                    "ambulatory_percentage" => $plan["ambulatory_percentage"]==null ? 0 : $plan["ambulatory_percentage"],
                    "hospitable_percentage" => $plan["hospitable_percentage"]==null ? 0 : $plan["hospitable_percentage"],
                    "urgency_percentage" => $plan["urgency_percentage"]==null ? 0 : $plan["urgency_percentage"],
                    "annual_limit" => $plan["annual_limit"],
                    "source" => "queplan",
                ]);
             }


            $planFromDatabase = DB::table("plans")->where("code", $codigoPlan)->first();

            DB::table("plan_providers")->where("plan_id", $planFromDatabase->id)->delete();

            foreach($plan["plan_providers"] as $provider){
                try {
                    DB::table("plan_providers")->insert([
                        "plan_id" => $planFromDatabase->id,
                        "provider_id" =>  $providersQuePlanNameId[$provider["nombre"]],
                        "percentage_ambulatory" => $provider["porc_hosp"] / 10,
                        "percentage_hospitable" => $provider["porc_amb"] / 10,
                    ]);
                } catch (\Throwable $th) {
                    return "<pre>".$provider["nombre"]."</pre>";
                }
               
            }

             
         }


        return "Exito";


    //     $planProviders =  DB::table("plan_providers")->where("percentage_hospitable", ">", 10)->get();

    //     foreach ($planProviders as $planProvider) {
    //         DB::table("plan_providers")->where("id", $planProvider->id)->update(["percentage_hospitable" => $planProvider->percentage_hospitable / 10]);
    //     }

    //     return "Exito";
    }

}