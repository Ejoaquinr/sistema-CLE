<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    protected $table = 'resultados'; // nombre de la tabla existente

    protected $fillable = [
        'correo_electronico',
        'correo_institucional',
        'nombres',
        'apellidos',
        'no_control',
        'no_telefono',
        'carrera',
        'nivel',
        'turno'
    ];
}
