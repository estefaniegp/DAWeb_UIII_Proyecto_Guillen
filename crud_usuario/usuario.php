<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM usuario";
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
                            <h1>Registro de usuarios</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="user" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                    <input type="text" class="form-control mb-3" name="fecha_nac" placeholder="Fecha de nacimiento (AAAA-MM-DD)">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="contra" placeholder="Contraseña">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_guillen_cine/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Usuario</th>                                        
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Sexo</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Email</th>
                                        <th>Contraseña</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['user']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['fecha_nac']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo $row['contra']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['user'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['user'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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