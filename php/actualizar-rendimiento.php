<?php 
 session_start();
    include("conexion_be.php");
?>

<!DOCTYPE html>
<html lang="es">
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
                    <form action="update-rendimiento.php" method="POST">
                    
                                <input type="text" class="form-control mb-3" name="identificacion" placeholder="Identificacion">     
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                <input type="text" class="form-control mb-3" name="definicion" placeholder="Definicion">
                                <input type="text" class="form-control mb-3" name="resistencia" placeholder="Resistencia">
                                <input type="text" class="form-control mb-3" name="anotaciones" placeholder="Anotaciones">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>