<?php



require('../database.php');

$id = $_GET['id'];
$tit = $_GET['titulo'];
$des = $_GET['desc'];


$consulta = ("UPDATE documentos SET titulo = '$tit', descripcion = '$des' WHERE doc_id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>

