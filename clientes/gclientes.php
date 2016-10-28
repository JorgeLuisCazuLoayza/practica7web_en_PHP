<?php 
	include('conexion.php');
	$nombre=$_POST['nombre'];
	$fecha=$_POST['fecha'];
	$producto=$_POST['producto'];

$sql="insert into clientes(nombre,fecha,producto)
 values('$nombre','$fecha','$producto')";

 $rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
 	if ($rs) {
 		echo "<script>
 			window.alert('insertado exitosamente');
 			location.href='index.php';
 		      </script>";
 		    }  
 		 else {
 		   echo "<script>
 			window.alert('errooooooorrrrrr!!!!!!!!');
 			location.href='index.php';
 		      </script>";
   	     
 	    }
  ?>