<?php



require('../database.php');

$id = $_GET['id'];
$nom = $_GET['nombre'];
$usr = $_GET['usuario'];
$puest = $_GET['puesto'];



$consulta = ("UPDATE usuarios SET  nombre = '$nom', usuario = '$usr', puesto = '$puest' WHERE id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>
