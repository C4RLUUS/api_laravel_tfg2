<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'pais', 'proviencia', 'ciudad', 'postcode', 'direccion1', 'direccion2', 'telefono', 'dni', 'firstName', 'lastName', 'deleted']; 

    // cambiar proviencia
}
