@extends('layouts.admin')
@section('title', 'Panel de Administración')

@section('content')

   {{-- ¡Eliminado el mensaje superior con session('status')! --}}

   <div class="min-h-screen flex justify-center bg-gradient-to-r from-purple-900 to-gray-900 px-4 pt-24">
        <div class="text-center w-full max-w-xl">
        
            {{-- Mensaje de sesión dinámico --}}
            @if(session('mensaje'))
                @php
                    $esHabilitado = str_contains(session('mensaje'), 'habilitado');
                    $bgColor = $esHabilitado ? 'bg-green-600' : 'bg-red-600';
                @endphp
                <div class="{{ $bgColor }} text-white px-4 py-3 rounded shadow-md mb-6 text-center">
                    <span class="block font-semibold">{{ session('mensaje') }}</span>
                </div>
            @endif

            {{-- Título y descripción --}}
            <h1 class="text-4xl font-bold text-white mb-4">Bienvenida de nuevo, maestra</h1>
            <p class="text-lg text-white mb-6">
                Presione el botón para controlar la disponibilidad del formulario de este nuevo periodo.
            </p>

            <br>

            {{-- Estado del formulario --}}
            <div class="mb-6 text-white text-lg">
                <strong>Estado actual:</strong>
                @if($form_enabled == '1')
                    <span class="ml-2 text-green-400">Formulario habilitado</span>
                @else
                    <span class="ml-2 text-red-400">Formulario deshabilitado</span>
                @endif
            </div>
   <br>
   <br>
   <br>
   <br>
            {{-- Botón de acción --}}
            <div class="w-full flex justify-center mt-10">
               <a href="{{ route('admin.toggle-form') }}"
   class="mt-10 inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold text-lg py-3 px-8 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300 border-2 border-yellow-200">
    {{ $form_enabled == '1' ? 'Deshabilitar formulario' : 'Habilitar formulario' }}
</a>

            </div>
        </div>
    </div>

@endsection
