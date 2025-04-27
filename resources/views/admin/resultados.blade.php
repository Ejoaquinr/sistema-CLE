@extends('layouts.admin')

@section('title', 'Resultados Pre-Registro')

@section('content')
    <div class="row">
        <h1 class="mb-1" style="color: white;">Resultados del Pre-Registro</h1>
    </div>
    <div class="p-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Datos Registrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="container mt-2 mb-5">
                            <canvas id="graficaNiveles" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        const ctx = document.getElementById('graficaNiveles').getContext('2d');
        const grafica = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($niveles),
                datasets: [{
                        label: 'Matutino',
                        data: @json($datosTurnos['Matutino']),
                        backgroundColor: 'rgba(54, 162, 235, 0.7)'
                    },
                    {
                        label: 'Vespertino',
                        data: @json($datosTurnos['Vespertino']),
                        backgroundColor: 'rgba(75, 192, 192, 0.7)'
                    },
                    {
                        label: 'Sabatino',
                        data: @json($datosTurnos['Sabatino']),
                        backgroundColor: 'rgba(255, 206, 86, 0.7)'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Distribución de Turnos por Nivel'
                    },
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0
                    }
                }
            }
        });
    </script>

    <div class="p-4">

        <div class="row">
            <div class="col-md-15 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Datos Registrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1"
                                class="table table-striped table-bordered table-hover table-sm table align-middle">
                                <thead class="table-danger">
                                    <tr>
                                        <td style="text-align: center">Nro</td>
                                        <td style="text-align: center">Nombre(s)</th>
                                        <td style="text-align: center">Apellidos</th>
                                        <td style="text-align: center">Correo Electrónico</th>
                                        <td style="text-align: center">Correo Institucional</th>
                                        <td style="text-align: center">No. Control</th>
                                        <td style="text-align: center">No. Teléfono</th>
                                        <td style="text-align: center">Carrera</th>
                                        <td style="text-align: center">Nivel</th>
                                        <td style="text-align: center">Turno</th>
                                        <td style="text-align: center">Fecha de Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $contador = 1; ?>
                                    @foreach ($resultados as $resultado)
                                        <tr>
                                            <td style="text-align: center">{{ $contador++ }}</td>
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
                        </div>
                        <script>
                            $(function() {
                                $("#example1").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Pacientes",
                                        "infoFiltered": "(Filtrado de _MAX_ total Registros)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar _MENU_ Registros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscador:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
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
                                                text: '<button class="btn btn-info btn-sm btn-block"><i class="bi bi-copy"></i> COPIAR</button>',
                                                extend: 'copy',
                                                title: 'Listado de Pacientes',
                                                exportOptions: {
                                                    columns: [0, 1, 2, 3, 4, 5, 6, 7,
                                                        8
                                                    ] // Especifica las columnas por índice (0-based)
                                                }
                                            }, {
                                                text: '<button class="btn btn-danger btn-sm btn-block"><i class="bi bi-filetype-pdf"></i> PDF</button>',
                                                extend: 'pdf',
                                                title: 'Listado de Pacientes',
                                                exportOptions: {
                                                    columns: [0, 1, 2, 3, 4, 5, 6,
                                                        8
                                                    ] // Selecciona las columnas para PDF
                                                }
                                            }, {
                                                text: '<button class="btn btn-secondary btn-sm btn-block"><i class="bi bi-filetype-csv"></i> CSV</button>',
                                                extend: 'csv',
                                                title: 'Listado de Pacientes',
                                                exportOptions: {
                                                    columns: [0, 1, 2, 3, 4, 5, 6, 7,
                                                        8
                                                    ] // Selecciona las columnas para CSV
                                                }
                                            }, {
                                                text: '<button class="btn btn-success btn-sm btn-block"><i class="bi bi-filetype-xlsx"></i> EXCEL</button>',
                                                extend: 'excel',
                                                title: 'Listado de Pacientes',
                                                exportOptions: {
                                                    columns: [0, 1, 2, 3, 4, 5, 6, 7,
                                                        8
                                                    ] // Selecciona las columnas para Excel
                                                }
                                            }, {
                                                text: '<button class="btn btn-primary btn-sm btn-block"><i class="bi bi-printer"></i> IMPRIMIR</button>',
                                                extend: 'print',
                                                title: 'Listado de Pacientes',
                                                exportOptions: {
                                                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8] // Excluir columna 8
                                                }

                                            }]
                                        },
                                        {
                                            extend: 'colvis',
                                            text: 'Visor de columnas',
                                            collectionLayout: 'fixed three-column'
                                        }
                                    ],
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
