<?php 
include('conexion.php');
$ID_CAT=$_GET['ID_CAT'];
$sql="select *from categoria where ID_CAT=$ID_CAT";

 $rs=mysql_query("$sql",$con)or die ('error de conexion con la base de datos');
 $re=mysql_fetch_array($rs)

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MORMULARIO DE MODIFICACION</title>
</head>
<body>
<H1>MORMULARIO DE MODIFICACION</H1>

<form action="edit.php" method="post">

<input type="hidden" name="ID_CAT" id="ID_CAT" value="<?php echo $ID_CAT;?>">

Descripcion:
<input type="text" name="DESCRIPCION" value="<?php echo $re['DESCRIPCION'];?>">

<input type="submit" name="Enviar" value="Enviar"> <br>

</form>
</body>
</html>