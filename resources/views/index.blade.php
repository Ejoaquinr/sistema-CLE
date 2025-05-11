<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Coordinacion de Lenguas Extranjeras</title>
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

    <!-- Sweet Alert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>


        <div class="profile-img">
            <img src="assets/img/LOGO-CLE2.png" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="{{ url('/') }}" class="logo d-flex align-items-center justify-content-center">
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
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> PreRegistro</a></li>
                <li><a href="#portfolio"><i class="bi bi-journal-bookmark-fill navicon"></i> Material Didactico</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Acerca de</a></li>
                <li><a href="#contact"><i class="bi bi-telephone-forward navicon"></i> Contacto</a></li>
                <li><a href="{{ url('login') }}"><i class="bi bi-person navicon"></i> Ingresar</a></li>
            </ul>
        </nav>

    </header>

    <main class="main">
        <!-- Logos en la esquina superior derecha -->
        <div
            style="position: absolute; top: 1rem; right: 1rem; display: flex; gap: 0.5rem; z-index: 10; align-items: center; flex-wrap: wrap;">
            <a href="http://www.gob.mx/" target="_blank">
                <img src="assets/img/Logo_del_Gobierno_de_México_(2018).png" alt="Logo 1"
                    style="max-height: 10vh; width: auto; height: auto; max-width: 80%;">
            </a>
            <a href="http://www.gob.mx/sep" target="_blank">
                <img src="assets/img/LOGO-SEP.png" alt="Logo 2"
                    style="max-height: 10vh; width: auto; height: auto; max-width: 100%;">
            </a>
            <a href="http://www.tecnm.mx/" target="_blank">
                <img src="assets/img/TecNM_logo.png" alt="Logo 3"
                    style="max-height: 10vh; width: auto; height: auto; max-width: 100%;">
            </a>
            <a href="{{ url('/') }}" target="_blank">
                <img src="assets/img/LogoIti.png" alt="Logo 4"
                    style="max-height: 10vh; width: auto; height: auto; max-width: 100%;">
            </a>
        </div>

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


        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Informacion</h2>
                <p>Informacion Acerca del CLE, niveles, horaris, ect etc etc</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Pre-Registro Section -->
           <!--Esto es para la advertencia en la vista del pre-r.  -->
        <section id="resume" class="resume section">

        @if ($errors->any())
    <div class="alert alert-warning">
        <strong>Atención:</strong> Por favor completa todos los campos obligatorios.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('mensaje') && !$errors->any())
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<!-- SweetAlert2 de error para volver a la vista del pre-r. -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

           @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Faltan campos por llenar',
            html: `
                <ul style="text-align:left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonText: 'Volver a completar',
        });
    </script>
           @endif

        @if (session('mensaje'))
    <script>
        Swal.fire({
            icon: '{{ session('icono', 'success') }}',
            title: '{{ session('mensaje') }}',
            confirmButtonText: 'Aceptar',
        });
    </script>
              @endif


            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>PRE- REGISTRO A LOS CURSOS DE INGLÉS DEL TECNM CAMPUS IGUALA </h2>
                <p class="mb-2">
                    El presente formulario es para realizar el <strong>pre-registro</strong> a los cursos de inglés.
                    <span class="text-red-600 font-semibold">Este pre-registro no equivale a la inscripción
                        oficial.</span>
                    Su finalidad es recopilar datos para asignar horarios y días disponibles.
                </p>
                <p>
                    Asegúrate de llenar todos los campos obligatorios marcados con un asterisco (*).
                    Posteriormente se te contactará por medio del correo institucional para confirmar tu
                    inscripción.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">
                        <form action="{{ url('/admin') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Correo Electronico*</label>
                                    <input type="text" name="correo_electronico" id="correo"
                                        class="form-control" required="">
                                    @error('correo_electronico')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Correo institucional*</label>
                                    <input type="email" class="form-control" name="correo_institucional" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="pb-2">Nombre(s)*</label>
                                    <input type="text" class="form-control" name="nombres" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="pb-2">Apellido(s)*</label>
                                    <input type="text" class="form-control" name="apellidos" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="pb-2">Numero de Control*</label>
                                    <input type="text" class="form-control" name="no_control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="pb-2">Numero de Telefono*</label>
                                    <input type="text" class="form-control" name="no_telefono" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="form-label">Selecciona tu carrera *</label>
                                    <select name="carrera" class="form-select" required>
                                        <option disabled selected>Selecciona una carrera</option>
                                        <option>Ingeniería en Gestión Empresarial</option>
                                        <option>Ingeniería en Sistemas Computacionales</option>
                                        <option>Ingeniería Industrial</option>
                                        <option>Contador Público</option>
                                        <option>Ingeniería en Informática</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="subject-field" class="pb-2">Nivel a ingresar *</label> <br>
                                    <select name="nivel" class="form-select" required>
                                        <option disabled selected>Selecciona un nivel</option>
                                        <option>Primero</option>
                                        <option>Segundo</option>
                                        <option>Tercero</option>
                                        <option>Cuarto</option>
                                        <option>Quinto</option>
                                        <option>Sexto</option>
                                        <option>Séptimo</option>
                                        <option>Octavo</option>
                                        <option>Noveno</option>
                                        <option>Décimo</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="subject-field" class="form-label">Turno Preferible*</label>
                                    <select name="turno" class="form-select" required>
                                        <option disabled selected>Selecciona el Turno</option>
                                        <option>Matutino</option>
                                        <option>Vespertino</option>
                                        <option>Sabatino</option>
                                    </select>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
@else
        <!-- Section Title cuando el formulario está deshabilitado -->
        <div class="container section-title" data-aos="fade-up">
            <h2>PRE-REGISTRO A LOS CURSOS DE INGLÉS DEL TECNM CAMPUS IGUALA</h2>
            <div class="alert alert-info text-center" role="alert">
                <p class="mb-0 text-lg">
                    <i class="bi bi-info-circle me-2"></i>
                    El periodo de pre-registro no está disponible en este momento. Por favor, vuelve más tarde.
                </p>
            </div>
        </div>
    @endif
</section><!-- /Pre-Registro Section -->


        </section><!-- /Pre-Registro Section -->

        <!-- Material Didáctico Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Material Didactico por OMEGA BOOK COMPANY</h2>
                <p>Somos líderes en distribución de textos y contenidos digitales para la enseñanza de idiomas. Colaboramos con las mejores editoriales nacionales e internacionales para garantizar el surtido en México, Centro y Sudamérica.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Todo el material disponible</li>
                        <li data-filter=".filter-new">Level 1 & 2</li>
                        <li data-filter=".filter-app">Level 3 & 4</li>
                        <li data-filter=".filter-product">Level 5 & 6</li>
                        <li data-filter=".filter-branding">Level 7 & 8</li>
                        <li data-filter=".filter-books">Level 9 & 10</li>
                    </ul><!-- End Portfolio Filters -->


                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-new">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/material/English-Aware-NE-01.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>English Aware 1 New Edition</h4>
                                    <p>Para alumnos que inician el curso de inglés.</p>
                                    <a href="assets/img/material/English-Aware-NE-01.png" title="NO lo compres online, dirígete a las oficinas del CLE."
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="https://omegabookcompany.com.mx/nuevo/?product=english-aware-1-new-edition-copy-copy-copy-copy-copy" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/material/English-Aware-NE-02.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>English Aware 2 New Edition</h4>
                                    <p>Para alumnos que pasan al nivel 3.</p>
                                    <a href="assets/img/material/English-Aware-NE-02.png" title="NO lo compres online, dirígete a las oficinas del CLE."
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="https://omegabookcompany.com.mx/nuevo/?product=english-aware-1-new-edition-copy-copy-copy-copy" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->


                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/material/English-Aware-NE-03.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>English Aware 3 New Edition</h4>
                                    <p>Para alumnos que pasan al nivel 5.</p>
                                    <a href="assets/img/portfolio/English-Aware-NE-03.png" title="NO lo compres online, dirígete a las oficinas del CLE."
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="https://omegabookcompany.com.mx/nuevo/?product=english-aware-1-new-edition-copy-copy-copy" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/material/English-Aware-NE-04.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>English Aware 4 New Edition</h4>
                                    <p>Para alumnos que pasan al nivel 7.</p>
                                    <a href="assets/img/material/English-Aware-NE-04.png" title="NO lo compres online, dirígete a las oficinas del CLE."
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="https://omegabookcompany.com.mx/nuevo/?product=english-aware-1-new-edition-copy-copy" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/material/English-Aware-NE-05.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>English Aware 5 New Edition</h4>
                                    <p>Para alumnos que pasan al nivel 9.</p>
                                    <a href="assets/img/material/English-Aware-NE-05.png" title="NO lo compres online, dirígete a las oficinas del CLE.""
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="https://omegabookcompany.com.mx/nuevo/?product=english-aware-1-new-edition-copy" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Material Item -->

                    </div><!-- End Material Container -->

                </div>

            </div>

        </section><!-- /Material Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Acerca de</h2>
                <p>La Coordinación de Lenguas Extranjeras y Maternas se compromete a ser transparente con la comunidad estudiantil.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Misión</a>
                            </h4>
                            <p style="text-align: justify;" class="description">La Coordinación de Lenguas Extranjeras (CLE) del Tecnológico Nacional de México Campus Iguala tiene como misión proporcionar enseñanza de calidad del idioma extranjero inglés, 
                                apoyando el desarrollo académico y profesional de los estudiantes y del público en general 
                                mediante estrategias innovadoras y metodologías efectivas. 
                                Su propósito es fortalecer las competencias lingüísticas de los alumnos y participantes externos, 
                                preparándolos para enfrentar retos en cualquier entorno y facilitando su acceso a mejores oportunidades laborales y académicas.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Visión</a>
                            </h4>
                            <p style="text-align: justify;" class="description">La Coordinación de Lenguas Extranjeras (CLE) del Tecnológico Nacional de México Campus Iguala tiene como visión consolidarse como un centro de enseñanza de idiomas reconocido por su calidad educativa, 
                                innovación en métodos de enseñanza y accesibilidad para los estudiantes y el público en general. 
                                Su objetivo es proporcionar herramientas lingüísticas que impulsen el desarrollo académico y profesional de los alumnos y participantes externos, 
                                promoviendo el dominio de una segunda lengua como parte fundamental de su formación y crecimiento personal.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Avalados por</a></h4>
                            <p style="text-align: justify;" class="description">Una vez que concluyes los 10 niveles, tu constancia está avalada por
                            el Marco Común Europeo de Referencia para las lenguas (MCER), con un nivel B1.</p>
                        </div>
                    </div><!-- End Service Item -->
                    
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <p>Ponte en contacto con nosotros para obtener más información.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <div class="info-wrap d-flex flex-row flex-wrap" style="height: 100%; gap: 1rem;">
                        <!-- Columna izquierda -->
                        <div class="col-lg-4">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Columna derecha: el mapa -->
                        <div class="col-lg-7">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1335.4590607735104!2d-99.52743451477733!3d18.354996539607182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cc381515555555%3A0x2ca126793d4e0991!2sInstituto%20Tecnologico%20de%20Iguala%20Gro.!5e1!3m2!1ses-419!2smx!4v1745118212976!5m2!1ses-419!2smx"
                                width="100%" height="100%" style="border:0; min-height: 272px;"
                                allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>


        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

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

</body>

</html>