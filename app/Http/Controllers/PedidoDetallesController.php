<?php

namespace App\Http\Controllers;

use App\Models\Pedido_Detalles;
use Illuminate\Http\Request;

class PedidoDetallesController extends Controller
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
        if($all=Pedido_Detalles::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'detalle' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar pedidos_detalles',
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
        if($article = Pedido_Detalles::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Pedido_detalle creado con exito',
                'detalle' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear pedido_detalle',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido_Detalles $id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
