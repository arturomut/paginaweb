<?php
  include("comprobacion.php");
?>
<html>
<head>
  <title>MENU</title>



</head>
<body>
  <meta charset = "utf-8">
  <h1> Pizzeria sicaru<br>
    <form method="POST" action="acciones.php">
      Nombre <input type="text" name="Nombre"/><br>
      Introduce usuario<input type="text" name = "usuario"/><br> 
      Introduce pass <input type= "password" name = "Password "/><br>
      Confirma pass <input type = "password" name="confirmpassword"/><br>
      Apellido Paterno<input type="text" name="apellido_paterno"/><br>
      Apellido Materno<input type="text" name="apellido_materno"/><br>
      Domicilio<input type="text" name="Domicilio"/><br>
      Teléfono<input type="text" name="Telefono"/><br>
      Usuario <input type="text" name="idEmpleados"/><br>
      Password <input type="password" name="Password"/><br>
      <input type="hidden" name="formulario" value="agregarEmpleados" />

      <button type="submit">Agregar</button>
    
    </form>
    <a href = "logout.php"> Cerrar sesion </a>
     
</body>
</html>