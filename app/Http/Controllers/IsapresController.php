<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiResponseController;
use App\Models\Isapre;

class IsapresController extends Controller
{


    public function getAllIsapres(Request $request)
    {
        return ApiResponseController::respond(200, "Success", Isapre::all());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isapres = Isapre::where("name", "LIKE", "%$request->term%");
        if($request->orderBy){
            $isapres=$isapres->orderBy($request->orderBy, $request->orderType ? $request->orderType : "DESC");
        }
        $isapres = $isapres->paginate(50);

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

        if ($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/isapres';
            $uplaod = $file->move($path, $fileName);
         }

         $isapre = Isapre::create([
            "name" => $request->name,
            "ges" => $request->ges,
            "logo" => $fileName,
         ]);


        return ApiResponseController::respond(200, "Isapre creado exitosamente", $isapre);
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

        $fileName=$request->logo;

        if ($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/isapres';
            $uplaod = $file->move($path, $fileName);
         }         
               
         Isapre::find($id)->update([
            "name" => $request->name,
            "ges"  => $request->ges,
            "logo" => $fileName,
         ]);

         $isapre = [
            "id"   => $id,
            "name" => $request->name,
            "ges"  => $request->ges,
            "logo" => $fileName
         ];


        return ApiResponseController::respond(200, "Isapre actualizado exitosamente", $isapre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Isapre::find($id)->delete();

        return ApiResponseController::respond(200, "Isapre eliminado exitosamente", '');
    }

    public function getIsapresForContact()
    {
        return ApiResponseController::respond(200, "Succefully", Isapre::all());
    }
}
