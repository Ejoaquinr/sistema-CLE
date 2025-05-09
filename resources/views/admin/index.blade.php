@extends('layouts.admin')
@section('title', 'Panel de Administración')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-900 to-gray-900 px-4">
        <div class="text-center w-full max-w-xl">
            {{-- Mensaje de sesión --}}
            @if(session('mensaje'))
                <div class="bg-blue-100 border border-blue-400 text-blue-800 px-4 py-3 rounded shadow-md mb-6">
                    <span class="block font-semibold">{{ session('mensaje') }}</span>
                </div>
            @endif
            {{-- Título y descripción --}}
            <h1 class="text-4xl font-bold text-white mb-4">Bienvenida de nuevo, maestra</h1>
            <p class="text-lg text-white mb-6">
                Presione el botón para controlar la disponibilidad del formulario de este nuevo periodo.
            </p>
            {{-- Estado del formulario --}}
            <div class="mb-6 text-white text-lg">
                <strong>Estado actual:</strong>
                @if($form_enabled == '1')
                    <span class="ml-2 text-green-400">Formulario habilitado</span>
                @else
                    <span class="ml-2 text-red-400">Formulario deshabilitado</span>
                @endif
            </div>
            {{-- Botón de acción centrado con buen espaciado superior --}}
            <div class="w-full flex justify-center mt-12">
                <a href="{{ route('admin.toggle-form') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded shadow transition duration-300">
                    {{ $form_enabled == '1' ? 'Deshabilitar formulario' : 'Habilitar formulario' }}
                </a>
            </div>
        </div>
    </div>
@endsection
