<!DOCTYPE html>
<html lang="en">

<head>
  <link href="assets/img/favicon.png" rel="icon">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Monedero</title>
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
  <link href="assets/css/saldo.css" rel="stylesheet">
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
          <li><a class="nav-link " href="rutas.php">Rutas</a></li>
          <li><a class="nav-link active" href="monedero.php">Monedero</a></li>
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

        <h3>Mi <span>Monedero</span></h3>

      </div>

      <center>
        <div class="contenedor-saldo" data-aos="fade-right" data-aos-delay="100">
          <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
            <h4 class="saldo"> Mi saldo:</h4>

            <label id="countLabel" class="dinero">$0</label><br>

            <a class="btn btn-secondary" style="margin-top:20px; background-color:#004E8B;" data-bs-toggle="modal" data-bs-target="#modal1" style="margin-bottom:30px;">Recargar</a>
          </div>

        </div>
      </center>

    </div>

  </section>


  <main id="main">

    <!-- Modal -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#004E8B; color:#fff">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona el método para recargar saldo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">

                <div class="col-md-4 ">
                  <div class="d-flex justify-content-center">
                    <h6 style="margin-bottom:30px;">Tarjeta de crédito o débito</h6>
                  </div>
                  <div class="d-flex justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2695/2695969.png" width="50%">
                  </div>
                  <div class="d-flex justify-content-center mt-4 ">




                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal2" style="margin-bottom:30px;">Seleccionar</button>


                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="d-flex justify-content-center">
                    <h6 style="margin-bottom:30px;">Transferencia bancaria</h6>
                  </div>
                  <div class="d-flex justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/1771/1771174.png" width="50%">
                  </div>
                  <div class="d-flex justify-content-center mt-4 ">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal3" style="margin-bottom:30px;">Seleccionar</button>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="d-flex justify-content-center">
                    <h6 style="margin-bottom:30px;">Depósito a cuenta del beneficiario</h6>
                  </div>
                  <div class="d-flex justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/2984/2984670.png" width="50%">
                  </div>
                  <div class="d-flex justify-content-center mt-4 ">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal4">Seleccionar</button>

                  </div>
                </div>


              </div>



            </div>
          </div>
          <div class="modal-footer">
            <button type="button" hidden class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#004E8B; color:#fff">
            <h5 class="modal-title" id="exampleModalLabel">Tarjeta de crédito/débito</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1" style="margin-bottom:15px;margin-left:5px;">Número de la tarjeta</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa el número de la tarjeta">

              </div>

              <div class="form-group">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;">Nombre Completo</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre Completo">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;">CVV</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CVV">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;"> Caduca</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Caduca">
              </div>

              <div class="form-group mb-4">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;"> Ingresa la cantidad a recargar</label>

                <input type="number" class="form-control" id="valor2" placeholder="Ingresa la cantidad a recargar">
              </div>







            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="sumar();">Recargar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal2-->




    <!-- Modal 3-->
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#004E8B; color:#fff">
            <h5 class="modal-title" id="exampleModalLabel">Transferencia bancaria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">

                <label for="exampleInputEmail1" style="margin-bottom:10px;">Clabe interbancaria para realizar el la transferencia:</label>
                <label for="exampleInputEmail1" style="font-weight:500;">058597000007563885</label>
              </div>



              <div class="form-group mb-4">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;"> Ingresa la cantidad a transferir</label>

                <input type="number2" class="form-control" id="valor3" placeholder="Ingresa la cantidad a recargar">
              </div>







            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="sumar2();">Recargar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal3-->




    <!-- modal4-->




    <!-- Modal 3-->
    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#004E8B; color:#fff">
            <h5 class="modal-title" id="exampleModalLabel">Depósito</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">

                <label for="exampleInputEmail1" style="margin-bottom:10px;">Cuenta para realizar el depósito:</label>
                <label for="exampleInputEmail1" style="font-weight:500;">058597000007563885</label>
              </div>


              <div class="form-group mb-4">
                <label for="exampleInputPassword1" style="margin-bottom:15px;margin-left:5px;"> Ingresa la cantidad a depositar</label>

                <input type="number3" class="form-control" id="valor4" placeholder="Ingresa la cantidad a recargar">
              </div>







            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="sumar3();">Recargar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal4-->




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
    <script src="mone.js"></script>

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