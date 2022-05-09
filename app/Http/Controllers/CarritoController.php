<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
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
        if($all=Carrito::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'carrito' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar carritos',
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
        if($article = Carrito::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Carrito creado con exito',
                'carrito' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear carrito',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $id)
    {
        //Get By Id 
        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'carrito' => $id
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
