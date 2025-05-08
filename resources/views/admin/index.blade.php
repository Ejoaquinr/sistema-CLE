@extends('layouts.admin')
@section('title', 'Inicio')
@section('content')
    <div style="min-height: 100vh; display: flex; flex-direction: column; align-items: center; background: linear-gradient(to right, #44337a, #1a202c); padding-top: 80px;">
        <div style="text-align: center; width: 100%; max-width: 600px;">
            <h1 style="font-size: 1.875rem; font-weight: bold; margin-bottom: 1rem; color: white;">Bienvenida de nuevo, maestra</h1>
            <p style="font-size: 1.125rem; color: white;">
                Presione el botón si desea abrir el formulario de este nuevo periodo.
            </p>
        </div>
        
        <!-- Espacio fijo de 200px -->
        <div style="height: 200px;"></div>
        
        <div style="text-align: center; width: 100%; max-width: 600px;">
            <a href="#" 
               style="background-color: #2563eb; color: white; font-weight: 500; padding: 0.5rem 1rem; border: 1px solid #1d4ed8; border-radius: 0.25rem; display: inline-block; font-size: 0.875rem;">
                Abrir formulario
            </a>
        </div>
    </div>
@endsection