<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/img/favicon.png" rel="icon">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ayuda</title>
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
    <link href="assets/css/acordeon.css" rel="stylesheet">


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
                    <li><a class="nav-link active" href="ayuda.php">Ayuda</a></li>
                    <li><a class="nav-link " href="admin/index.php">Iniciar Sesión</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <br><br>

    <div class="container" data-aos="fade-up">
        <br><br><br>
        <div class="section-title">

            <h3>Preguntas <span>Frecuentes</span></h3>

        </div>
        <center>
            <div class="accordion">
                <div class="icon"></div>
                <h5>¿En qué ciudad funciona la aplicación?</h5>
            </div>
            <div class="panel">
                <p>
                    Actualmente el servicio de Transpor-T solo esta disponible para
                    la ciudad de Durango, Dgo.
                </p>
            </div>

            <div class="accordion">
                <div class="icon"></div>
                <h5>¿Cómo puedo saber cuanto dinero me queda?</h5>
            </div>
            <div class="panel">
                <p>
                    Posteriormente a que hayas iniciado sesión, dirígete al apartado "Monedero"
                    del menú y podrás visualizar tu saldo restante.
                </p>
            </div>

            <div class="accordion">
                <div class="icon"></div>
                <h5>¿Cómo puedo recargar mi monedero?</h5>
            </div>
            <div class="panel">
                <p>
                    Actualmente puedes recargar dinero por medio de tarjeta de débito,
                    tarjeta de crédito, transferencia bancaria y depósito.
                </p>
            </div>

            <div class="accordion">
                <div class="icon"></div>
                <h5>¿Cómo puedo saber que rutas he abordado?</h5>
            </div>
            <div class="panel">
                <p>
                    Posteriormente a que hayas iniciado sesión, dirígete al apartado "Mis Recorridos"
                    del menú y podrás visualizar las rutas a las que haz subido, así como el saldo
                    gastado y la fecha y hora en la que sucedió.
                </p>
            </div>

            <div class="accordion">
                <div class="icon"></div>
                <h5>¿Cómo puedo comunicarme con Transpor-T?</h5>
            </div>
            <div class="panel">
                <p>
                    Puedes enviar un correo electrónico a: <a href="mailto:info@yoursite.com">transpor-t.dgodgo@gmail.com
                    </a>
                    <br>
                    O puedes llamar al teléfono: <a href="tel://6181703043">+52 618 137 3050</a>
                </p>
            </div>
    </div>
    </center>


    </div>

    <section id="contact" class="contact" id="Publicaciones">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h3><span>Envíanos un mensaje</span></h3>

            </div>
            <br>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <img src="assets/img/contacto.jpg" alt="login" style="border:0; width: 92%; height: auto">
                </div>

                <div class="col-lg-6">
                <form action='enviarcorreo.php' method='POST' id="contactForm" name="contactForm" class="contactFormu">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group mt-3">

                                    <input type="text" class="form-control" name="nombre" id="name" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-3">

                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">

                                    <input type="text" class="form-control" name="asunto" id="Asunto" placeholder="Asunto" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">

                                    <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="4" placeholder="Mensaje" style='resize: none;' required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <input type="submit" class='btn btn-primary' value="Enviar Correo" name="enviar" class="btnenviar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>

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
    <script src="assets/js/acordeon.js"></script>


</body>

</html>