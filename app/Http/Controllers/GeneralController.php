<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiResponseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Metadata;

class GeneralController extends Controller
{
    public function getUFValue()
    {

        $date = new \Carbon\Carbon("last day of last month");
        $date = $date->format('d-m-Y');
        $response = Http::get("https://mindicador.cl/api/uf/$date");

        $response = json_decode($response);
        $valor = $response->serie[0]->valor;
        
        Metadata::where("name", "valor_uf")->update(["value" => $valor]);

        return "Success";
    }

    public function getMetadata()
    {
        return ApiResponseController::respond("200", "Success", Metadata::all());
    }
}
