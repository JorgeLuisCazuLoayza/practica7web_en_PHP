<?php 
include('conexion.php');
$id_cli=$_POST['id_cli'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$producto=$_POST['producto'];

echo $id_cli;

$sql="update clientes set nombre='$nombre', fecha='$fecha',producto='$producto' where id_cli='$id_cli'";

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