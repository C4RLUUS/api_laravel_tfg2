<?php

namespace App\Http\Controllers;

use App\Models\CarritoProducto;
use Illuminate\Http\Request;

class CarritoProductoController extends Controller
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
        if($all=CarritoProducto::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'carrito_producto' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar carrito_productos',
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
        if($article = CarritoProducto::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Carrito_Productos creado con exito',
                'carrito_producto' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear carrito_Productos',
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
