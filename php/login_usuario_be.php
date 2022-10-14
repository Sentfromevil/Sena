<?php
   include_once 'conexion_be.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $correo = $_POST['correo'];
      $contrasena = $_POST['contrasena'];

      $validar_login = mysqli_query($conexion, "SELECT usuario, id_cargo as cargo FROM usuarios WHERE correo = '" . $correo ."' and contrasena = '" . $contrasena ."'");

      $row = mysqli_fetch_array($validar_login,MYSQLI_ASSOC); //Creamos un array donde almacenamos los datos del usuario
      $count = mysqli_num_rows($validar_login); //COntamos cuantos resultados se obtuvo de la query
      if($count == 1) { //Verificamos que se obtuvo coincidencia con el usuario solicitado
         $_SESSION['usuario'] = $row['usuario']; //Creamos session usuario
         $_SESSION['cargo'] = $row['cargo']; //Creamos session del grado
               
         header("Location: pagina-administrador.php");
      } else {
         echo '<script>
                  alert("Usuario no existe");
                  window.location="cerrar_sesion.php";
               </script>';
      }
   }

?>