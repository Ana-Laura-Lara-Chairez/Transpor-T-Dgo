<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from usuarios WHERE id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

