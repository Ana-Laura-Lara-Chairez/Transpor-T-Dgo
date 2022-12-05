<?php

include("conexion.php");
$con=conectar();

$id_ruta=$_POST['id_ruta'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];


$sql="UPDATE rutas SET  nom_ruta='$nombre',dec_ruta='$descripcion' WHERE id_ruta='$id_ruta'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutas.php");
    }
?>