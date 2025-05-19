@extends('layouts.admin')

@section('title', 'Editar Alumno')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Alumno</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" value="{{ old('nombres', $grupo->nombres) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos', $grupo->apellidos) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="no_control" class="form-label">No. Control</label>
                        <input type="text" class="form-control" name="no_control" value="{{ old('no_control', $grupo->no_control) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="no_telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="no_telefono" value="{{ old('no_telefono', $grupo->no_telefono) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="turno" class="form-label">Turno</label>
                        <input type="text" class="form-control" name="turno" value="{{ old('turno', $grupo->turno) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="nivel" class="form-label">Nivel</label>
                        <input type="text" class="form-control" name="nivel" value="{{ old('nivel', $grupo->nivel) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="folio" class="form-label">Folio</label>
                        <input type="text" class="form-control" name="folio" value="{{ old('folio', $grupo->folio) }}" required>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>Actualizar Alumno
                    </button>
                    <a href="{{ route('grupos.confirmados') }}" class="btn btn-secondary">
                        <i class="bi bi-x-circle me-1"></i>Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
