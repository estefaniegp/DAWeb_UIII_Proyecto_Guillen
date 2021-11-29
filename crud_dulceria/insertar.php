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


$sql="INSERT INTO dulceria VALUES('$num_tar','$golosina','$bebida','$comida','$cine','$horario','$cvc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: dulceria.php");
    
}else {
}
?>