<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    use HasFactory;
    protected $fillable = ['id_user', 'pais', 'provincia', 'ciudad', 'postcode', 'direccion1', 'direccion2', 'telefono', 'dni', 'firstName', 'lastName', 'deleted']; 
}
