<?php 
	
	require('conexion.php');
	
	$ID_PERS=$_GET['ID_PERS'];
	
	$sql="DELETE FROM PERSONAL WHERE ID_PERS='$ID_PERS'";
	
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