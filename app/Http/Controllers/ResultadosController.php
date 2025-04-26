<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = Resultados::all();
        $niveles = ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto', 'Séptimo', 'Octavo', 'Noveno', 'Décimo'];

        $conteos = DB::table('resultados')
            ->select('nivel', DB::raw('count(*) as total'))
            ->whereIn('nivel', $niveles)
            ->groupBy('nivel')
            ->pluck('total', 'nivel');

        // Asegurar que todos los niveles estén presentes (incluso si su conteo es 0)
        $datosGrafica = [];
        foreach ($niveles as $nivel) {
            $datosGrafica[] = $conteos[$nivel] ?? 0;
        }

        return view('admin.resultados', compact('resultados', 'niveles', 'datosGrafica'));
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
    public function show(Resultados $resultados) {}

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
