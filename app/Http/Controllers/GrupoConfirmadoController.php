<?php

namespace App\Http\Controllers;

use App\Models\Resultados; // la tabla de resultado 
use Illuminate\Http\Request;


class GrupoConfirmadoController extends Controller
{
    public function confirmarGrupo($id, $grupo)
    {
        $resultado = Resultados::findOrFail($id);

        // Crear nuevo registro en grupos_confirmados
        GrupoConfirmadoController::create([
            'nombre' => $resultado->nombres,
            'apellido' => $resultado->apellidos,
            'no_control' => $resultado->no_control,
            'telefono' => $resultado->no_telefono,
            'nivel' => $resultado->nivel,
            'turno' => $resultado->turno,
            'grupo' => $grupo,
            // 'folio' se queda null para que lo ponga después el admin
        ]);

        return redirect()->route('admin.grupos')->with('mensaje', 'Alumno confirmado en grupo ' . $grupo)->with('icono', 'success');
    }
}
