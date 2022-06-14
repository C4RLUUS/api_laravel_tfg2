<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
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
        if($all=Pedido::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'pedido' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar pedidos',
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
        if($article = Pedido::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Pedido creado con exito',
                'pedido' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear pedido',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $id)
    {
        //Get By Id 
        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'pedido' => $id
        ];
        return response()->json($datajson, $datajson['code']); 
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
    public function update(Request $request,Pedido $id)
    {
        //PUT
        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Pedido actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar pedido',
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
    public function sacar_pedido_pagados(){

        $query = Pedido::query();
            $query->select('pedidos.*');
            $query->where('pedidos.current_state', "ejecutado");
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'pedido' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }

    public function pedido_user($id){

        $query = Pedido::query();
            $query->select('pedidos.*');
            $query->where('pedidos.id_user', $id);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'pedido' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}
