<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
    protected $table = 'carritos_productos';
    use HasFactory;
    protected $fillable = ['id_carrito', 'id_producto', 'cantidad'];
}
