<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Prelista;
use Illuminate\Http\Request;

class GrupoConfirmadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        // Si el modelo Grupo está bien definido y la base de datos está conectada
        // $grupos = Group::all();  // Obtener todos los grupos
        $grupos = Group::orderBy('turno')->get()->groupBy('turno');

        return view('admin.grupos', compact('grupos'));  // Pasar los datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prelista $grupoConfirmado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prelista $grupoConfirmado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prelista $grupoConfirmado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prelista $grupoConfirmado)
    {
        //
    }
    public function storeDesdeResultado(Request $request)
{
    Group::create([
        'nombres' => $request->nombres,
        'apellidos' => $request->apellidos,
        'no_control' => $request->no_control,
        'no_telefono' => $request->no_telefono,
        'nivel' => $request->nivel,
        'turno' => $request->turno, // Matutino o Vespertino
        'folio' => $request->folio, // Matutino o Vespertino

       
    ]);

    return redirect()->back()->with('mensaje', 'Estudiante agregado correctamente')->with('icono', 'success');
}
public function guardarFolio(Request $request, $id)
{
    $request->validate([
        'folio' => 'required|string|max:255'
    ]);

    $grupos= Group::findOrFail($id);

    if ($grupos->folio) {
        return response()->json([
            'success' => false,
            'message' => 'Este grupo ya tiene un folio asignado.'
        ]);
    }

    $grupos->folio = $request->folio;
    $grupos->save();

    return response()->json([
        'success' => true,
        'folio' => $grupos->folio
    ]);
}
}
