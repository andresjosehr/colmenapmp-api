<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class ApiResponseController extends Controller
{

    static public function respond($statuscCode = 200, $message = '', $response = '', $errorType = '',  $headers = [])
    {
        $errorType = ($statuscCode != 200 && $statuscCode!=201 && $errorType=='') ? "Error de peticion" : $errorType;

    	return Response::json([
            "message" => $message,
            "errorType" => $errorType,
            "response" => $response,
        ], $statuscCode, $headers);
    }
    
}
