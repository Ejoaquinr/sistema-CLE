<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = Resultados::all();

        $niveles = Resultados::select('nivel')
            ->selectRaw('count(*) as total')
            ->groupBy('nivel')
            ->pluck('total', 'nivel');
    
        $turnos = Resultados::select('turno')
            ->selectRaw('count(*) as total')
            ->groupBy('turno')
            ->pluck('total', 'turno');
    
        return view('admin.resultados', compact('resultados', 'niveles', 'turnos'));

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'correo_electronico' => 'required|max:100',
            'correo_institucional' => 'required|max:100',
            'nombres' => 'required',
            'apellidos' => 'required',
            'no_control' => 'required',
            'no_telefono' => 'required',
            'carrera' => 'required',
            'nivel' => 'required',
            'turno' => 'required',
        ]);
        $resultados = new Resultados();
        $resultados->correo_electronico = $request->correo_electronico;
        $resultados->correo_institucional = $request->correo_institucional;
        $resultados->nombres = $request->nombres;
        $resultados->apellidos = $request->apellidos;
        $resultados->no_control = $request->no_control;
        $resultados->no_telefono = $request->no_telefono;
        $resultados->carrera = $request->carrera;
        $resultados->nivel = $request->nivel;
        $resultados->turno = $request->turno;
        $resultados->save();

        return redirect()->back()
            ->with('mensaje', 'Se registraron los datos CORRECTAMENTE')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultados $resultados)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resultados $resultados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resultados $resultados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultados $resultados)
    {
        //
    }
}
