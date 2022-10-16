<?php
include("conexion_be.php");
session_start();

$identificacionE=$_POST['identificacionE'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechan=$_POST['fechan'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$estudios=$_POST['estudios'];

$query = "INSERT INTO entrenadores(identificacionE,nombre,apellido,fechan,direccion,ciudad,departamento,telefono,edad,estudios)
              VALUES('$identificacionE','$nombre','$apellido','$fechan', '$direccion','$ciudad','$departamento','$telefono','$edad','$estudios')";

//verificacion de registro
    $verificar_identificacion = mysqli_query($conexion,"SELECT * FROM entrenadores WHERE identificacionE ='$identificacionE' ");


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