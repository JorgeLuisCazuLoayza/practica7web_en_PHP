<?php 
include('conexion.php');
$id_cli=$_GET['id_cli'];
$sql="select *from clientes where id_cli=$id_cli";

 $rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
 $re=mysql_fetch_array($rs)

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO DE MODIFICACION</title>
</head>
<body>
<H1>Formulario De Modificacion</H1>

<form action="edit.php" method="post">

<input type="hidden" name="id_cli" id="id_cli" value="<?php echo $id_cli;?>">

Nombre:
<input type="text" name="nombre" value="<?php echo $re['nombre'];?>"> <br>
Fecha:
<input type="text" name="fecha" value="<?php echo $re['fecha'];?>"> <br>
Producto:
<input type="text" name="producto" value="<?php echo $re['producto'];?>"> <br>

<input type="submit" name="Enviar" value="Enviar"> <br>

</form>
</body>
</html>