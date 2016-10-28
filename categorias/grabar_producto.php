<?php 
	include('conexion.php');
	$DESCRIPCION=$_POST['DESCRIPCION'];
	
$sql="insert into categoria(DESCRIPCION) 
values('$DESCRIPCION')";

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