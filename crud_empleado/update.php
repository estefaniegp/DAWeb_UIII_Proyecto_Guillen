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

$sql="UPDATE empleado SET rfc='$rfc',nombre='$nombre',apellidos='$apellidos',fecha_nac='$fecha_nac',sexo='$sexo',horario='$horario',cine='$cine' WHERE rfc='$rfc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>