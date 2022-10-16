<?php  
 include '../php/conexion_be.php';

  session_start();

	if (isset($_SESSION['usuario'])) {
		if ($_SESSION['cargo'] == 2 ) {
			header("Location: pagina-entrenador.php");
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
    <title>Administrador</title>
</head>
<body>
 <Nav>
    <a href="../php/cerrar_sesion.php" >Salir</a>
    <h1>Escuela Futbol Club</h1>
 </Nav>   
 <hr>
 <div class="photo">
    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="83px" height="98px" alt="">
 </div>
<b><P>Administrador</P></b>

<div class="tab">
   <button class="tablinks" onclick="openCity(event, 'Jugadores')">Jugadores</button>
   <button class="tablinks" onclick="openCity(event, 'Mensualidad')">Mensualidad</button>
   <button class="tablinks" onclick="openCity(event, 'Entrenadores')">Entrenadores</button>

 </div> 
 
 <div id="Jugadores" class="tabcontent">
  <div class="formulario-jugadores">
    <h2>ingrese datos</h2>
    <form action="insertar-jugadores.php" method="POST">
      <input type="text" placeholder="Identificacion" name="identificacion">
      <input type="text" placeholder="Nombre"  name="nombre">
      <input type="text" placeholder="Apellido" name="apellido">
      <input type="date" placeholder="Fecha de Nacimiento" name="fechan">
      <input type="text" placeholder="Dirección" name="direccion">
      <input type="text" placeholder="Ciudad" name="ciudad">
      <input type="text" placeholder="Departamento" name="departamento">
      <input type="text" placeholder="telefono" name="telefono">
      <input type="text" placeholder="Edad" name="edad">
      <input type="text" placeholder="Tipo" name="tipo">
      <button class=".caja-trasera button">Enviar</button>
    </form>
   
  </div>
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
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php 
		$sql="SELECT * from jugadores";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
            <td><?php  echo $mostrar['identificacion']?></td>
            <td><?php  echo $mostrar['nombre']?></td>
            <td> <?php  echo $mostrar['apellido']?></td>
            <td> <?php  echo $mostrar['fechan']?></td>
            <td> <?php  echo $mostrar['direccion']?></td>
            <td> <?php  echo $mostrar['ciudad']?></td>
            <td> <?php  echo $mostrar['departamento']?></td>
            <td> <?php  echo $mostrar['telefono']?></td>
            <td> <?php  echo $mostrar['edad']?></td>
            <td> <?php  echo $mostrar['tipo']?></td>
            <th><a href="actualizar-jugadores.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-info">Editar</a></th>
            <th><a href="delete.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-danger">Eliminar</a></th>
          </tr>
          <?php 
                 } ?>
        </tbody>
      </table>
    </div>
 </div>
 
 <div id="Mensualidad" class="tabcontent">
  <div class="formulario-mensualidad">
  <h2>ingrese datos</h2>
    <form action="insertar-mes.php" method="POST">
      <input type="text" placeholder="Identificacion" name="identificacion">
      <input type="text" placeholder="estado"  name="estado">
      <input type="date" placeholder="fecha" name="fecha">
      <input type="text" placeholder="monto" name="monto">
      <input type="submit" value="Enviar">
  </div>
   <div class="container mt-3">
      <table class="table">
       <thead class="table-dark">
         <tr>
        
           <th>identificacion</th>
           <th>Estado</th>
           <th>Fecha</th>
           <th>Monto</th>
           
         </tr>
       </thead>
       <tbody>
         <tr>
         <?php 
		$sql="SELECT * from mensualidad";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
          
           <td><?php  echo $mostrar['identificacion']?></td>
           <td><?php  echo $mostrar['estado']?></td>
           <td><?php  echo $mostrar['fecha']?></td>
           <td><?php  echo $mostrar['monto']?></td>
           
         </tr>
         <?php 
                 } ?>
       </tbody>
     </table>
   </div>
</div>
 </div>
 
 <div id="Entrenadores" class="tabcontent">
 <div class="formulario-entrenadores">
    <h2>ingrese datos</h2>
    <form action="../php/insertar-entrenadores.php" method="POST">
      <input type="text" placeholder="Identificacion" name="identificacionE">
      <input type="text" placeholder="Nombre"  name="nombre">
      <input type="text" placeholder="Apellido" name="apellido">
      <input type="date" placeholder="Fecha de Nacimiento" name="fechan">
      <input type="text" placeholder="Dirección" name="direccion">
      <input type="text" placeholder="Ciudad" name="ciudad">
      <input type="text" placeholder="Departamento" name="departamento">
      <input type="text" placeholder="telefono" name="telefono">
      <input type="text" placeholder="Edad" name="edad">
      <input type="text" placeholder="Estudios" name="estudios">
      <button class=".caja-trasera button">Enviar</button>
    </form>
   
  </div>
   <div class="container mt-3">s
      <table class="table">
       <thead class="table-dark">
         <tr>

            <th>identificacion</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Fecha de Nacimiento</th>
           <th>Direccion</th>
           <th>Ciudad</th>
           <th>Departamento</th>
           <th>Telefono</th>
           <th>Edad</th>
           <th>Estudios</th>
           <th>Actualizar</th>
            <th>Eliminar</th>
         </tr>
       </thead>
       <tbody>
       <tr>
          <?php 
		$sql="SELECT * from entrenadores";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
            <td><?php  echo $mostrar['identificacionE']?></td>
            <td><?php  echo $mostrar['nombre']?></td>
            <td> <?php  echo $mostrar['apellido']?></td>
            <td> <?php  echo $mostrar['fechan']?></td>
            <td> <?php  echo $mostrar['direccion']?></td>
            <td> <?php  echo $mostrar['ciudad']?></td>
            <td> <?php  echo $mostrar['departamento']?></td>
            <td> <?php  echo $mostrar['telefono']?></td>
            <td> <?php  echo $mostrar['edad']?></td>
            <td> <?php  echo $mostrar['estudios']?></td>
            <th><a href="actualizar-entrenadores.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-info">Editar</a></th>
            <th><a href="delete.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-danger">Eliminar</a></th>
          </tr>
          <?php 
                 } ?>
        
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
