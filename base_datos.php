<?php
   class base_datos
   {
   	  var $conexion;

   	  public  function __construct()
   	  {
   	  $conexion = mysql_connect("localhost","root","");
   	  mysql_select_db("pizzeria",$conexion);
   	  }

   	  public function agregarEmpleados($idEmpleados,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono,$Password)
   	  {
        $Password=sha1($Password);
   	  	$query = "INSERT INTO empleados(
 idEmpleados ,
  Nombre ,
apellido_Paterno ,
apellido_Materno ,
Domicilio ,
Telefono ,
Password 
 
)
 VALUES('$idEmpleados','$Nombre','$apellido_Paterno','$apellido_Materno','$Domicilio','$Telefono','$Password');";
   	  		$var=mysql_query($query);
          echo($query);
          var_dump($var);

   	  		
   	  }

   	  public function modificaEmpleados($idEmpleados,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono,$Password)
        {
   	  	$query="INSERT INTO empleados VALUES($id_Empleado,$Nombre,$apellido_Paterno,$apellido Materno,$Domicilio,$Telefono,$Password)";
   	  	$result=mysql_query($query);
   	  	$arreglo=mysql_fetch_array($result);
   	  	return $arreglo;
   	  }

        public function eliminarEmpleados($idEmpleados,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono,$Password)
        {
         $query = "delete from empleado where id_Empleados=".$idEmpleados;
        }



     public function agregarClientes ($idClientes,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono)
      {
        $query = "INSERT INTO clientes( idClientes,Nombre,apellido_Paterno,apellido_Materno,Domicilio,Telefono,)
      VALUES('$idClientes','$Nombre','$apellido_Paterno','$apellido_Materno','$Domicilio','$Telefono');";
      echo $query;
          $var=mysql_query($query);
          var_dump($query);
          var_dump($var);
        
          
      }
      public function modificaClientes($idEmpleado,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono)
        {
        $query="INSERT INTO clientes VALUES($id_Cliente,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono)";
        $result=mysql_query($query);
        $arreglo=mysql_fetch_array($result);
        return $arreglo;
      }

        public function eliminarClientes($idEmpleado,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono)
        {
         $query = "delete from cliente where idClientes=".$idClientes;
        }
   }

?>