<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // Relacionar si tiene muchas listas 

public function listas(){
    //checamos la lista
    return $this->hasMany(Lista::class);
    
}    
}
