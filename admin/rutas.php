<?php

session_start();

if (isset($_SESSION['sesid'])) {
} else {
    echo '<script> window.location.href = "./index.php"; </script>"';
}





?>





<!doctype html>
<html lang="en">

<head>
    <title>Administrar Rutas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="assets/img/logo.png" width="80px" alt="CODEDUR LOGO" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>


                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['nombre']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="./acciones/logout.php"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
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
                    <li><a href="dashboard.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="usuarios.php"><i class="lnr lnr-user"></i> <span>Usuarios</span></a></li>
                        <li><a href="rutas.php" class="active"><i class="lnr lnr-bus"></i> <span>Rutas</span></a></li>

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
                            <h3 class="panel-title">Administrar Rutas</h3>
                        </div>
                        <div class="panel-body">

                            <div class="fluid-container justify-content-center mb-5">
                                <form id="contact-form" name="contact-form" role="form" enctype="multipart/form-data" method="POST">
                                    <div class="controls">
                                        
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group"> <label for="nom_user">Nombre de la ruta</label> <input id="nom_user" type="text" name="nom_user" class="form-control" placeholder="Nombre de la ruta" required="required" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="form-group"> <label for="dec_ruta">Descripcion ruta </label>
                                                <input id="dec_ruta" type="text" name="dec_ruta" class="form-control" placeholder="Descripcion de la ruta">
                                            </div>
                                        </div>



                                      





                                       




                                        <div class="col-lg-12"> <button type="submit" class="btn btn-primary btn-send pt-2 btn-block " id="subir_ruta" name="subir_ruta" value="Registrar una nueva ruta">Registrar Ruta</button>
                                        </div>
                                    </div>
                                </form>
                            </div>




                        </div>

                    
                        <div class="panel-body">

                            <?php
                            require('./database.php');
                            $query = mysqli_query($conn, "SELECT * FROM rutas");
                            $row=mysqli_fetch_array($query);


                           

                            ?>
                            <div class="col-md-12">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                       
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nom_ruta']?></th>
                                                <th><?php  echo $row['dec_ruta']?></th>
                                               
                                                <th><a href="actualizar.php?id=<?php echo $row['id_ruta'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_ruta'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                            
                            
                            
                            

                        </div>
                            
                
                
                
               

                <!-- END MAIN -->
                <div class="clearfix"></div>
                <footer>
                    <div class="container-fluid">
                        <p class="copyright"><a href="https://www.themeineed.com" target="_blank">Transpor-t 2021-2023</a>. Todos los derechos reservados.</p>
                    </div>
                </footer>
            </div>
        </div>


        <?php



        if (isset($_POST['subir_ruta'])) {


            $nombre = $_POST['nom_user'];
            $descripcion = $_POST['dec_ruta'];
           

            $query = "SELECT * FROM rutas where nom_ruta = 'nombre'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $row = mysqli_num_rows($result);
                if ($row) {

                    mysqli_free_result($result);

                    echo "
                <script type='text/javascript'>
                
                Swal.fire(
                    'Error al registrar la ruta',
                    'Ya existe una ruta registrada con ese nombre',
                    'warning'
                  )
                </script>
                
                ";
                } else {

                    $hash = ($contra);
                    $consulta = "INSERT INTO rutas (id_ruta,nom_ruta,dec_ruta,fot_ruta) VALUES (NULL, '$nombre', '$descripcion', '')";
                    mysqli_query($conn, $consulta);
                    mysqli_free_result($result);

                    echo "
            <script type='text/javascript'>
            
            Swal.fire(
                'Ruta registrada',
                'La ruta ha sido registrada correctamente',
                'success'
              )
               setInterval(codingCourse, 2000);
                        function codingCourse() {
                            window.location.assign('rutas.php')
                          }
            </script>
           
            ";
                }
            }
        }

        ?>


        <script>
            function modificarUsuario(id) {

                Swal.fire({
                    title: 'Modificar ruta',
                    html: `
            <input type="text" id="nombre" class="swal2-input" placeholder="Nombre de la ruta">
            
            <input type="text" id="desc" class="swal2-input" placeholder="Descripcion de la ruta">`,
                    confirmButtonText: 'Modificar',
                    focusConfirm: false,
                    preConfirm: () => {
                        let usr_id = id;
                        let nombre = Swal.getPopup().querySelector('#nombre').value
                       
                        let descripcion = Swal.getPopup().querySelector('#desc').value

                        if (!nombre || !usuario || !puesto) {
                            Swal.showValidationMessage(`Porfavor, rellene todos los campos.`)
                        }
                        return {
                            nom: nombre,
                            usr: usuario,
                            pues: puesto,
                        }
                    }
                }).then((result) => {
                    $.ajax({
                        url: "./acciones/act_usr.php/?id=" + id + "&nombre=" + result.value.nom + "&usuario=" + result.value.usr + "&puesto=" + result.value.pues,
                        type: "POST",
                    });

                    Swal.fire({
                        title: 'Usuario Actualizado',
                        text: 'El usuario ha sido actualizado correctamente',
                        icon: 'success',

                    })

                    $(document).ready(function() {
                        setTimeout(function() {
                            location.reload(true);
                        }, 5000);
                    });
                })

            }



            function borrarUsuario(id) {

                let del_id = id;


                const borrarUsuarios = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                borrarUsuarios.fire({
                    title: 'Eliminar Usuario',
                    text: "¿Estas seguro de que quieres eliminar este usuario? Esta acción no se puede revertir.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: "./acciones/del_ruta.php/?id=" + del_id,
                            type: "POST",
                        });


                        borrarUsuarios.fire(
                            'Operacion Completada',
                            'El usuario has sido borrado correctamente',
                            'success'
                        )

                        $(document).ready(function() {
                            setTimeout(function() {
                                location.reload(true);
                            }, 5000);
                        });

                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        borrarUsuarios.fire(
                            'Operación Cancelada',
                            'La operación para borrar el usuario ha sido cancelada',
                            'error'
                        )



                        $(document).ready(function() {
                            setTimeout(function() {
                                location.reload(true);
                            }, 5000);
                        });
                    }
                })


            }
        </script>







        <script>
            $(document).ready(function() {
                $('#d_datos').DataTable({
                    "language": {
                        url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                    }


                });
            });
        </script>



        <script>
            $('#password, #rep_password').on('keyup', function() {
                if ($('#password').val() == $('#rep_password').val()) {
                    $('#advertencia').html('Las contraseñas coinciden').css('color', 'green');
                } else {

                    $('#advertencia').html('Las contraseñas no coinciden').css('color', 'red');
                }
            });
        </script>


        <!-- END WRAPPER -->
        <!-- Javascript -->
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/vendor/chartist/js/chartist.min.js"></script>
        <script src="assets/scripts/klorofil-common.js"></script>

</body>

</html>