<meta charset = "utf-8" />
<?php
    include("conexion.php");

    ?>

<form action="" method="post">
      Nombre: <input name= "nom"/><br> 
      Apellido Paterno :<input name="apPaterno"/><br>
      Apellido Materno: <input name= "apMaterno"/><br>
      Domicilio: <input name= "Domi"/><br>
      Telefono: <input name= "Tele"/><br>
      <input type="submit" />

      </form

      <?php
          if($_POST){ // si se ha presionado al enviar
          	$n=$_POST['nom'];
          	$ap=$_POST['apPaterno'];
          	$am=$_POST['apMaterno'];
          	$do=$_POST['Domi'];
          	$tel=$_POST['Tele'];
          	mysql_query("insert into clientes(Nombre,Apellido_Paterno,Apellido_Materno,Domicilio,Telefono)values('$n','$ap','$am','$tel','$do')"); 
          	echo "<h2>Dato Guardado</h2>";


          }

        ?>

