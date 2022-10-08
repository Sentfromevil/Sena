<?php 
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo'
      <script>
          alert("Por favor iniciar sesion")
          window.location = "../index.php"
      </script>

    ';
    session_destroy();
    die();

  }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/style-2.css">
    <title>Administrador</title>
</head>
<body>
 <Nav>
    <a href="../php/cerrar_sesion.php">Salir</a>
    <h1>Escuela Futbol Club</h1>
 </Nav>   
 <hr>
 <div class="photo">
    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="83px" height="98px" alt="">
 </div>
<b><P>Administrador</P></b>
<p>Juan Cardona</p>
<div class="tab">
   <button class="tablinks" onclick="openCity(event, 'Jugadores')">Jugadores</button>
   <button class="tablinks" onclick="openCity(event, 'Mensualidad')">Mensualidad</button>
   <button class="tablinks" onclick="openCity(event, 'Entrenadores')">Entrenadores</button>

 </div> 
 
 <div id="Jugadores" class="tabcontent">
   <div class="container mt-3">
       <table class="table">
        <thead class="table-dark">
          <tr>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Departamento</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>10253658594</td>
            <td>David</td>
            <td>Rivera Zapata</td>
            <td>07/02/2001</td>
            <td>Av.57#35-15</td>
            <td>Bello</td>
            <td>Antioquia</td>
            <td>2094018</td>
            <td>18</td>
            <td>Delantero</td>
          </tr>
          <tr>
            <td>1017223985</td>
            <td>Andres</td>
            <td>Eduardo Cardona</td>
            <td>07/08/2001</td>
            <td>Av.53#15-45</td>
            <td>Bello</td>
            <td>Antioquia</td>
            <td>3135976568</td>
            <td>18</td>
            <td>Volante</td>
          </tr>
          <tr>
            <td>10235685485</td>
            <td>Estaban</td>
            <td>Calle Urrao</td>
            <td>01/22/2002</td>
            <td>Av.57#35-18</td>
            <td>Bello</td>
            <td>Antioquia</td>
            <td>3158495684</td>
            <td>18</td>
            <td>Volante</td>
          </tr>
        </tbody>
      </table>
    </div>
    <button style='font-size:24px'>Create <i class='fas fa-edit'></i></button>
 </div>
 
 <div id="Mensualidad" class="tabcontent">
   <div class="container mt-3">
      <table class="table">
       <thead class="table-dark">
         <tr>
           <th>ID</th>
           <th>Estado</th>
           <th>Fecha</th>
           <th>Monto</th>
           <th>Factura</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>10253658594</td>
           <td>Pago</td>
           <td>07/08/2022</td>
           <td>50.000</td>
           <td>01</td>
         </tr>
         <tr>
            <td>1017223985</td>
           <td>Pago</td>
           <td>07/08/2022</td>
           <td>50.000</td>
           <td>03</td>
         </tr>
         <tr>
            <td>10235685485</td>
            <td>Inactivo</td>
            <td>07/06/2022</td>
            <td>50.000</td>
            <td>15</td>
         </tr>
       </tbody>
     </table>
   </div>
</div>
 </div>
 
 <div id="Entrenadores" class="tabcontent">
   <div class="container mt-3">
      <table class="table">
       <thead class="table-dark">
         <tr>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Fecha de Nacimiento</th>
           <th>Direccion</th>
           <th>Ciudad</th>
           <th>Departamento</th>
           <th>Telefono</th>
           <th>Edad</th>
           <th>Estudios</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>Adrian </td>
           <td>Fahrenheit  tepes</td>
           <td>07/02/1994</td>
           <td>Av.57#35-15</td>
           <td>Bello</td>
           <td>Antioquia</td>
           <td>2094018</td>
           <td>27</td>
           <td>Deportes</td>
         </tr>
         <tr>
           <td>Rebecca </td>
           <td>Lee</td>
           <td>07/08/2001</td>
           <td>Av.53#15-45</td>
           <td>Bello</td>
           <td>Antioquia</td>
           <td>3135976568</td>
           <td>18</td>
           <td>Deportes</td>
         </tr>
         
       </tbody>
     </table>
   </div>
</div>
 </div>
 



 <footer> </footer>
 <script>
 function openCity(evt, cityName) {
   var i, tabcontent, tablinks;
   tabcontent = document.getElementsByClassName("tabcontent");
   for (i = 0; i < tabcontent.length; i++) {
     tabcontent[i].style.display = "none";
   }
   tablinks = document.getElementsByClassName("tablinks");
   for (i = 0; i < tablinks.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" active", "");
   }
   document.getElementById(cityName).style.display = "block";
   evt.currentTarget.className += " active";
 }
 </script>

 
 
</body>
</html>
