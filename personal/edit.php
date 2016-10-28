<?php 
include('conexion.php');
$ID_PERS=$_POST['ID_PERS'];
$NOMBRE=$_POST['NOMBRE'];
$CARGO=$_POST['CARGO'];

echo $ID_PERS;

$sql="update personal set NOMBRE='$NOMBRE', CARGO='$CARGO' where ID_PERS='$ID_PERS'";

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