<?php



require('../database.php');

$id = $_GET['id'];
$nom = $_GET['nombre'];
$area = $_GET['area'];
$puesto = $_GET['puesto'];



$consulta = ("UPDATE integrantes SET  nombre = '$nom', area = '$area', puesto = '$puesto' WHERE id_integrantes = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>
