<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from videos WHERE id_video = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>
