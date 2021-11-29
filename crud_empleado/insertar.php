<?php
include("conexion.php");
$con=conectar();

$rfc=$_POST['rfc'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_nac=$_POST['fecha_nac'];
$sexo=$_POST['sexo'];
$horario=$_POST['horario'];
$cine=$_POST['cine'];


$sql="INSERT INTO empleado VALUES('$rfc','$nombre','$apellidos','$fecha_nac','$sexo','$horario','$cine')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>