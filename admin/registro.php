<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transpor-T - Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="assets/img/favicon.png" rel="icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/img/registro.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <center> <img src="assets/img/favicon.png" alt="logo" class="logo"></center>
                            </div>
                            <p class="login-card-description">Crea una cuenta</p>
                            <form method="POST" action="registro.php">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Correo electrónico</label>
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="sr-only">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Nombre Completo">
                                </div>
                                <div class="form-group">
                                    <label for="user" class="sr-only">Usuario</label>
                                    <input type="text" name="user" id="user" class="form-control" required placeholder="Usuario">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="Contraseña">
                                </div>
                                <center>
                                    <button name="registrar" id="registrar" class="boton" type="submit">Registrarse</button>
                                </center>
                            </form>

                            <div id="todo">
                            <?php
                           
                            
           $servername = "localhost";
           $database = "transpor-t";
           $username = "root";
           $password = "";
           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $database);
           // Check connection
           if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
           }
           

            

            if(isset($_POST['name'])){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $nick = $_POST['user'];

                $password = $_POST['password'];
                
                $sql = "INSERT INTO usuarios(email,nombre,usuario,password,puesto) VALUES ('$email','$name','$nick','$password','usuario')";
                                    
                
                if($conn->query($sql) === true){
                    
                    
                    echo "
                        <script type='text/javascript'>
                        
                        Swal.fire(
                        'Usuario creado correctamente',
                        'Inicia sesión para continuar',
                        'success'
                      ),
                        setInterval(codingCourse, 2000);
                        function codingCourse() {
                            window.location.assign('index.php')
                          }

                        
                       
                        </script>
                        
                        ";
                    
                    
                    
                    

                }else{
                    die("Error al insertar datos: " . $conn->error);
                }
            }

        ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



         

         
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>