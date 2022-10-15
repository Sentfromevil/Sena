<?php 
    include("conexion_be.php");
    

$identificacion=$_GET['identificacion'];

$sql="SELECT * FROM jugadores WHERE identificacion='$$identificacion'";
$query=mysqli_query($conexion,$sql);

$mostrar=mysqli_fetch_array($query);
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
                    <form action="update.php" method="POST">
                    
                                <input type="text" class="form-control mb-3" name="identificacion" value="<?php echo $mostar['identiificacion']  ?>">     
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $mostar['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $mostrar['apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="fechan" placeholder="Fecha de nacimiento" value="<?php echo $mostrar['fechan']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $mostar['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad" value="<?php echo $mostar['ciudad']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento" value="<?php echo $mostar['departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $mostar['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $mostar['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $mostar['tipo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>