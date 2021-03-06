<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
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
        if($all=Direccion::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'direccion' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar direccion',
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
        if($article = Direccion::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Direccion creado con exito',
                'direccion' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear direccion',
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
    public function update(Request $request,Direccion $id)
    {
        //PUT
        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Direcci??n actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar direcci??n',
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
    public function sacar_direccion_activos($id){

        $query = Direccion::query();
            $query->select('direccions.*');
            $query->where('direccions.id_user', $id); 
            $query->where('direccions.deleted', 0);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'direccion' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }

    public function direccion_de_user($id_user, $id_direccion){

        $query = Direccion::query();
            $query->select('direccions.*');
            $query->where('direccions.id_user', $id_user); 
            $query->where('direccions.id', $id_direccion);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'direccion' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}
