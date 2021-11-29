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


$sql="INSERT INTO pelicula VALUES('$num_tar','$peli','$cine','$horario','$boletos','$cvc','$fecha_exp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pelicula.php");
    
}else {
}
?>