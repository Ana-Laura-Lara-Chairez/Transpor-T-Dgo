<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];


$sql="UPDATE usuarios SET  nombre='$nombre',email='$email' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>