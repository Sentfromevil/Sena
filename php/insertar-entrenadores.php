<?php
include("conexion_be.php");
session_start();

$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechan=$_POST['fechan'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$tipo=$_POST['estudios'];

$query = "INSERT INTO entrenadores(identificacion,nombre,apellido,fechan,direccion,ciudad,departamento,telefono,edad,estudios)
              VALUES('$identificacion','$nombre','$apellido','$fechan', '$direccion','$ciudad','$departamento','$telefono','$edad','$estudios')";

//verificacion de registro
    $verificar_identificacion = mysqli_query($conexion,"SELECT * FROM entrenadores WHERE identificacion='$identificacion' ");


    echo $query;
    $ejecutar  = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
            <script>
                alert("Entrenador registrado exitosamentes");
                window.location= "../php/pagina-administrador.php"
            </script>
        
        ';
    }
    
 



?>