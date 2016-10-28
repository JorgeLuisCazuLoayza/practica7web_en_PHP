<?php 
include('conexion.php');
$sql="select *from CATEGORIA";
$rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Categoria</title>
</head>
<body>
<h1>Listado de Categorias</h1> 
<h1><a href="form_categoria.php">Nuevo Registro de Categoria</a></h1>

<table border="2">
	<tr>
		<th>Descripcion</th>
		<td></td>
		<td></td>
	</tr>
<?php 
	while ($r=mysql_fetch_array($rs)) {
 ?>
	<tr>
		<td><?php echo $r['DESCRIPCION'];?></td>

		<td><a href="editar.php?ID_CAT=<?php echo $r['ID_CAT'];?>">modificar</a></td>
		<td><a href="elimina.php?ID_CAT=<?php echo $r['ID_CAT'];?>">eliminar</a></td>
		
	</tr>
	<?php 	
	}
 	?>
</table>
<p><a href="http://localhost/practica7PHP/administracion.php">Ir al inicio</a></p>
</body>
</html>