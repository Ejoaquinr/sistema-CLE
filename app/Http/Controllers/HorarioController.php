<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    // modificacion 08/05/2025
    public function index()
    {
        $groups = Group::with('listas')->get(); // Carga los grupos y sus listas relacionadas
        return view('admin.horarios', compact('groups'));
    }
}
