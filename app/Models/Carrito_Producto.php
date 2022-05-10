<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito_Producto extends Model
{
    use HasFactory;
    protected $fillable = ['id_carrito', 'id_producto', 'cantidad']; 
}
