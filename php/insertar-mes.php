<?php
include("conexion_be.php");
session_start();
$identificacion=$_POST['identificacion'];
$estado=$_POST['estado'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];


$query = "INSERT INTO mensualidad(identificacion,estado,fecha,monto)
              VALUES('$identificacion','$estado','$fecha', '$monto')";

//verificacion de registro
$verificar_mensualidad = mysqli_query($conexion,"SELECT * FROM mensualidad WHERE identificacion ='$identificacion' ");
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