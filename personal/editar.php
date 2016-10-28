<?php 
include('conexion.php');
$ID_PERS=$_GET['ID_PERS'];
$sql="select *from PERSONAL where ID_PERS=$ID_PERS";

 $rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
 $re=mysql_fetch_array($rs)

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MORMULARIO DE MODIFICACION</title>
</head>
<body>
<center>
	<H1>Formulario De Modificacion</H1>

<form action="edit.php" method="post">

<input type="hidden" name="ID_PERS" id="ID_PERS" value="<?php echo $ID_PERS;?>">

Nombre:
<input type="text" name="NOMBRE" value="<?php echo $re['NOMBRE'];?>"> <br> <br>
Cargo:
<input type="text" name="CARGO" value="<?php echo $re['CARGO'];?>"> <br><br>

<input type="submit" name="Enviar" value="Enviar"> <br>

</center>

</form>
</body>
</html>