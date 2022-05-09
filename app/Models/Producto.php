<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $filable = ['nombre', 'descripcion', 'precio','stock','low_stock_alert', 'active', 'deleted']; 
}
