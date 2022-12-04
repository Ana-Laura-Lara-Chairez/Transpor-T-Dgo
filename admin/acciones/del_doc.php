<?php



require('../database.php');

$id = intval($_GET['id']);




$consulta = ("DELETE from documentos WHERE doc_id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

