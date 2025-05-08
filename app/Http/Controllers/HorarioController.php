<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\DB;


class HorarioController extends Controller
{
    // modificacion 08/05/2025
    public function index()
    {
        $resultados = Group::all();
    
        $niveles = ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5', 'Nivel 6', 'Nivel 7', 'Nivel 8', 'Nivel 9', 'Nivel 10'];
        $niveles2 = ['Primero','Segundo', 'Tercero','Cuarto','Quinto','Sexto','Séptimo','Octavo','Noveno','Décimo'];
    
        // Conteo general por nivel
        $conteos = DB::table('resultados')
            ->select('nivel', DB::raw('count(*) as total'))
            ->whereIn('nivel', $niveles2)
            ->groupBy('nivel')
            ->pluck('total', 'nivel');
    
        $datosGrafica = [];
        foreach ($niveles2 as $nivel) {
            $datosGrafica[] = $conteos[$nivel] ?? 0;
        }
    
        // Conteo por turno (matutino, vespertino, sabatino) separados
        $turnos = ['Matutino', 'Vespertino', 'Sabatino'];
    
        $datosTurnos = [];
    
        foreach ($turnos as $turno) {
            $conteoTurno = DB::table('resultados')
                ->select('nivel', DB::raw('count(*) as total'))
                ->where('turno', $turno)
                ->whereIn('nivel', $niveles2)
                ->groupBy('nivel')
                ->pluck('total', 'nivel');
    
            $datosPorNivel = [];
            foreach ($niveles2 as $nivel) {
                $datosPorNivel[] = $conteoTurno[$nivel] ?? 0;
            }
    
            $datosTurnos[$turno] = $datosPorNivel;
        }
    
        return view('admin.horarios', compact('resultados', 'niveles', 'datosGrafica', 'datosTurnos'));
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
            'carrera' => 'required|not_in:Selecciona una carrera',
            'nivel' => 'required|not_in:Selecciona una carrera',
            'turno' => 'required|not_in:Selecciona una carrera',
          

            
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


}
