<?php

include("conexion.php");
$con=conectar();

$num_tar=$_POST['num_tar'];
$peli=$_POST['peli'];
$cine=$_POST['cine'];
$horario=$_POST['horario'];
$boletos=$_POST['boletos'];
$cvc=$_POST['cvc'];
$fecha_exp=$_POST['fecha_exp'];

$sql="UPDATE pelicula SET num_tar='$num_tar',peli='$peli',cine='$cine',horario='$horario',boletos='$boletos',cvc='$cvc',fecha_exp='$fecha_exp' WHERE num_tar='$num_tar'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pelicula.php");
    }
?>