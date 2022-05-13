<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCode extends Model
{
    protected $table = 'postcodes';
    use HasFactory;
    protected $fillable = ['code', 'deleted']; 
}
