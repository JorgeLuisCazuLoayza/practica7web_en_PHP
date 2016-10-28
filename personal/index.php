<?php 
include('conexion.php');
$sql="select *from personal";
$rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
?>

<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
</head>
<body>
<h1>Listado de Personal</h1> 
<h1><a href="fpersonal.php">Nuevo Registro Personal</a></h1>

<table border="2">
	<tr>
		<th>Nombre</th>
		<th>Cargo</th>
		<th></th>
		<th></th>
	</tr>
<?php 
	while ($r=mysql_fetch_array($rs)) {
	

 ?>
	<tr>
		<td><?php echo $r['NOMBRE'];?></td>
		<td><?php echo $r['CARGO'];?></td>

		<td><a href="editar.php?ID_PERS=<?php echo $r['ID_PERS'];?>">modificar</a></td>
		<td><a href="elimina.php?ID_PERS=<?php echo $r['ID_PERS'];?>">eliminar</a></td>
	</tr>
	<?php 
	}
 	?>
</table>
	<p><a href="http://localhost/practica7PHP/administracion.php">Ir al inicio</a></p>
	
</body>
</html>