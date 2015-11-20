<HTML>
<HEAD>
<TITLE>Borrar2.php</TITLE>
</HEAD>
<BODY>
<?php
include("conexion.php");
$query="Delete From Vacante Where id = '".$_REQUEST['idClientes']."'";
mysql_query($query);
?>
<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="consulta.php">Ver los registros</a></div>
</BODY>
</HTML>