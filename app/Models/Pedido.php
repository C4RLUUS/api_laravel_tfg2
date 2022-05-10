<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_carrito', 'id_direccion', 'current_state', 'precio_total', 'productos_total']; 
}
