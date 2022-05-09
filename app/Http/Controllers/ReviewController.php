<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
        if($all=Review::all()){
            $datajson = [
                'code' => 200,
                'message' => 'Listado creado con exito',
                'review' => $all
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al cargar las opiniones',
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
        if($article = Review::create($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Review creado con exito',
                'review' => $article
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al crear la review',
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
    public function update(Request $request, $id)
    {
        //PUT 

        if($id->update($request->all())){
            $datajson = [
                'code' => 200,
                'message' => 'Review actualizado con exito',
            ];
        }else{
            $datajson = [
                'code' => 400,
                'message' => 'Error al actualizar review',
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

    public function sacar_review_alojamiento($id){

        $query = Review::query();
            $query->select('reviews.*');
            $query->where('reviews.id_producto', $id);
            $response = $query->get();

        $datajson = [
            'code' => 200,
            'message' => 'Consulta realizada con exito',
            'review' => $response,
        ];
        return response()->json($datajson, $datajson['code']); 
    }
}