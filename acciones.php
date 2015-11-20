<?php
    include("base_datos.php");
    $db = new base_datos();
    VAR_DUMP($_REQUEST["formulario"]); 

    if($_REQUEST["formulario"]  == "agregarEmpleados")
    {
    	if($_REQUEST["password"]  == $_REQUEST["confirmpassword"])
    		$db->agregarEmpleados($_REQUEST["idEmpleados"],$_REQUEST["Nombre"],$_REQUEST["apellido_paterno"],$_REQUEST["apellido_materno"],$_REQUEST["Domicilio"],$_REQUEST["Telefono"],$_REQUEST["password"]);
    	header("Location: empleados.php");
        echo "<h2>Dato Guardado</h2>";

    }

    {
        
         $db->agregarClientes($_REQUEST["idClientes"],$_REQUEST["Nombre"],$_REQUEST["Apellido_Paterno"],$_REQUEST["apellido_Materno"],$_REQUEST["Domicilio"],$_REQUEST["Telefono"]);
        header("Location: clientes.php");
         echo "<h2>Dato Guardado</h2>";

    }

  
?>