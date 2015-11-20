<?php
	$conexion = mysql_connect("localhost", "root", "");
	mysql_select_db("pizzeria", $conexion);
	$usuario = $_POST['Nombre'];
	$pass = $_POST['Password'];
	$query = "SELECT Usuario FROM empleados WHERE Usuario = '$usuario' AND Password = SHA1('$pass')";
	echo $query;
	$res = mysql_query($query);
	$valido = mysql_fetch_array($res);
	if(isset($valido['Usuario']))
	{
		session_start();
		$_SESSION['usuario'] = $valido['Usuario'];
		echo "entre";
		header("Location: menu.html");
	}
	else
	{
		echo "no";
		header("Location index.html");
	}

?>