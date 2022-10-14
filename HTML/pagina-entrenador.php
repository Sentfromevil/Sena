<?php  
 include '../php/conexion_be.php';
 session_start();

 if (isset($_SESSION['usuario'])) {
   if ($_SESSION['cargo'] == 1 ) {
     header("Location: pagina-administrador.php");
   }
 } else {
   header("Location: index.php");
 }

?>
 

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
    <title>Entrenador</title>
</head>
<body>
 <Nav>
 <a href="../php/cerrar_sesion.php">Salir</a>
    <h1>Escuela Futbol Club</h1>
 </Nav>   
 <hr>
 <div class="photo">
    <img src="/Images/Ep10Roberta205.webp" width="83px" height="98px" alt="">
 </div>
<b><P>Entrenador</P></b>
<p>Rosarita Cisneros</p>
<div class="tab">
   <button class="tablinks" onclick="openCity(event, 'Rendimiento-Deportista')">Rendimiento del Deportista</button>
   </div> 
 
 <div id="Rendimiento-Deportista" class="tabcontent">
   <div class="container mt-3">
       <table class="table">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Definicion</th>
            <th>Resistencia</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>eren jaeger</td>
            <td>78%</td>
            <td>73%</td>
            
          </tr>
          <tr>
            <td>Levi Akerman</td>
            <td>100%</td>
            <td>80%</td>
           
          </tr>
          <tr>
            <td>Makoto Furukawa</td>
            <td>100%</td>
            <td>100%</td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <button style='font-size:24px'>Create <i class='fas fa-edit'></i></button>
 </div>
 
 
 
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

 <footer></footer>
 
</body>
</html>