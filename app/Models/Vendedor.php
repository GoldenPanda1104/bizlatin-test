<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
    ];

    use HasFactory;
}
