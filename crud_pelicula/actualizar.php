<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM pelicula WHERE num_tar='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="num_tar" value="<?php echo $row['num_tar']  ?>">
                                <input type="text" class="form-control mb-3" name="peli" placeholder="Película a ver" value="<?php echo $row['peli']  ?>">
                                <input type="text" class="form-control mb-3" name="cine" placeholder="Cine a ir" value="<?php echo $row['cine']  ?>">
                                <input type="text" class="form-control mb-3" name="horario" placeholder="Horario a ir" value="<?php echo $row['horario']  ?>">
                                <input type="text" class="form-control mb-3" name="boletos" placeholder="Boletos a comprar" value="<?php echo $row['boletos']  ?>">
                                <input type="text" class="form-control mb-3" name="cvc" placeholder="CVC" value="<?php echo $row['cvc']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_exp" placeholder="Fecha de expiración" value="<?php echo $row['fecha_exp']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>