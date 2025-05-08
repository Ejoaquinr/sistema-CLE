@extends('layouts.admin')

@section('title', 'Horarios')

@section('content')
<div class="row">
        <h1 class="mb-1" style="color: white;">Listado de Grupos y Listas</h1>
    </div>

    <div class="p-4">
        <div class="row">
            <div class="col-md-15 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Prelista de Horarios</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tablaGrupos"
                                   class="table table-striped table-bordered table-hover table-sm table align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Grupo</th>
                                        <th>Listas Asociadas Gabo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($groups as $index => $group)
                                        <tr>
                                            <td style="text-align: center">{{ $index + 1 }}</td>
                                            <td>{{ $group->name }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($group->lists as $list)
                                                        <li>{{ $list->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <script>
                            $(function () {
                                $("#tablaGrupos").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                                        "lengthMenu": "Mostrar _MENU_ registros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscar:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Último",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                    responsive: true,
                                    lengthChange: true,
                                    autoWidth: false
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
