<?php



require('../database.php');

$id = $_GET['id'];
$tit = $_GET['nombre'];
$desc = $_GET['dec'];



$consulta = ("UPDATE proyectos SET  nom_proyecto = '$tit', dec_proyecto = '$desc' WHERE id_proyecto = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>
