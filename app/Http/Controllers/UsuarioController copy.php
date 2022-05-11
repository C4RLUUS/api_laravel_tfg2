<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; 

class UsuarioController extends Controller
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
        if($all=Usuario::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'usuario' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar usuarios',
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
        if($article = Usuario::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Usuario creado con exito',
                'usuario' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear usuario',
            ];
        }
        return response()->json($datajson, 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $id)
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
    public function update(Request $request, Usuario $id)
    {
        //PUT
        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Usuario actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar usuario',
            ];
        }

        return response()->json($datajson, $datajson['code']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $id)
    {
        //DELETE
        $datajson=[];
        if($id->delete()){
            $datajson = [
                'code' => 200,
                'message' => 'Usuario eliminado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al eliminar usuario',
            ];
        }

        return response()->json($datajson, $datajson['code']);  
    }

    public function sacar_usuarios_activos(){

        $query = Usuario::query();
            $query->select('usuarios.*');
            $query->where('usuarios.deleted', "0");
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'usuario' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}
