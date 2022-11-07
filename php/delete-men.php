<?php
session_start();
include("conexion_be.php");
    $identificacion = $_GET['identificacion'];
    $sql="DELETE FROM mensualidad  WHERE identificacion='$identificacion'";
    $query=mysqli_query($conexion,$sql);
  
    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header('Location: pagina-administrador.php');
  