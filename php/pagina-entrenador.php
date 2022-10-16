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
    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="83px" height="98px" alt="">
 </div>
<b><P>Entrenador</P></b>
<p>Rosarita Cisneros</p>
<div class="tab">
   <button class="tablinks" onclick="openCity(event, 'Rendimiento-Deportista')">Rendimiento del Deportista</button>
   </div> 
 
 <div id="Rendimiento-Deportista" class="tabcontent">

 <div class="formulario-rendimiento">
    <h2>ingrese datos</h2>
    <form action="insert-resistencia.php" method="POST">
       <input type="text" placeholder="Identificacion" name="identificacion">
      <input type="text" placeholder="Nombre" name="nombre">
      <input type="text" placeholder="Definicion"  name="definicion">
      <input type="text" placeholder="resistencia" name="resistencia">
      <button class=".caja-trasera button">Enviar</button>
    </form>
   
  </div>
   <div class="container mt-3">
       <table class="table">
        <thead class="table-dark">
          <tr>
          <th>Identificacion</th>
            <th>Nombre</th>
            <th>Definicion</th>
            <th>Resistencia</th>
          </tr>
        </thead>
        <tbody>
        <tr>
         <?php 
		$sql="SELECT * from rendimiento";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
          
           <td><?php  echo $mostrar['identificacion']?></td>
           <td><?php  echo $mostrar['nombre']?></td>
           <td><?php  echo $mostrar['definicion']?></td>
           <td><?php  echo $mostrar['resistencia']?></td>
           <td><?php  echo $mostrar['anotaciones']?></td>
           
         </tr>
         <?php 
                 } ?>
          
        </tbody>
      </table>
    </div>
    
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