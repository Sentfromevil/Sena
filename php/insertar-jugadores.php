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
$tipo=$_POST['tipo'];

$query = "INSERT INTO jugadores(identificacion,nombre,apellido,fechan,direccion,ciudad,departamento,telefono,edad,tipo)
              VALUES('$identificacion','$nombre','$apellido','$fechan', '$direccion','$ciudad','$departamento','$telefono','$edad','$tipo')";

//verificacion de registro
    $verificar_identificacion = mysqli_query($conexion,"SELECT * FROM jugadores WHERE identificacion='$identificacion' ");

    echo $query;
    $ejecutar  = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
            <script>
                alert("Jugador registrado exitosamentes");
                window.location= "../php/pagina-administrador.php"
            </script>
        
        ';
    }else{
        echo'
        <script>
            alert("Intentalo nuevamente");
            window.location= "../php/pagina-administrador.php"
        </script>
    
    ';
    }



?>