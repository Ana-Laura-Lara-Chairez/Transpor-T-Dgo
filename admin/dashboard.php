<?php

session_start();

if (isset($_SESSION['sesid'])) {
} else {
    echo '"<script> window.location.href = "./index.php"; </script>"';
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Dashboard - Inicio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">



    <!-- Para las cards -->
    <style>
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }
    </style>
</head>

<?php

require('./database.php');

$documentos = ("SELECT COUNT(*) AS total_documentos FROM documentos");
$usuarios = ("SELECT COUNT(*) AS total_usuarios FROM usuarios");
$pleno = ("SELECT COUNT(*) AS total_integrantes FROM integrantes");
$proyectos = ("SELECT COUNT(*) AS total_proyectos FROM proyectos");
$publicaciones = ("SELECT COUNT(*) AS total_publicaciones FROM publicaciones");

$resdoc = mysqli_query($conn, $documentos);
$resusuaios = mysqli_query($conn, $usuarios);
$respleno = mysqli_query($conn, $pleno);
$resproyecto = mysqli_query($conn, $proyectos);
$respubli = mysqli_query($conn, $publicaciones);
































?>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="assets/img/1.png" width="80px" alt="CODEDUR LOGO" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>


                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['nombre'] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Perfil</span></a></li>

                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Configuración</span></a></li>
                                <li><a href="./acciones/logout.php"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll" style="margin-top: 8%;">
                <nav>
                    <ul class="nav">
                        <li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="publicaciones.php" class=""><i class="lnr lnr-code"></i> <span>Publicaciones</span></a></li>
                        <li><a href="documentos.php" class=""><i class="lnr lnr-file-empty"></i> <span>Documentos</span></a></li>
                        <li><a href="usuarios.php" class=""><i class="lnr lnr-user"></i> <span>Usuarios</span></a></li>
                        <li><a href="pleno.php" class=""><i class="lnr lnr-users"></i> <span>Pleno del CODEDUR</span></a></li>
                        <li><a href="proyectos.php" class=""><i class="lnr lnr-construction"></i> <span>Proyectos</span></a></li>
                        <li><a href="videos.php" class=""><i class="lnr lnr-film-play"></i> <span>Videos</span></a></li>
                        <li><a href="contacto.php" class=""><i class="lnr lnr-phone-handset"></i> <span>Contacto</span></a></li>





                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel administrador - Inicio</h3>
                            <p class="panel-subtitle">Revisa  y administra rápidamente lo que se visualiza en la página principal del CODEDUR </p>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-4 col-xl-3">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <p class="m-b-0">Publicaciones hechas <span class="f-right"></span></p>
                                            <!-- <h6 class="m-b-20">Publicaciones</h6> -->
                                            <h2 class="text-right"><i class="fa fa-newspaper-o f-left"></i><span><?php

                                                                                                                    while ($publicaciones = mysqli_fetch_array($respubli)) {
                                                                                                                        echo $publicaciones['total_publicaciones'];
                                                                                                                    }


                                                                                                                    ?></span></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <p class="m-b-0">Documentos subidos<span class="f-right"></span></p>
                                            <!-- <h6 class="m-b-20">Documentos</h6> -->
                                            <h2 class="text-right"><i class="fa fa-file f-left"></i><span><?php

                                                                                                            while ($documentos = mysqli_fetch_array($resdoc)) {
                                                                                                                echo $documentos['total_documentos'];
                                                                                                            }

                                                                                                            ?></span></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card bg-c-yellow order-card">
                                        <div class="card-block">
                                            <p class="m-b-0">Integrantes del pleno CODEDUR<span class="f-right"></span></p>
                                            <!-- <h6 class="m-b-20">Pleno</h6> -->
                                            <h2 class="text-right"><i class="fa fa-user f-left"></i><span><?php

                                                                                                            while ($pleno = mysqli_fetch_array($respleno)) {
                                                                                                                echo $pleno['total_integrantes'];
                                                                                                            }

                                                                                                            ?></span></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <p class="m-b-0">Proyectos<span class="f-right"></span></p>
                                            <!-- <h6 class="m-b-20">Proyectos</h6>   -->
                                            <h2 class="text-right"><i class="fa fa-building f-left"></i><span><?php

                                                                                                                while ($proyectos = mysqli_fetch_array($resproyecto)) {
                                                                                                                    echo $proyectos['total_proyectos'];
                                                                                                                }

                                                                                                                ?></span></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <p class="m-b-0">Usuarios con acceso a admin <span class="f-right"></span></p>
                                            <!-- <h6 class="m-b-20">Publicaciones</h6> -->
                                            <h2 class="text-right"><i class="fa fa-unlock-alt -o f-left"></i><span><?php 
                                            
                                            while ($users = mysqli_fetch_array($resusuaios)) {
                                                echo $users['total_usuarios'];
                                            }


                                            ?></span></h2>
                                        </div>
                                    </div>
                                </div>




                            </div>






                        </div>
                    </div>
                </div>
                <!-- END MAIN -->
                <div class="clearfix"></div>
                <footer>
                    <div class="container-fluid">
                        <p class="copyright"><a href="https://www.themeineed.com" target="_blank">CODEDUR 2021-2023</a>. Todos los derechos reservados.</p>
                    </div>
                </footer>
            </div>
            <!-- END WRAPPER -->
            <!-- Javascript -->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
            <script src="assets/vendor/chartist/js/chartist.min.js"></script>
            <script src="assets/scripts/klorofil-common.js"></script>

</body>



</html>