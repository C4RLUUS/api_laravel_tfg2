<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_Detalles extends Model
{
    use HasFactory;
    protected $fillable = ['id_pedido', 'id_producto', 'nombre_producto', 'cantidad_produto', 'precio_producto']; 
}
