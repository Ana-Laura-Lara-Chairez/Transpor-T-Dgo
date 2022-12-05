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

$cuerpo = '<!DOCTYPE html>
<html lang="es">
<head>
<title>Correo Electrónico - Transpor-T</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    font-weight: 300;
    color: #888;
    background-color:rgba(230, 225, 225, 0.5);
    line-height: 30px;
    text-align: center;
}
.contenedor{
    width: 80%;
    min-height:auto;
    text-align: center;
    margin: 0 auto;
    background: #ffffff;
    border-top: 3px solid #088A85;
}
.btnlink{
    padding:15px 30px;
    text-align:center;
    background-color:#088A85;
    color: crimson !important;
    font-weight: 600;
    text-decoration: blue;
}
.btnlink:hover{
    color: #fff !important;
}
.imgBanner{
    width:100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding:0px;
}
.misection{
    color: #34495e;
    text-align: center;
    font-family: sans-serif;
    margin-left: 320px;
}
.mt-5{
    margin-top:50px;
}
.mb-5{
    margin-bottom:50px;
}
</style>

</head>
<body>
<div class="contenedor">

<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">

<center>
    <div style="background-color: #DBDBFE;">
    <img class="logotipo" src="https://rodriguezneftali.utdgrupoti.com/Transpor-T/logo.png" style="width: 50%;" alt=""> </center>

    </div>
<tr>
    <td style="background-color: #ffffff;">
        <div class="misection">
            <h2 style="color: #004E8B;">Nuevo mensaje de contacto</h2>
            <p style="font-size: 18px; margin-top:20px;"> '. $mensaje .' </p>
            <br>

            <p style="font-size: 16px; margin-top:40px;">Atentamente: '. $nombre .' </p>
            <p style="font-size: 16px; margin-top:10px;">Dirección de correo: '. $email .'</p>

        </div>
    </td>
</tr>
</table>
  </div>
</body>
</html>';

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$asuntocorreo = $asunto . " - Enviado desde la página de Transpor-T Dgo";
$mensajeCompleto = $mensaje . "\n\n\n\nAtentamente: " . $nombre . "\nDirección de correo: " . $email;

mail($destinatario, $asuntocorreo, $cuerpo, $headers);

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



