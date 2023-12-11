<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplicación Proyectos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">DISEÑO DE SISTEMAS</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">PROYECTOS</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">ACERCA DE</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#mesasdeexamen2   ">MESAS DE EXAMEN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/ejemp.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">DEPARTAMENTO DE EDUCACIÓN SUPERIOR EN INFORMÁTICA</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">""...que para obtener un buen profesor de enseñanza secundaria no basta que éste sepa todo lo que debe enseñar ni más de lo que debe enseñar, sino que es necesario que sepa cómo debe enseñar..." (Joaquín V. González)</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">


                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">PROYECTOS</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                @yield('content')



                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">ACERCA DE</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Nuestra Carrera conlleva 5 años de duración y forma docentes para la enseñanza de Informática en los niveles Secundario
                        y Superior. Posee una carga horaria total de 3058 horas reloj y contiene 42 asignaturas. La formación incluye el conocieminto del sistema educativo, la escuela,
                    la enseñanza, y el trabajo docente en el contexto histórico y social actual. Algunas de estas Unidades Curriculares son: Pedagogía, Didactica, Sistema y Política
                Educativa, Psicología Educacional, entre otras. El último tramo de la Formación en la práctica profesional es la residencia pedagógica, que implica un período de
                    del dictado de clases en el Nivel Secundario.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">El conocimiento de las caracteristicas decesidades de las y los estudiantes del Nivel Secundario y del Superior. El
                        conocimeinto de la Informática y de los enfoques y estrategias de enseñanza. Algunas unidedes curriculares abordan aspectos vinculados con, por ejemplo la
                        Informática aplicada al diseño y la comunicación; los paradigmas, algoritmos y lenguajes de programación; la construcción del conociento informático en el aula,
                        entre otras cuestiones. Espacios de práctica profesional para conocer las institucions educativas, observar y aprender de docentes experimentados, y progresivamenmte
                        planificar, llevar a cabo y evaluar propuestas de enseñanza en las escuelas del país.

                    </p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="http://institutojvgonzalez.buenosaires.edu.ar/archivos/planes/pci_informatica_resol_11_2016.pdf">
                        <i class="fas fa-download me-2"></i>
                        PCI 2015
                    </a>
                    |
                    <a class="btn btn-xl btn-outline-light" href="http://institutojvgonzalez.buenosaires.edu.ar/departamentos/informatica/docs/informatica_plan2009.pdf">
                        <i class="fas fa-download me-2"></i>
                        PCI 2009
                    </a>
                    |
                    <a class="btn btn-xl btn-outline-light" href="http://institutojvgonzalez.buenosaires.edu.ar/departamentos/informatica/docs/inf2016-correlat_p2015-conmodif.pdf">
                        <i class="fas fa-download me-2"></i>
                        Régimen de Correlativas
                    </a>
                    |
                    <a class="btn btn-xl btn-outline-light" href="http://institutojvgonzalez.buenosaires.edu.ar/archivos/CFG-Correspondecia_Academica-01-04-2023.pdf">
                        <i class="fas fa-download me-2"></i>
                        Campo de la Formación General
                    </a>
                </div>

            </div>
        </section>

        <img src="assets/img/jvg.jpg" alt="imagen">


        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">INFORMACIÓN</h4>
                        <p class="lead mb-0">
                            Ciudad de Buenos Aires
                            <br/>
                            Ayacucho 632
                            <br/>
                            Telefono Secretaría: 4372-8286
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/groups/2307073632896347/?ref=share&mibextid=K8Wfd2"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/informaticajvg?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-fw fa-instagram"></i></a>

                        <a class="btn btn-outline-light btn-social mx-1" href="https://chat.whatsapp.com/L3J2QGGJIH71JI31llzAJi"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">EQUIPO DIRECTIVO</h4>
                        <p class="lead mb-0">
                            COORDINADORA: Prof. Sandra Reckziegel
                            <br/>
                            DIRECTORA: Prof. Paula López
                            <br/>
                            <a href="http://institutojvgonzalez.buenosaires.edu.ar/departamentos/informatica/">Página Oficial</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Instituto Superior del Profesorado "Dr. Joaquín V. González"</small></div>
        </div>
        <!-- Portfolio Modals-->


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
