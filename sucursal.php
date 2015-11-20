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
      
      Dirrecion<input type="text" name="Dirrecion"/><br>
      Teléfono<input type="text" name="Telefono"/><br>
      <input type="hidden" name="formulario" value="sucursal">

      <button type="submit">Regresar</button>
     
    </form>
  <a href = "logout.php"> Cerrar sesion </a>
</body>
</html>