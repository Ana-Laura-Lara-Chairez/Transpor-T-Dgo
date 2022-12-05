<?php

include("conexion.php");
$con=conectar();

$id_ruta=$_GET['id'];

$sql="DELETE FROM rutas  WHERE id_ruta='$id_ruta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutas.php");
    }
?>
