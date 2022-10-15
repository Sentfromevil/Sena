<?php
session_start();
include("conexion_be.php");

$identificaion=$_GET['identificacion'];

$sql="DELETE FROM jugadores  WHERE identificacion='$identificacion'";


    
?>
