<?php

namespace App\Http\Controllers;

use App\Models\PostCode;
use Illuminate\Http\Request;

class PostCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET

        $all=[];
        if($all=PostCode::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'postcode' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar los codigos postales',
            ];
        }
        return response()->json($datajson, $datajson['code']); 
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
        //POST
        $datajson=[];
        if($article = PostCode::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Codiogo postal creado con exito',
                'postcode' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear el codigo postal',
            ];
        }
        return response()->json($datajson, 201);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,PostCode $id)
    {
        //PUT 

        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Codigo postal actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar el codigo postal',
            ];
        }
        return response()->json($datajson, $datajson['code']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
