@extends('layouts.admin')

@section('title', 'Prelista')

@section('content')
<div class="p-4">

<div class="row">
    <div class="col-md-15 mx-auto">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4 class="card-title">Datos Registrados en una prelista</h4>
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
                                
                                 <!-- Se oculta lo que es el correo electronico y el correo 
                                <td style="text-align: center">Correo Electrónico</th>
                                <td style="text-align: center">Correo Institucional</th>
                                -->
                                <td style="text-align: center">No. Control</th>
                                <td style="text-align: center">No. Teléfono</th>
                               <!-- <td style="text-align: center">Carrera</th>-->
                                <td style="text-align: center">Nivel</th>
                                <td style="text-align: center">Turno</th>
                                <!--<td style="text-align: center">Fecha de Registro</th>-->
                                 <!-- Actualizacion botones 11/05/2025-->
                                <td style="text-align: center">Grupos</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($resultados as $resultado)
                                <tr>
                                    <td style="text-align: center">{{ $contador++ }}</td>
                                    <td>{{ $resultado->nombres }}</td>
                                    <td>{{ $resultado->apellidos }}</td>
                                    <!-- Se oculta lo que es el correo electronico y el correo 
                                <td style="text-align: center">Correo Electrónico</th>
                                <td style="text-align: center">Correo Institucional</th>
                                
                                    {{-- <td>{{ $resultado->correo_electronico }}</td>
                                    <td>{{ $resultado->correo_institucional }}</td> --}}
                                    -->
                                    <td>{{ $resultado->no_control }}</td>
                                    <td>{{ $resultado->no_telefono }}</td>

                                   <!-- <td>{{ $resultado->carrera }}</td>-->
                                    <td>{{ $resultado->nivel }}</td>
                                    <td>{{ $resultado->turno }}</td>
                                    <!--<td>{{ $resultado->created_at->format('d/m/Y H:i') }}</td>-->
                                   <td>
  <form action="{{ route('grupos-confirmados.desde-resultado') }}" method="POST" style="display:inline;">
    @csrf
    <input type="hidden" name="nombres" value="{{ $resultado->nombres }}">
    <input type="hidden" name="apellidos" value="{{ $resultado->apellidos }}">
    <input type="hidden" name="no_control" value="{{ $resultado->no_control }}">
    <input type="hidden" name="carrera" value="{{ $resultado->carrera }}">
    <input type="hidden" name="no_telefono" value="{{ $resultado->no_telefono }}">
    <input type="hidden" name="nivel" value="{{ $resultado->nivel }}">
    <input type="hidden" name="turno" value="{{ $resultado->turno }}">
    <button type="submit" class="btn btn-success btn-sm">
        <i class="bi bi-check-circle"></i> Confirmar
    </button>
</form>


   
</td>
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
