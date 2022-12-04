<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from integrantes WHERE id_integrantes = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

