<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*USUARIOS*/
Route::get('/usuarios/listar', 'App\Http\Controllers\UsuarioController@index'); //mostrar todos los registros
Route::post('/usuarios/crear', 'App\Http\Controllers\UsuarioController@store'); //agregar registro
Route::put('/usuarios/editar/{id}', 'App\Http\Controllers\UsuarioController@update'); //put
Route::get('/usuarios/listar/activos', 'App\Http\Controllers\UsuarioController@sacar_usuarios_activos'); 

/*OPINIONES*/
Route::get('reviews/listar', 'App\Http\Controllers\ReviewController@index');
Route::post('reviews/crear', 'App\Http\Controllers\ReviewController@store');
Route::get('reviews/mostrar/{id}', 'App\Http\Controllers\ReviewController@show');
Route::put('reviews/editar/{id}', 'App\Http\Controllers\ReviewController@update'); 
Route::get('reviews/listar/produtos/{id}', 'App\Http\Controllers\ReviewController@sacar_review_productos');

/*PRODUCTOS*/
Route::get('/productos/listar', 'App\Http\Controllers\ProductoController@index'); //mostrar todos los registros
Route::post('/productos/crear', 'App\Http\Controllers\ProductoController@store'); //agregar registro
Route::put('/productos/editar/{id}', 'App\Http\Controllers\ProductoController@update'); //put
Route::get('/productos/listar/activos', 'App\Http\Controllers\ProductoController@sacar_productos_activos'); 

/*IMAGENES_PRODUCTOS*/ 
Route::get('/imagenesProductos/listar', 'App\Http\Controllers\ImagenesProductoController@index'); //mostrar todos los registros
Route::post('/imagenesProductos/crear', 'App\Http\Controllers\ImagenesProductoController@store'); //agregar registro
Route::put('/imagenesProductos/editar/{id}', 'App\Http\Controllers\ImagenesProductoController@update'); //put
Route::get('/imagenesProductos/listar/productos/{id}', 'App\Http\Controllers\ImagenesProductoController@sacar_imagen_productos'); 

/*POST CODES*/
Route::get('/postcodes/listar', 'App\Http\Controllers\PostCodeController@index'); //mostrar todos los registros
Route::post('/postCodes/crear', 'App\Http\Controllers\PostCodeController@store'); //agregar registro
Route::put('/postCodes/editar/{id}', 'App\Http\Controllers\PostCodeController@update'); //put
Route::get('/postCodes/listar/activos', 'App\Http\Controllers\PostCodeController@sacar_postcode_activos'); 

/*DIRECCION*/
Route::get('/direcciones/listar', 'App\Http\Controllers\DireccionController@index'); //mostrar todos los registros
Route::post('/direcciones/crear', 'App\Http\Controllers\DireccionController@store'); //agregar registro
Route::put('/direcciones/editar/{id}', 'App\Http\Controllers\DireccionController@update'); //put
Route::get('/direcciones/listar/activos', 'App\Http\Controllers\DireccionController@sacar_direccion_activos'); 

/*CARRITO*/
Route::get('/carritos/listar', 'App\Http\Controllers\CarritoController@index'); //mostrar todos los registros
Route::post('/carritos/crear', 'App\Http\Controllers\CarritoController@store'); //agregar registro
Route::put('/carritos/editar/{id}', 'App\Http\Controllers\CarritoController@update'); //put
Route::get('/carritos/ver/{id}', 'App\Http\Controllers\CarritoController@show'); 

/*CARRITO_PRODUCTOS*/
Route::get('/carritosProductos/listar', 'App\Http\Controllers\CarritoProductoController@index'); //mostrar todos los registros
Route::post('/carritosProductos/crear', 'App\Http\Controllers\CarritoProductoController@store'); //agregar registro

/*PEDIDO*/
Route::get('/pedidos/listar', 'App\Http\Controllers\PedidoController@index'); //mostrar todos los registros
Route::post('/pedidos/crear', 'App\Http\Controllers\PedidoController@store'); //agregar registro
Route::put('/pedidos/editar/{id}', 'App\Http\Controllers\PedidoController@update'); //put
Route::get('/pedidos/listar/pagados', 'App\Http\Controllers\PedidoController@sacar_pedido_pagados'); 

/*PEDIDO_DETALLES*/
Route::get('/pedidoDetalles/listar', 'App\Http\Controllers\PedidoDetallesController@index'); //mostrar todos los registros
Route::post('/pedidoDetalles/crear', 'App\Http\Controllers\PedidoDetallesController@store'); //agregar registro

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
