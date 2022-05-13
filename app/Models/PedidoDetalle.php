<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    protected $table = 'pedidos_detalles';
    use HasFactory;
    protected $fillable = ['id_pedido', 'id_producto', 'nombre_producto', 'cantidad_produto', 'precio_producto']; 
}
