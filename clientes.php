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
     idClientes <input type ="text" name="idClientes"/><br>
      Nombre <input type="text" name="Nombre"/><br>
      Apellido Paterno<input type="text" name="Apellido_Paterno"/><br>
      Apellido Materno<input type="text" name="Apellido_Materno"/><br>
      Domicilio<input type="text" name="Domicilio"/><br>
      Teléfono<input type="text" name="Telefono"/><br>
      <input type="hidden" name="formulario" value="agregarClientes"/>

      <button type="submit">Agregar</button>
      <button type="submit">Modificar</button>
      <button type="submit">Eliminar</button>
    </form>
  <a href = "logout.php"> Cerrar sesion </a>
</body>
</html>