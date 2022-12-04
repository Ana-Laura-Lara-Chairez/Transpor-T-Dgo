<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from publicaciones WHERE publi_id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

