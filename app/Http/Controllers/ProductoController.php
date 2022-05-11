<?php

namespace App\Http\Controllers;


use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
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
        if($all=Producto::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'producto' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar producto',
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
        if($article = Producto::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Producto creado con exito',
                'producto' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear producto',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $id)
    {
        //Get By Id 
        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'producto' => $id
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
    public function update(Request $request, Producto $id)
    {
        //PUT
        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Producto actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar producto',
            ];
        }

        return response()->json($datajson, $datajson['code']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $id)
    {
        //DELETE
        $datajson=[];
        if($id->delete()){
            $datajson = [
                'code' => 200,
                'message' => 'Producto eliminado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al eliminar producto',
            ];
        }

        return response()->json($datajson, $datajson['code']); 
    }

    public function sacar_productos_activos(){

        $query = Producto::query();
            $query->select('productos.*');
            $query->where('productos.active', 1);
            $query->where('productos.deleted', 0);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'usuario' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
}
}