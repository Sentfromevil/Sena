<?php
include("conexion_be.php");
session_start();
$id_mensualidad=$_POST['id_mensualidad'];
$identificacion=$_POST['identificacion'];
$estado=$_POST['estado'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];


$query = "INSERT INTO mensualidad(identificacion,estado,fecha,monto)
              VALUES('$identificacion','$estado','$fecha', '$monto')";

//verificacion de registro
 
    echo $query;
    $ejecutar  = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
            <script>
                alert("Mensualidad registrada exitosamente");
                window.location= "../php/pagina-administrador.php"
            </script>
        
        ';
    }



?>