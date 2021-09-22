<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function getPlanPDF(Request $request){
    
    $pdf = public_path("storage/pdf/".$request->code.".pdf");
    return response()->file($pdf);

    }
}
