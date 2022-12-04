<?php



require('../database.php');
$id = $_GET['id'];
$tit = $_GET['titulo'];
$sub = $_GET['subtitulo'];
$desc = $_GET['descripcion'];



$consulta = ("UPDATE publicaciones SET  titulo = '$tit', subtitulo = '$sub', descripcion = '$desc' WHERE publi_id = '$id' ");
$resultado = mysqli_query($conn,$consulta);



?>
