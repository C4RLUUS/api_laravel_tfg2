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
Route::get('/imagenesProductos/listar/activos', 'App\Http\Controllers\ImagenesProductoController@sacar_imagen_productos'); 


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
