<?php 
include('conexion.php');
$sql="select *from clientes";
$rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css"> 
	<title>registro </title>
</head>
<body>
<h1>Listado de Clientes</h1> 
<h1><a href="fclientes.php">Nuevo Registro</a></h1>

<table border="2">
	<tr>
		<th>Nombre</th>
		<th>Fecha</th>
		<th>Producto</th>
		<td></td>
		<td></td>
	</tr>
<?php 
	while ($r=mysql_fetch_array($rs)) {
	

 ?>
	<tr>
		<td><?php echo $r['nombre'];?></td>
		<td><?php echo $r['fecha'];?></td>
		<td><?php echo $r['producto'];?></td>

		<td><a href="editar.php?id_cli=<?php echo $r['id_cli'];?>">modificar</a></td>
		<td><a href="elimina.php?id_cli=<?php echo $r['id_cli'];?>">eliminar</a></td>
		
	</tr>

	<?php 
	
	}

 	?>
</table>
<p><a href="http://localhost/practica7PHP/administracion.php">Ir al inicio</a></p>
	
</body>
</html>