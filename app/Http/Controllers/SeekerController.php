<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Client;
use App\Models\Region;
use App\Models\Provider;
use App\Models\Metadata;
use App\Models\PlanProvider;
use App\Models\PlanType;
use App\Models\Isapre;
use App\Models\Contact;
use App\Models\Burden;
use App\Models\SuscriptionPrice;
use App\Http\Controllers\ApiResponseController;
use DB;

class SeekerController extends Controller
{
    public $request;

    public function getPlans(Request $request)
    {
        
        DB::enableQueryLog();

        ini_set('max_execution_time', 0); // 0 = Unlimited
        

        $ufValue = Metadata::where("name", "valor_uf")->first()->value;

        $plans = Plan::with("planType", "isapre", "providers.providerData", "scores")
                ->join('isapres', 'plans.isapre_id','=','isapres.id')
                ->select('plans.*', "isapres.ges");

        $burdens = $request->burdens ? $request->burdens : "0.6";        
        $burdens = explode(", ", $burdens);
        $totalBurdens = count($burdens);
        $familyFactor = array_sum($burdens);
        
        // return [$familyFactor, $totalBurdens, $burdens];
        $plans=$plans->select('plans.*', "isapres.ges",
            DB::raw("(base_factor * $familyFactor) + (ges * $totalBurdens) as uf_value"), 
            DB::raw("((base_factor * $familyFactor) + (ges * $totalBurdens)) * $ufValue as price")
        );


        $regionsStringIDs = "1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21";
        $regions = $request->regions ? $request->regions : $regionsStringIDs;
        $regionsIDs = explode(", ", $regions);   

        $providerIDsForRegion = Provider::select("id")
                        ->whereIn("region_id", $regionsIDs)
                        ->get();


        $providersStringIDs = "1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80";
        if($request->providers != $providersStringIDs && $request->providers!=''){

            $providers = $request->providers ? $request->providers : $providersStringIDs;
            $providersIDs = explode(", ", $providers);   


            $plansIDs = PlanProvider::select("plan_id")
                        ->whereIn("provider_id", $providersIDs)
                        ->whereIn("provider_id", $providerIDsForRegion)
                        ->groupBy("plan_id")
                        ->get(); // ->get()->toArray();

            $plans=$plans->where(function($q) use ($plansIDs, $request){
                $plantTypes = $request->planTypes ? $request->planTypes :  "1, 2, 3, 4, 5";
                $plantTypes = str_contains($plantTypes, "2") ? 2 : 0;
                return $q->whereIn("plans.id", $plansIDs)->orWhere("plan_type_id", $plantTypes)->orWhere(function($q2) use ($request){
                    if($request->regions){
                        if(str_contains($request->regions, "21")){
                            return $q2->where("plans.isapre_id", 3)->where("plans.regional", 1);
                        }
                    }
                    return $q2->orwhere("plans.national", 1);
                });
            });
        }


        if($request->regions){
            if(str_contains($request->regions, "21")){
                $plans=$plans->where("regional", 1);
            } else {
                $plans=$plans->where("regional", 0);
            }
        }
        
        $planTypesStringIDs = "1, 2, 3";
        if($request->planTypes != $planTypesStringIDs && $request->planTypes!=""){
            $planTypes = explode(", ", $request->planTypes);
            $plans=$plans->whereIn("plan_type_id", $planTypes);
            // return $planTypes;
        }


        $isapresStringIDs = "1, 2, 3, 4, 5, 7";
        if($request->isapres != $isapresStringIDs && $request->isapres!=""){
            $isapres = explode(", ",  $request->isapres);
            $plans=$plans->whereIn("isapre_id", $isapres);
        }


        if($request->term){
            $plans=$plans->where("plans.name", "LIKE", "%".$request->term."%");
        }

        
        $minPrice = $request->minPrice ? $request->minPrice : 10000;
        $maxPrice = $request->maxPrice ? $request->maxPrice : 1500000;
        $plans= $plans->having("price",">=", $minPrice);
        $plans= $plans->having("price","<=", $maxPrice);


        if($request->firstTime=="true"){

            $plansIDs=DB::table("scores")
                        ->select("plan_id")
                        ->groupBy("plan_id")
                        ->orderBy(DB::raw("SUM(plan_score)"), "DESC")->get();

            $IDOrder=[];
            foreach($plansIDs as $planId) $IDOrder[]=$planId->plan_id;

            $plans=$plans->whereIn("plans.id", $IDOrder)->orderBy(DB::raw('FIELD(plans.id, '.implode(",", array_unique($IDOrder)).')'), "ASC" )->limit(100)->get();


        } else {

            $plans=$plans->orderBy("price", "ASC");
            if($request->orderBy && $request->orderType){
                $plans=$plans->orderBy($request->orderBy, $request->orderType);
            } else {
                $plans=$plans->orderBy(DB::raw("RAND(1)"));
            }

            $plans=$plans->limit(1100)->get();

        }
        
        return ApiResponseController::respond(200, "Consulta exitosa", $plans);
        
    }


    public function getSearchData(Request $request)
    {
        $data = [
            "regions"           => Region::orderBy("order", "ASC")->get(),
            "providers"         => Provider::all(),
            "planTypes"         => PlanType::all(),
            "isapres"           => Isapre::all(),
            "suscriptionPrices" => SuscriptionPrice::all(),
        ];

        return ApiResponseController:: respond(200, "Consulta exitosa", $data);
        
    }

}
