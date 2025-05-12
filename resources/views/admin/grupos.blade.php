@extends('layouts.admin')

@section('title', 'Grupos Confirmados')

@section('content')

<script>
    function guardarFolio(event, grupoId) {
        event.preventDefault();

        const form = document.getElementById('form-folio-' + grupoId);
        const formData = new FormData(form);

        fetch("{{ url('/grupo') }}/" + grupoId + "/guardar-folio", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                // Reemplaza el td con el folio guardado
                document.getElementById('td-folio-' + grupoId).innerHTML = data.folio;
            } else {
                alert(data.message || 'Ocurrió un error');
            }
        })
        .catch(err => {
            console.error(err);
            alert("Error al guardar el folio");
        });
    }
</script>

<div class="p-4">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h4 class="card-title">Listado de Grupos Confirmados</h4>
                </div>
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Cerrar"></button>
                        </div>
                    @endif

                    @foreach ($grupos as $turno => $grupoPorTurno)
                        <h5>{{ ucfirst($turno) }} Turno</h5>
                        <div class="table-responsive">
                            <table id="tablaGrupos-{{ $turno }}" class="table table-striped table-bordered table-hover table-sm table align-middle">
                                <thead class="table-danger">
                                    <tr>
                                        <th style="text-align: center">Nro</th>
                                        <th style="text-align: center">Nombre(s)</th>
                                        <th style="text-align: center">Apellidos</th>
                                        <th style="text-align: center">No. Control</th>
                                        <th style="text-align: center">No. Teléfono</th>
                                        <th style="text-align: center">Nivel</th>
                                        <th style="text-align: center">Folio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $contador = 1; @endphp
                                    @foreach ($grupoPorTurno as $grupo)
                                        <tr>
                                            <td style="text-align: center">{{ $contador++ }}</td>
                                            <td>{{ $grupo->nombres }}</td>
                                            <td>{{ $grupo->apellidos }}</td>
                                            <td>{{ $grupo->no_control }}</td>
                                            <td>{{ $grupo->no_telefono }}</td>
                                            <td>{{ $grupo->nivel }}</td>
                                            <td id="td-folio-{{ $grupo->id }}">
                                                @if ($grupo->folio)
                                                    {{ $grupo->folio }}
                                                @else
                                                    <form onsubmit="guardarFolio(event, {{ $grupo->id }})"
                                                        id="form-folio-{{ $grupo->id }}" class="d-flex">
                                                        @csrf
                                                        <input type="text" name="folio" class="form-control form-control-sm me-1" required>
                                                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach

                    <script>
                        $(function() {
                            @foreach ($grupos as $turno => $grupoPorTurno)
                                $("#tablaGrupos-{{ $turno }}").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Registros",
                                        "infoFiltered": "(Filtrado de _MAX_ total registros)",
                                        "lengthMenu": "Mostrar _MENU_ Registros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscador:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Último",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                    "responsive": true,
                                    "lengthChange": true,
                                    "autoWidth": false,
                                    buttons: [{
                                            extend: 'collection',
                                            text: 'Reportes',
                                            orientation: 'landscape',
                                            buttons: [{
                                                    extend: 'copy',
                                                    text: '<button class="btn btn-info btn-sm btn-block"></i> COPIAR',
                                                    className: 'btn btn-info btn-sm',
                                                    title: 'Listado de Grupos Confirmados',
                                                    exportOptions: {
                                                        columns: ':visible'
                                                    }
                                                },
                                                {
                                                    extend: 'pdf',
                                                    text: '<button class="btn btn-danger btn-sm btn-block"></i> PDF',
                                                    className: 'btn btn-danger btn-sm',
                                                    title: 'Listado de Grupos Confirmados',
                                                    exportOptions: {
                                                        columns: ':visible'
                                                    }
                                                },
                                                {
                                                    extend: 'csv',
                                                    text: '<button class="btn btn-secondary btn-sm btn-block"></i> CSV',
                                                    className: 'btn btn-secondary btn-sm',
                                                    title: 'Listado de Grupos Confirmados',
                                                    exportOptions: {
                                                        columns: ':visible'
                                                    }
                                                },
                                                {
                                                    extend: 'excel',
                                                    text: '<button class="btn btn-success btn-sm btn-block"></i> EXCEL',
                                                    className: 'btn btn-success btn-sm',
                                                    title: 'Listado de Grupos Confirmados',
                                                    exportOptions: {
                                                        columns: ':visible'
                                                    }
                                                },
                                                {
                                                    extend: 'print',
                                                    text: '<button class="btn btn-primary btn-sm btn-block"><i class="bi bi-printer"></i> IMPRIMIR',
                                                    className: 'btn btn-primary btn-sm',
                                                    title: 'Listado de Grupos Confirmados',
                                                    exportOptions: {
                                                        columns: ':visible'
                                                    }
                                                }
                                            ]
                                        },
                                        {
                                            extend: 'colvis',
                                            text: 'Visor de columnas',
                                            collectionLayout: 'fixed three-column'
                                        }
                                    ]
                                }).buttons().container().appendTo('#tablaGrupos-{{ $turno }}_wrapper .col-md-6:eq(0)');
                            @endforeach
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
