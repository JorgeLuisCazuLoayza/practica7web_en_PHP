<?php 
	
	require('conexion.php');
	
	$ID_CAT=$_GET['ID_CAT'];
	
	$sql="DELETE FROM categoria WHERE ID_CAT='$ID_CAT'";
	
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