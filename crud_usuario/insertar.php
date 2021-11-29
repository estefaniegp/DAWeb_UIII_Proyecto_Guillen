<?php
include("conexion.php");
$con=conectar();

$user=$_POST['user'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$fecha_nac=$_POST['fecha_nac'];
$email=$_POST['email'];
$contra=$_POST['contra'];
$contra_cifrada=password_hash($contra,PASSWORD_DEFAULT);

$sql="INSERT INTO usuario VALUES('$user','$nombre','$apellidos','$sexo','$fecha_nac','$email','$contra_cifrada')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>