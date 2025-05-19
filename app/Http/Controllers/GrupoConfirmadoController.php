<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Prelista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GrupoConfirmadoController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {

        // Si el modelo Grupo está bien definido y la base de datos está conectada
        // $grupos = Group::all();  // Obtener todos los grupos
        $grupos = Group::all()->groupBy('turno')->map(function ($grupoTurno) {
            return $grupoTurno->groupBy('nivel');
        });
        return view('admin.grupos', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $turno = $request->query('turno');
        $nivel = $request->query('nivel');

        return view('admin.alumno', compact('turno', 'nivel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'no_control' => 'required|string|max:50|unique:grupos_confirmados,no_control',
            'no_telefono' => 'nullable|string|max:20',
            'turno' => 'required|string',
            'nivel' => 'required|string',
            'folio' => 'required|string|max:50|unique:grupos_confirmados,folio',
        ]);
        // Guardar en grupos_confirmados
        Group::create($request->all());

        // Eliminar de prelistas
        Prelista::where('no_control', $request->no_control)->delete();

        return redirect()->route('grupos.confirmados')->with('success', 'Alumno registrado correctamente.');
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
    public function edit($id)
    {
        $grupo = Group::findOrFail($id);
        return view('admin.editalumno', compact('grupo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'no_control' => 'required|string|max:50|unique:grupos_confirmados,no_control,' . $id,
            'no_telefono' => 'nullable|string|max:20',
            'turno' => 'required|string',
            'nivel' => 'required|string',
            'folio' => 'required|string|max:50|unique:grupos_confirmados,folio,' . $id,
        ]);

        $grupo = Group::findOrFail($id);
        $grupo->update($request->all());

        return redirect()->route('grupos.confirmados')->with('success', 'Alumno actualizado correctamente.');
    }

    public function destroy($id)
    {
        $grupo = Group::findOrFail($id);
        $grupo->delete();

        return redirect()->route('grupos.confirmados')->with('success', 'Alumno eliminado correctamente.');
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
        Prelista::where('no_control', $request->no_control)->delete();


        return redirect()->back()->with('mensaje', 'Estudiante agregado correctamente')->with('icono', 'success');
    }
    public function guardarFolio(Request $request, $id)
    {
        $request->validate([
            'folio' => 'required|string|unique:grupos_confirmados,folio|max:255'
        ]);

        $grupos = Group::findOrFail($id);

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
    // public function reportes()
    // {
    //     return view('admin.grupos.reportes');
    // }

        public function pdf()
    {
        // $configuracion = Configuracione::latest()->first();
        // $doctores = Doctor::all();
        $pdf = \PDF::loadView('admin.pdf');

        // // Incluir la numeración de páginas y el pie de página
        // $pdf->output();
        // $dompdf = $pdf->getDomPDF();
        // $canvas = $dompdf->getCanvas();
        // $canvas->page_text(20, 800, "Impreso por: " . Auth::user()->email, null, 10, array(0, 0, 0));
        // $canvas->page_text(270, 800, "Página {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        // $canvas->page_text(450, 800, "Fecha: " . \Carbon\Carbon::now()->format('d/m/Y') . " - " . \Carbon\Carbon::now()->format('H:i:s'), null, 10, array(0, 0, 0));

        return $pdf->stream();
    }


}
