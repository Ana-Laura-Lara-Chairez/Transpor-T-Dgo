<?php
function conectar(){
    $host="localhost";
    $user="u646610080_transport";
    $pass="Transportate1";
    $bd="u646610080_transport";
    
     

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
