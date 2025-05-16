<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    // Datos Registrados de una prelistaaaaaaaaaaaaaa

    protected $table = 'grupos_confirmados'; // nombre de la tabla existente

    protected $fillable = [

        'nombres',
        'apellidos',
        'no_control',
        'no_telefono',
        'carrera',
        'nivel',
        'turno',
        'folio'
         


    ];
}

