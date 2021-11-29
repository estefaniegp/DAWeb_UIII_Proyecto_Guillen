<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM dulceria WHERE num_tar='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: dulceria.php");
    }
?>
