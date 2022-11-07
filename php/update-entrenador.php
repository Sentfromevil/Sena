<?php

include("conexion_be.php");
session_start();

$identificacion=$_POST["identificacion"];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechan=$_POST['fechan'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$telefono=$_POST['telefono'];
$edad=$_POST["edad"];
$estudios=$_POST['estudios'];

$sql="UPDATE entrenador SET  identificacion=$identificacion,nombre='$nombre',apellido='$apellido',fechan='$fechan',direccion='$direccion',ciudad='$ciudad',departamento='$departamento',telefono=$telefono ,edad=$edad,estudios='$estudios'    WHERE identificacion='$identificacion'";
$query=mysqli_query($conexion,$sql);
if($query){
	Header("Location: pagina-administrador.php");
}
   
?>