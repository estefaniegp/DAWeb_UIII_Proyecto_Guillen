<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM dulceria";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cinépolis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Dulcería</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="num_tar" placeholder="Número de tarjeta">
                                    <input type="text" class="form-control mb-3" name="golosina" placeholder="Golosina a comprar">
                                    <input type="text" class="form-control mb-3" name="bebida" placeholder="Bebida a comprar">
                                    <input type="text" class="form-control mb-3" name="comida" placeholder="Comida a comprar">
                                    <input type="text" class="form-control mb-3" name="cine" placeholder="Cine a ir">
                                    <input type="text" class="form-control mb-3" name="horario" placeholder="Horario (HH:MM)">
                                    <input type="text" class="form-control mb-3" name="cvc" placeholder="CVC">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_guillen_cine/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Número de tarjeta</th>                                        
                                        <th>Golosina</th>
                                        <th>Bebida</th>
                                        <th>Comida</th>
                                        <th>Cine</th>
                                        <th>Horario</th>
                                        <th>CVC</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['num_tar']?></th>
                                                <th><?php  echo $row['golosina']?></th>
                                                <th><?php  echo $row['bebida']?></th>
                                                <th><?php  echo $row['comida']?></th>
                                                <th><?php  echo $row['cine']?></th>
                                                <th><?php  echo $row['horario']?></th>
                                                <th><?php  echo $row['cvc']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['num_tar'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['num_tar'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>