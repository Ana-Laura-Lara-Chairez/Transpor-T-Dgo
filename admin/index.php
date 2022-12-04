<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transpor-T - Ingresar</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="assets/img/favicon.png" rel="icon">

</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/img/login2.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <center> <img src="assets/img/favicon.png" alt="logo" class="logo"></center>
                            </div>
                            <p class="login-card-description">Ingresa a tu cuenta</p>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Correo electrónico</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <center>
                                    <button name="login" id="login" class="boton" type="submit">Iniciar Sesión</button>
                                </center>
                            </form>
                            <center>
                                <a href="registro.php" class="forgot-password-link">¿No tienes una cuenta? Regístrate</a>
                                <br>
                                <a href="" class="forgot-password-link">¿Olvidaste tu contraseña?</a>
                            </center>


                        </div>
                    </div>
                </div>
            </div>



            <?php

            require('./database.php');

            if (isset($_POST['login'])) {

                $email = $_POST['email'];
                $contrasenia = $_POST['password'];



                $consulta = ("SELECT id,password,nombre FROM usuarios WHERE email = '$email'");
                $resultado =  mysqli_fetch_assoc(mysqli_query($conn, $consulta));


                if ($resultado) {

                    $cont = $resultado['password'];

                    if ($contrasenia == $cont) {

                        session_start();
                        $_SESSION['sesid'] = $resultado['nombre'] . "cod" . 2040;
                        $_SESSION['nombre'] = $resultado['nombre'];
                        $_SESSION['usr_id'] = $resultado['id'];
                        $_SESSION['mensaje'] = 0;


                        echo "
                        <script type='text/javascript'>
                        
                        Swal.fire(
                            'Datos correctos',
                            'Sesion iniciada correctamente',
                            'success'
                        ),
                        setInterval(codingCourse, 2000);
                        function codingCourse() {
                            window.location.assign('dashboard.php')
                          }

                        
                       
                        </script>
                        
                        ";
                        
                        
                        
                    } else {
                        echo "
                        <script type='text/javascript'>
                        
                        Swal.fire(
                            'Error',
                            'Las credenciales que se han introducido son erróneas, por favor verifique',
                            'warning'
                          )
                        </script>
                        ";
                    }
                } else {
                    echo "
                    <script type='text/javascript'>
                    
                    Swal.fire(
                        'Error',
                        'Las credenciales que se han introducido son erróneas, por favor verifique',
                        'warning'
                      )
                    </script>
                    ";
                }
            }


            ?>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>