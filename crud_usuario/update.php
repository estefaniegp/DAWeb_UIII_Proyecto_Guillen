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

$sql="UPDATE usuario SET user='$user',nombre='$nombre',apellidos='$apellidos',sexo='$sexo',fecha_nac='$fecha_nac',email='$email',contra='$contra' WHERE user='$user'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>