<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    // Actualizacion 07/05/2025
    public function group(){
        return $this->belongsTo(Group::class);
        
    }
}
