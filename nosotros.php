<?php

require('./database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/img/favicon.png" rel="icon">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nosotros</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/icono.png" rel="icon">
    <!-- Favicons -->
    <link href="assets/img/icono.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <a href="index.php"> <img src="assets/img/logo.png" width="90px" alt="logo"></a>
                </a><span></span></a>
            </h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link " href="index.php">Inicio</a></li>
                    <li><a class="nav-link " href="rutas.php">Rutas</a></li>
                    <li><a class="nav-link " href="monedero.php">Monedero</a></li>
                    <li><a class="nav-link " href="recorridos.php">Mis Recorridos</a></li>
                    <li><a class="nav-link " href="ayuda.php">Ayuda</a></li>
                    <li><a class="nav-link " href="admin/index.php">Iniciar Sesión</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->



    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h3>¿Quienes <span>Somos?</span></h3>

            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="text-align: justify;">Transpor-T Durango es una empresa dedicada al desarrollo e
                        implementación de un nuevo método de pago del transporte público,
                        cuyo objetivo es automatizar el pago de los pasajeros al momento de
                        subir haciendo uso de credenciales y una aplicación en la que se
                        podrá recargar dinero, con el fin de satisfacer las necesidades
                        de los clientes y brindarles un servicio seguro y eficiente.
                    </h4>


                    <ul>
                        <li>
                            <i class="bx bx-chart"></i>
                            <div style="text-align: justify;">
                                <h5>Misión: </h5>
                                <p>Ofrecer innovación y seguridad para nuestros clientes al pagar el transporte público por medio del proyecto Transpor-T Dgo de manera rápida, oportuna y eficaz.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-show-alt"></i>
                            <div style="text-align: justify;">
                                <h5>Visión:</h5>
                                <p>Ser una empresa líder y reconocida a nivel nacional al implementar pagos digitales de manera segura en el servicio de transporte del Estado de Durango, brindando un servicio de calidad y una herramienta eficaz para estudiantes y público en general en su vida cotidiana.
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->


    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">



                <div class="section-title">

                    <h3><span>Objetivos </span></h3>
                    <p>Los principales objetivos de Transpor-T son:</p>
                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-badge-check"></i></div>
                            <h4 class="title"><a href="">Objetivo General:</a></h4>
                            <p class="description" style="text-align: justify;">
                                Implementar una nueva forma de pago al usar transporte público haciendo uso de una credencial a la cual se podrá recargar dinero con diferentes medios de pago por medio de una aplicación.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-check-circle"></i></div>
                            <h4 class="title"><a href="">Objetivo:</a></h4>
                            <p class="description" style="text-align: justify;">Desarrollo de aplicación web y móvil para el funcionamiento del proyecto.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-check-circle"></i></div>
                            <h4 class="title"><a href="">Objetivo:</a></h4>
                            <p class="description" style="text-align: justify;">Creación de videojuego promocional con relación al proyecto.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-check-circle"></i></div>
                            <h4 class="title"><a href="">Objetivo:</a></h4>
                            <p class="description" style="text-align: justify;">Implementación de credenciales y lectores de las mismas en el transporte público.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <h3>Equipo de trabajo de <span>Transpor-T</span></h3>
                </div>
                <br>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                    <?php


                    $url = $_SERVER["REQUEST_URI"];
                    $consulta = ("SELECT * FROM integrantes");
                    $resultado = mysqli_query($conn, $consulta);
                    if ($resultado) {
                        // echo ("<h1 class='text-center'>Consulta correcta</h1>");
                    }

                    while ($campo = mysqli_fetch_array($resultado)) {


                        $nombre = $campo['nombre'];
                        $area = $campo['area'];
                        $puesto = $campo['puesto'];

                        $pt1 = "./admin/";
                        $pt2 = $campo['fot_integrante'];
                        $dir = $pt1 . $pt2;

                        $short = str_replace(' ', '', $area);
                        // echo('
                        //     <script>alert("' . $short .'")</script>
                        // ');



                        echo ('
                        <div class="col-md-2 portfolio-item ' . $short . ' text-center">
                        
                        <div class="portfolio-wrap">
                        <img src="' . $dir . '"   style="width: 90%; height: auto;
                    ">
                        </div>
                        <br>
                        <h6 class="text-center mt-3">' . $nombre . '</h6>
                        
                        </div>');
                    }
                    ?>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h3><img src="assets/img/logo.png" width="120px" alt="logo"></a>
                                </a> <span></span></h3>
                            <p>
                                Direccion: Durango - Mezquital, <br> 34308 Gabino Santillán, Dgo.<br>
                                <strong>Telefono:</strong> +52 618 137 3050<br>
                                <strong>Email:</strong> transpor-t.dgodgo@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links rapidos</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="index.php">Inicio</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="rutas.php">Rutas</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="monedero.php">Monedero</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>La empresa</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="nosotros.php">Nosotros</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="ayuda.php">Ayuda</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Nuestras Redes Sociales</h4>

                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>Transpor-T Dgo</span></strong>. Todos los derechos reservados.
                </div>
                <div class="credits">

                    </a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="margin-right: 30px;"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>