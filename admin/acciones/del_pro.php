<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from proyectos WHERE id_proyecto = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

