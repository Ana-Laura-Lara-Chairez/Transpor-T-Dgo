<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/img/favicon.png" rel="icon">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mi Perfil</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/perfil.css" rel="stylesheet">


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
                    <li><a class="nav-link active" href="recorridos.php">Mi Perfil</a></li>
                    <li><a class="nav-link " href="ayuda.php">Ayuda</a></li>
                    <li><a class="nav-link " href="admin/index.php">Iniciar Sesión</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->



    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h3>Mi <span>Perfil</span></h3>

            </div>

            <br>
            <center>
            <div class="perfil"  style="width: 90%;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <center>
                            <img src="assets/img/team.png" alt="login" width="60%" style="margin-top: 20px; margin-bottom: 20px;">
                        </center>

                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="grupos">
                                    <h4 class="title" style="margin-top:20px; color:#004E8B;">Correo Electrónico<a href=""> </a></h4>
                                    <input type="email" name="email" id="email" class="form-control" style="margin-top:5px; margin-bottom:20px;" required placeholder="Correo Electrónico">
                                </div>
                                <div class="grupos">
                                <h4 class="title" style="margin-top:20px; color:#004E8B;">Nombre<a href=""> </a></h4>
                                    <input type="text" name="name" id="name" class="form-control" style="margin-top:5px; margin-bottom:20px;" required placeholder="Nombre Completo">
                                </div>
                                <div class="grupos">
                                <h4 class="title" style="margin-top:20px; color:#004E8B;">Usuario<a href=""> </a></h4>
                                    <input type="text" name="user" id="user" class="form-control" style="margin-top:5px; margin-bottom:20px;" required placeholder="Usuario">
                                </div>
                                <div class="grupos">
                                <h4 class="title" style="margin-top:20px; color:#004E8B;">Contraseña<a href=""> </a></h4>
                                    <input type="password" name="password" id="password" class="form-control" style="margin-top:5px; margin-bottom:20px;" required placeholder="Contraseña">
                                </div>
                                <center>
                                <a class="btn btn-secondary" style="margin-top:20px; background-color:#004E8B;" href="">Editar datos</a>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </center>
            
        </div>

    </section>

    <main id="main">


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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>