<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Correo</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
</body>
</html>

<?php  

$destinatario = 'transportdgodgo.mx@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde la página de Transpor-T Dgo";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script type='text/javascript'>
                        
Swal.fire(
    'Gracias!',
    'Correo enviado exitosamente',
    'success'
),
setInterval(codingCourse, 2000);
function codingCourse() {
    window.location.assign('index.php')
  }



</script>";
echo "<script> setTimeout(\"location.href='index.php'\",1000) </script>";

?>
















 
?>