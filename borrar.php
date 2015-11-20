<HTML>
<HEAD>
<TITLE>Borrar1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Borrar un registro</h1>
<br>
<?php
include("conexion.php");
echo '<FORM METHOD="POST" ACTION="borrar2.php">Nombre de Cliente <br>';
//Creamos la sentencia SQL y la ejecutamos
$query="Select nombre From Clientes Order By nombre";
$result=mysql_query($query);
echo '<select name="nombre">';
while ($row=mysql_fetch_array($result))
{
	echo '<option>'.$row["nombre"];
}
mysql_free_result($result)
?>
</select>
<br>
<INPUT TYPE="SUBMIT" value="Borrar"> <br>
<a href=index.php>Insertar<a>;
<a href=modificar.php>Modificar<a>;
</FORM>
</div>
</BODY>
</HTML>