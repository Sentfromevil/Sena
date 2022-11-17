<?php 

    include 'conexion_be.php';

    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $contrasena= $_POST['contrasena'];
    
    $query = "INSERT INTO usuarios(nombre,correo,usuario,contrasena)
              VALUES('$nombre','$correo','$usuario','$contrasena')";
//verificacion de registro
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
          echo'
            <script>    
                alert("Este Correo ya esta registrado");
                window.location = "login.php"
            </script>

          ';
          exit();
    }

    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
          echo'
            <script>    
                alert("Este usuario ya esta registrado");
                window.location = "login.php"
            </script>

          ';
          exit();
    }

    $ejecutar  = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
            <script>
                alert("Usuario registrado exitosamentes");
                window.location= "login.php"
            </script>
        
        ';
    }else{
        echo'
        <script>
            alert("Intentalo nuevamente");
            window.location= "login.php"
        </script>
    
    ';
    }



?>