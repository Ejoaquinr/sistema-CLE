@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CLE ADMINSITRACIÓN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

@section('content')
<style>
    .sidebar {
        width: 250px;
        background-color: #111827;
        min-height: 100vh;
        color: white;
        position: fixed;
    }
    .sidebar a {
        display: block;
        padding: 15px 20px;
        color: white;
        text-decoration: none;
    }
    .sidebar a:hover {
        background-color: #1f2937;
    }
    .sidebar .logo {
        text-align: center;
        padding: 20px;
    }
    .main-content {
        margin-left: 250px;
        padding: 20px;
        background: url('{{ asset('storage/f7fcad3f-572d-44ea-a7d2-94ca4b5d6abc.png') }}') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .main-content .title {
        font-size: 3rem;
        font-weight: bold;
        text-align: center;
        background-color: rgba(0,0,0,0.6);
        padding: 20px;
        border-radius: 10px;
    }
</style>


<div class="d-flex">
<header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>


        <div class="profile-img">
            <img src="assets/img/LOGO-CLE2.png" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/LOGO-CLE.png" alt=""> -->
            <h1 class="sitename">CLE ITI</h1>
        </a>

        <div class="social-links text-center">
            <a href="{{ url('https://www.facebook.com/CLE.IGUALA?rdid=QSf90RtZhNfpjsfQ&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F16DGKMpShi%2F#') }}"
                class="facebook"><i class="bi bi-facebook"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Inicio</a></li>
                <li><a href="#about"><i class="bi bi-info-circle navicon"></i> Informacion</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> PreRegistro Resultados</a></li>
                <li><a href="#portfolio"><i class="bi bi-journal-bookmark-fill navicon"></i> Material Didactico</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Acerca de</a></li>
                <li><a href="#contact"><i class="bi bi-telephone-forward navicon"></i> Contacto</a></li>
            </ul>
        </nav>
        
     

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

            <!-- Contenido principal del Hero -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Coordinación de Lenguas Extranjeras</h2>
                <p><span class="typed" data-typed-items="CLE IGUALA">Designer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>
        </section>

    </header>

</div>
@endsection
