<?php

include("conexion_be.php");
session_start();

$identificacion=$_POST["identificacion"];
$estado=$_POST['estado'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];


$sql="UPDATE mensualidad SET  identificacion=$identificacion,estado='$estado',fecha='$fecha',monto=$monto   WHERE identificacion='$identificacion'";
$query=mysqli_query($conexion,$sql);
if($query){
	Header("Location: pagina-administrador.php");
}
   
?>