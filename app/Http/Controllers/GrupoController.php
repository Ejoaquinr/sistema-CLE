<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
     public function index()
    {
        // Aquí puedes pasar los grupos desde la base de datos si ya los tienes
        return view('admin.grupos');
    }
}
