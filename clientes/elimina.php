<?php 
	
	require('conexion.php');
	
	$id_cli=$_GET['id_cli'];
	
	$sql="DELETE FROM clientes WHERE id_cli='$id_cli'";
	
 $rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');

if ($rs) {
 		echo "<script>
 			window.alert('eliminado exitosamente');
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