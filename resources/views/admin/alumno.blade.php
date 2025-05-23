@extends('layouts.admin')

@section('title', 'Agregar Alumno')

@section('content')
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>

    <div class="container mt-5">
        <div class="form-container">
            <h4>Agregar Alumno a {{ ucfirst($turno) }} - Nivel {{ $nivel }}</h4>

            <form action="{{ route('grupos.alumnos.store') }}" method="POST">
                @csrf

                <input type="hidden" name="turno" value="{{ $turno }}">
                <input type="hidden" name="nivel" value="{{ $nivel }}">

                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" required>
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" required>
                </div>

                <div class="mb-3">
                    <label for="no_control" class="form-label">No. Control</label>
                   

                    <input type="text" name="no_control" class="form-control @error('no_control') is-invalid @enderror"
                        value="{{ old('no_control') }}" required>
                     @error('no_control')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="no_telefono">
                </div>

                <div class="mb-3">
                    <label for="folio" class="form-label">Folio</label>
                    <input type="text" name="folio" class="form-control @error('folio') is-invalid @enderror"
                        value="{{ old('folio') }}" required>
                    @error('folio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="btn-group mt-4">
                    <button type="submit" class="btn btn-primary">Guardar Alumno</button>
                    <a href="{{ route('grupos.confirmados') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
