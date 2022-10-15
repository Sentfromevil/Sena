<?php
    session_start();


    if(isset($_SESSION['cargo'])){
        switch($_SESSION['cargo']){
            case 1:
            header('location:php/pagina-administrador.php');
            break;
            case 2:
            header('location:php/pagina-entrenador.php');
            break; 
             case 3:
            header('location:php/pagina-jugador.php');
            break;
        }
    }



?>
<!DOCTYPE html>s
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="CSS/login.css">
    <title>login</title>
</head>
<body>
    <main>
        <div class="contenedor-todo">
            <div class="caja-trasera">
               <div class="caja-trasera-login">
                  <h3>¿Ya estas registrado?</h3>
                  <p>inicia sesión para acceder a la plataforma </p>
                  <button id="btn-iniciar-sesion">Iniciar sesión</button>
               </div>
                <div class="caja-trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>inicia sesión para acceder a la plataforma </p>
                    <button id="btn-registrearse">Regístrarse</button>
                </div>
            </div>
            <div class="contenedor-login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" name="correo" placeholder="Correo" >
                    <input type="password" name="contrasena" placeholder="Contraseña" >
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_db.php" method="POST" class="formulario-register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre completo" >
                    <input type="text" name="correo" placeholder="Correo" >
                    <input type="text" name="usuario" placeholder="Usuario" >
                    <input type="password" name="contrasena" placeholder="Contraseña" >
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="JS/script-login.js"></script>
</body>
</html>