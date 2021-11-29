<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM pelicula WHERE num_tar='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pelicula.php");
    }
?>
