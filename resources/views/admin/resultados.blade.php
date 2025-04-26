@extends('layouts.admin')

@section('title', 'Resultados Pre-Registro')

@section('content')
<div class="container mt-4">
<h1 class="mb-4" style="color: white;">Resultados del Pre-Registro</h1>


    @if($resultados->isEmpty())
        <div class="alert alert-info">
            No hay registros disponibles.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre(s)</th>
                    <th>Apellidos</th>
                    <th>Correo Electrónico</th>
                    <th>Correo Institucional</th>
                    <th>No. Control</th>
                    <th>No. Teléfono</th>
                    <th>Carrera</th>
                    <th>Nivel</th>
                    <th>Turno</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultados as $resultado)
                    <tr>
                        <td>{{ $resultado->nombres }}</td>
                        <td>{{ $resultado->apellidos }}</td>
                        <td>{{ $resultado->correo_electronico }}</td>
                        <td>{{ $resultado->correo_institucional }}</td>
                        <td>{{ $resultado->no_control }}</td>
                        <td>{{ $resultado->no_telefono }}</td>
                        <td>{{ $resultado->carrera }}</td>
                        <td>{{ $resultado->nivel }}</td>
                        <td>{{ $resultado->turno }}</td>
                        <td>{{ $resultado->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="mt-5">
    <h4>Distribución por Nivel</h4>
    <canvas id="nivelChart"></canvas>
</div>

<div class="mt-5">
    <h4>Distribución por Turno</h4>
    <canvas id="turnoChart"></canvas>
</div>

<script>
    const nivelLabels = {!! json_encode($niveles->keys()) !!};
    const nivelData = {!! json_encode($niveles->values()) !!};

    const turnoLabels = {!! json_encode($turnos->keys()) !!};
    const turnoData = {!! json_encode($turnos->values()) !!};

    new Chart(document.getElementById('nivelChart'), {
        type: 'bar',
        data: {
            labels: nivelLabels,
            datasets: [{
                label: 'Cantidad por Nivel',
                backgroundColor: '#36a2eb',
                data: nivelData
            }]
        }
    });

    new Chart(document.getElementById('turnoChart'), {
        type: 'pie',
        data: {
            labels: turnoLabels,
            datasets: [{
                label: 'Cantidad por Turno',
                backgroundColor: ['#ff6384', '#36a2eb', '#ffcd56'],
                data: turnoData
            }]
        }
    });
</script>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
