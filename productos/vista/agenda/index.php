<!DOCTYPE HTML>
<html lang="es"> 
	<head> 
		<meta charset="utf-8"> 
		<link rel="stylesheet" href="estilos.css"> 
		<title><?php echo $this->data['titulo']; ?></title> 
	</head> 
	<body> 
		<header> <br>
			<h1>Lista de Productos</h1> <br>
		<p><a href="index.php?action=nuevo">Nuevo Producto</a></p>
		<div id="contenido"> <br>
</header>
			<table border="1">
				<tr>
					<th>Descripcion</th>
					<th>Costo Unitario</th>
					<th>Cantidad</th>
					<th>Stock Minimo</th>
					<th></th>
					<th></th>
				</tr> 
				<?php foreach ($this->data['productos'] as $item) : ?>
					<tr>
						<td><?php echo $item['DESCRIPCION']; ?></td>
						<td><?php echo $item['COSTO_UNI']; ?></td>
						<td><?php echo $item['CANTIDAD']; ?></td>
						<td><?php echo $item['STOCK_MIN']; ?></td>
						<td><a href="?action=editar&ID_PROD=<?php echo $item['ID_PROD']; ?>">Editar</a></td>
						<td><a href="?action=eliminar&ID_PROD=<?php echo $item['ID_PROD']; ?>" onclick="return(confirm('Esta seguro'));">Eliminar</a></td>
					</tr>
				<?php endforeach; ?>
			 </table>
		</div> <br>
		<header>
		<p><a href="http://localhost/practica7PHP/administracion.php">Ir al inicio</a></p>
		</header>
	</body> 
</html>