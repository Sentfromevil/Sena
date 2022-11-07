<?php

include("conexion_be.php");
session_start();

$identificacion=$_POST["identificacion"];
$nombre=$_POST['nombre'];
$definicion=$_POST['definicion'];
$resistencia=$_POST['resistencia'];
$anotaciones=$_POST['anotaciones'];


$sql="UPDATE rendimiento SET  identificacion=$identificacion,nombre='$nombre',definicion='$definicion',resistencia='$resistencia',anotaciones='$anotaciones'   WHERE identificacion='$identificacion'";
$query=mysqli_query($conexion,$sql);
if($query){
	Header("Location: pagina-administrador.php");
}
   
?>