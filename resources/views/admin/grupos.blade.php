@extends('layouts.admin')

@section('title', 'Grupos Confirmados')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.css">
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <div class="container py-4">
        <h4 class="mb-4">Filtrar por Turno:</h4>
        <div class="btn-group mb-3" role="group" id="filtros-turno">
            <button class="btn btn-secondary active" data-filter="*">Todos</button>
            @foreach ($grupos as $turno => $niveles)
                <button class="btn btn-secondary" data-filter=".{{ $turno }}">{{ ucfirst($turno) }}</button>
            @endforeach
        </div>


        <script>
            $(document).ready(function() {
                $('#filtros-turno button[data-filter="*"]').trigger('click');
            });
        </script>

        <div class="row isotope">
            @foreach ($grupos as $turno => $niveles)
                @foreach ($niveles as $nivel => $grupoPorNivel)
                    <div class="col-12 mb-4 {{ $turno }}">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <strong>{{ ucfirst($turno) }} - Nivel {{ $nivel }}</strong>
                            </div>
                            <div class="card-body table-responsive">
                                <a href="{{ route('grupos.alumnos.create', ['turno' => $turno, 'nivel' => $nivel]) }}"
                                    class="btn btn-success btn-sm mb-3">
                                    + Agregar Alumno a {{ ucfirst($turno) }} - Nivel {{ $nivel }}
                                </a>
                                <table class="table table-bordered table-striped table-sm tabla-turno"
                                    id="tabla-{{ $turno }}-{{ $nivel }}">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre(s)</th>
                                            <th>Apellidos</th>
                                            <th>No. Control</th>
                                            <th>Teléfono</th>
                                            <th>Folio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($grupoPorNivel as $grupo)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $grupo->nombres }}</td>
                                                <td>{{ $grupo->apellidos }}</td>
                                                <td>{{ $grupo->no_control }}</td>
                                                <td>{{ $grupo->no_telefono }}</td>
                                                <td id="td-folio-{{ $grupo->id }}">
                                                    @if ($grupo->folio)
                                                        {{ $grupo->folio }}
                                                    @else
                                                        <form onsubmit="guardarFolio(event, {{ $grupo->id }})"
                                                            id="form-folio-{{ $grupo->id }}" class="d-flex">
                                                            @csrf
                                                            <input type="text" name="folio"
                                                                class="form-control form-control-sm me-1" required>
                                                            <button type="submit"
                                                                class="btn btn-success btn-sm">Guardar</button>
                                                        </form>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('grupos.edit', $grupo->id) }}"
                                                        class="btn btn-warning btn-sm">Editar</a>
                                                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST"
                                                        style="display:inline-block;"
                                                        onsubmit="return confirm('¿Eliminar alumno?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

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

        document.addEventListener('DOMContentLoaded', function() {
            // Isotope
            var iso = new Isotope('.isotope', {
                itemSelector: '.col-12',
                layoutMode: 'fitRows'
            });

            document.querySelectorAll('#filtros-turno button').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('#filtros-turno button').forEach(b => b.classList
                        .remove('active'));
                    this.classList.add('active');
                    iso.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                });
            });

            // DataTables
            @foreach ($grupos as $turno => $niveles)
                @foreach ($niveles as $nivel => $grupoPorNivel)
                    $('#tabla-{{ $turno }}-{{ $nivel }}').DataTable({
                        pageLength: 10,
                        responsive: true,
                        language: {
                            emptyTable: "No hay información",
                            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                            infoEmpty: "Mostrando 0 a 0 de 0 registros",
                            lengthMenu: "Mostrar _MENU_ registros",
                            loadingRecords: "Cargando...",
                            processing: "Procesando...",
                            search: "Buscar:",
                            zeroRecords: "Sin resultados encontrados",
                            paginate: {
                                first: "Primero",
                                last: "Último",
                                next: "Siguiente",
                                previous: "Anterior"
                            }
                        },
                        dom: 'Bfrtip',
                        buttons: [{
                                extend: 'collection',
                                text: 'Reportes',
                                orientation: 'landscape',
                                buttons: [{
                                        extend: 'copy',
                                        text: '<button class="btn btn-info btn-sm btn-block">COPIAR</button>',
                                        className: '',
                                        title: 'Listado de Grupos Confirmados',
                                        exportOptions: {
                                            columns: ':visible'
                                        }
                                    },
                                    {
                                        extend: 'pdf',
                                        text: '<button class="btn btn-danger btn-sm btn-block">PDF</button>',
                                        className: '',
                                        title: 'Listado de Grupos Confirmados',
                                        exportOptions: {
                                            columns: ':visible'
                                        }
                                    },
                                    {
                                        extend: 'csv',
                                        text: '<button class="btn btn-secondary btn-sm btn-block">CSV</button>',
                                        className: '',
                                        title: 'Listado de Grupos Confirmados',
                                        exportOptions: {
                                            columns: ':visible'
                                        }
                                    },
                                    {
                                        extend: 'excel',
                                        text: '<button class="btn btn-success btn-sm btn-block">EXCEL</button>',
                                        className: '',
                                        title: 'Listado de Grupos Confirmados',
                                        exportOptions: {
                                            columns: ':visible'
                                        }
                                    },
                                    {
                                        extend: 'print',
                                        text: '<button class="btn btn-primary btn-sm btn-block"><i class="bi bi-printer"></i> IMPRIMIR</button>',
                                        className: '',
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
                    });
                @endforeach
            @endforeach

        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@endsection
