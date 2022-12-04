<?php
require('./database.php');

$fk_ruta = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/img/favicon.png" rel="icon">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rutas</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
                    <li><a class="nav-link active" href="rutas.php">Rutas</a></li>
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



    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h3>Rutas <span></span></h3>
            </div>


            <div class="row d-flex justify-content-center">

                <?php

                $url = $_SERVER["REQUEST_URI"];
                $consulta = ("SELECT * FROM rutas_individuales WHERE fk_ruta = " . $fk_ruta);
                $resultado = mysqli_query($conn, $consulta);
                if ($resultado) {
                    // echo ("<h1 class='text-center'>Consulta correcta</h1>");
                }

                while ($campo = mysqli_fetch_array($resultado)) {

                    $id  = $campo['id'];
                    $nombre = $campo['nombre'];
                    $color = $campo['color'];
                    $pt1 = "./admin/";
                    $pt2 = $campo['img'];
                    $dir = $pt1 . $pt2;


                    echo ('
                    
                    <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-5">
                            <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                                <img src="' . $dir . '" alt="" width=100% style="border-radius:10px; position:relative;" srcset="">
                                <h4 class="title" style="margin-top:20px;"> ' . $nombre . ' <a href=""> </a></h4>
                                <a class="btn btn-secondary" style="margin-top:20px; background-color:#004E8B;"  data-bs-toggle="modal" href="#exampleModal'.$id.'">Ver Recorrido</a>
                            </div>
                        </div>');
                }
                ?>
            </div>
        </div>
    </section>


    <main id="main">

    <?php

                $url = $_SERVER["REQUEST_URI"];
                $consulta = ("SELECT * FROM rutas_individuales WHERE fk_ruta = " . $fk_ruta);
                $resultado = mysqli_query($conn, $consulta);
                if ($resultado) {
                    // echo ("<h1 class='text-center'>Consulta correcta</h1>");
                }

                foreach ($resultado as $ruta) { ?>
                     <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $ruta['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ruta en el mapa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <img src="./admin/<?php echo $ruta['ida'] ?>" alt="" width=100% style="border-radius:10px; position:relative;" srcset=""> 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

        //         while ($campo = mysqli_fetch_array($resultado)) {

        //             $pt1 = "./admin/";
        //             $pt2 = $campo['ida'];
        //             $dir = $pt1 . $pt2;


        //             echo ('
        //             <!-- Modal -->
        // <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        //     <div class="modal-dialog">
        //         <div class="modal-content">
        //             <div class="modal-header">
        //                 <h5 class="modal-title" id="exampleModalLabel">Ruta en el mapa</h5>
        //                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        //             </div>
        //             <div class="modal-body">
        //             <img src="' . $dir . '" alt="" width=100% style="border-radius:10px; position:relative;" srcset=""> 
        //             </div>
        //             <div class="modal-footer">
        //                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        //             </div>
        //         </div>
        //     </div>
        // </div>

                    
        //             ');
        //         }
                ?>
        

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