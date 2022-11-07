<?php
session_start();
include("conexion_be.php");
    $identificacion = $_GET['identificacion'];
    $sql="DELETE FROM entrenadores  WHERE identificacionE='$identificacionE'";
    $query=mysqli_query($conexion,$sql);
  
    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header('Location: pagina-administrador.php');
  