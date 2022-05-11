<?php

namespace App\Http\Controllers;

use App\Models\ImagenesProductos;
use Illuminate\Http\Request;

class ImagenesProductoController extends Controller
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
        if($all=ImagenesProductos::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'imagen' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar las imagenes',
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
        if($article = ImagenesProductos::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Imagen creada con exito',
                'imagen' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear imagen',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show(ImagenesProductos $id)
    {
        //Get By Id 
        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'usuario' => $id
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
    public function update(Request $request, ImagenesProductos $id)
    {
       //PUT
       if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Imagen actualizada con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar imagen',
            ];
        }
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

    public function sacar_imagen_productos($id){

        $query = ImagenesProductos::query();
            $query->select('imagenes_productos.*');
            $query->where('imagenes_productos.id_producto', $id);
            $query->where('imagenes_productos.active',1);
            $query->where('imagenes_productos.deleted', 0);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'imagen' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}
