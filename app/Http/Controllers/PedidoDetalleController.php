<?php

namespace App\Http\Controllers;

use App\Models\PedidoDetalle;
use Illuminate\Http\Request;

class PedidoDetalleController extends Controller
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
        if($all=PedidoDetalle::all()){
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST
        $datajson=[];
        if($article = PedidoDetalle::create($request->all())){
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

    public function productos_pedido($id){

        $query = PedidoDetalle::query();
            $query->select('pedidos_detalles.*');
            $query->where('pedidos_detalles.id_pedido', $id);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'pedido_detalle' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}
