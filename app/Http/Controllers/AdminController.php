<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Mostrar la vista del panel de administración
     */
    public function index()
    {
        // Obtener el estado actual del formulario
        $form_enabled = Setting::getValue('form_enabled', false);
        
        return view('admin.index', compact('form_enabled'));
    }
    
    /**
     * Alternar el estado del formulario
     */
    public function toggleForm()
    {
        // Obtener el estado actual
        $current_status = Setting::getValue('form_enabled', false);
        
        // Invertir el estado
        $new_status = $current_status == '1' ? '0' : '1';
        
        // Guardar el nuevo estado
        Setting::setValue('form_enabled', $new_status);
        
        // Mensaje de éxito
        $message = $new_status == '1' 
            ? 'Formulario habilitado correctamente.' 
            : 'Formulario deshabilitado correctamente.';
        
        return redirect()->route('admin.index')->with('mensaje', $message);
    }
}