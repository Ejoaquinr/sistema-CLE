<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prelista extends Model
{


    //Datos Regsitrados de una prelista
   protected $table = 'resultados';

    protected $fillable = [
        'nombres',
        'apellidos',
        'no_control',
        'no_telefono',
        'nivel',
        'turno',

    ];
}
