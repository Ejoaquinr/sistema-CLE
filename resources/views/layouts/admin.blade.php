<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CLE Administracion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Fonts -->
    <link href="{{url('https://fonts.googleapis.com')}}" rel="preconnect">
    <link href="{{url('https://fonts.gstatic.com')}}" rel="preconnect" crossorigin>
    <link
        href="{{url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
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
            <img src="{{url('assets/img/LOGO-CLE2.png')}}" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="{{ url('/admin') }}" class="logo d-flex align-items-center justify-content-center">
            <h1 class="sitename">CLE ITI</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/admin') }}" class="active"><i class="bi bi-house navicon"></i>Inicio</a></li>
                <li><a href="{{ url('/admin/resultados') }}"><i class="bi bi-info-circle navicon"></i> Resultado de
                        PreRegistro</a></li>
                <li><a href="{{ url('/admin/horarios') }}"><i class="bi bi-file-earmark-text navicon"></i> Horarios</a>
                </li>
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

    {{-- Contenido dinámico --}}
    <main>
        @yield('content')
    </main>

</body>

</html>
