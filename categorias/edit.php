<?php 
include('conexion.php');
$ID_CAT=$_POST['ID_CAT'];
$DESCRIPCION=$_POST['DESCRIPCION'];

echo $ID_CAT;

$sql="update categoria set DESCRIPCION='$DESCRIPCION' where ID_CAT='$ID_CAT'";

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