<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'pais', 'provincia', 'ciudad', 'postcode', 'direccion', 'direccion_facturacion', 'telefono', 'dni', 'firstName', 'lastName', 'deleted']; 
}
