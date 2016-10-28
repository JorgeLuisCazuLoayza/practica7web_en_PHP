<?php 
	include('conexion.php');
	$NOMBRE=$_POST['NOMBRE'];
	$CARGO=$_POST['CARGO'];

$sql="insert into personal(NOMBRE,CARGO) 
values('$NOMBRE','$CARGO')";

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