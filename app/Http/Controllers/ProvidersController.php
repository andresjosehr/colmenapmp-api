<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiResponseController;
use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isapres = Provider::where("name", "LIKE", "%$request->term%");
        if($request->orderBy){
            $isapres=$isapres->orderBy($request->orderBy, $request->orderType ? $request->orderType : "DESC");
        }
        $isapres = $isapres->paginate(100);

        return ApiResponseController::respond(200, "Success", $isapres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $provider = Provider::create([
            "name" => $request->name,
            "region_id" => $request->region_id
         ]);


        return ApiResponseController::respond(200, "Proveedor creado exitosamente", $provider);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Provider::find($id)->update([
            "name" => $request->name,
            "region_id"  => $request->region_id
         ]);

         $povider = [
            "id"   => $id,
            "name" => $request->name,
            "region_id"  => $request->region_id
         ];


        return ApiResponseController::respond(200, "Proveedor actualizado exitosamente", $povider);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provider::find($id)->delete();

        return ApiResponseController::respond(200, "Proveedor eliminado exitosamente", '');
    }
}
