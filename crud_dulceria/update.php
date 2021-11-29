<?php

include("conexion.php");
$con=conectar();

$num_tar=$_POST['num_tar'];
$golosina=$_POST['golosina'];
$bebida=$_POST['bebida'];
$comida=$_POST['comida'];
$cine=$_POST['cine'];
$horario=$_POST['horario'];
$cvc=$_POST['cvc'];

$sql="UPDATE dulceria SET num_tar='$num_tar',golosina='$golosina',bebida='$bebida',comida='$comida',cine='$cine',horario='$horario',cvc='$cvc' WHERE num_tar='$num_tar'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: dulceria.php");
    }
?>