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
      
      Categoria<input type="text" name="Categoria"/><br>
      Nombre<input type="text" name="Nombre"/><br>
      Precio<input type="text" name="Precio"/><br>
      <input type="hidden" name="formulario" value="paquete">

      <button type="submit">Regresar</button>
     
    </form>
  <a href = "logout.php"> Cerrar sesion </a>
</body>
</html>