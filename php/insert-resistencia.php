<?php
include("conexion_be.php");
session_start();
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$definicion=$_POST['definicion'];
$resistencia=$_POST['resistencia'];
$manotaciones=$_POST['anotaciones'];

$query = "INSERT INTO rendimiento(identificacion,nombre,definicion,resistencia,anotaciones)
              VALUES('$identificacion','$nombre','$definicion', '$resistencia', '$anotaciones')";

//verificacion de registro
    echo $query;
    $ejecutar  = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
            <script>
                alert("Rendimiento registrado exitosamente");
                window.location= "../php/pagina-administrador.php"
            </script>
        
        ';
    }



?>