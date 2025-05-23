<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CLE Administracion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Fonts -->
    <link href="{{ url('https://fonts.googleapis.com') }}" rel="preconnect">
    <link href="{{ url('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}"
        rel="stylesheet">

    <!-- Iconos de Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Sweet Alert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables-->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Main CSS File  -->
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">



    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(to right, rgb(38, 38, 54), rgb(68, 45, 78));
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="{{ url('assets/img/LOGO-CLE2.png') }}" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="{{ url('/admin') }}" class="logo d-flex align-items-center justify-content-center">
            <h1 class="sitename">CLE ITI</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/admin') }}" class="active"><i class="bi bi-house navicon"></i>Inicio</a></li>
                <li><a href="{{ url('/admin/resultados') }}"><i class="bi bi-info-circle navicon"></i> Resultado de
                        PreRegistro</a></li>
                <li><a href="{{ url('/admin/prelista') }}"><i class="bi bi-file-earmark-text navicon"></i> Prelista</a>
                </li>
                <!-- Modificacion 11/05/2025 Agregacion de otro modo en la barra lateral-->
                <li><a href="{{ url('/admin/grupos') }}"><i class="bi bi-people navicon"></i> Grupos</a></li>
                <li>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-person navicon"></i> Cerrar Sesión
                    </a>
                </li>
                {{--  action="{{ route('logout') }}  --}}
            </ul>
        </nav>

    </header>

    @if (($Message = Session::get('mensaje')) && ($icono = Session::get('icono')))
        <script>
            Swal.fire({
                position: "top",
                icon: "{{ $icono }}",
                title: "{{ $Message }}",
                showConfirmButton: false,
                timer: 4500
            });
        </script>
    @endif

    {{-- Contenido dinámico --}}
    <main>
        @yield('content')
    </main>

    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap Bundle con Popper (incluye ambos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-PwF4Ld8/5d3uzV7+...tuHash..." crossorigin="anonymous"></script>
    <!-- Agregar en el <head> de tu layout principal -->


    <!-- Agregar antes del cierre de </body> -->


    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>

</body>

</html>
