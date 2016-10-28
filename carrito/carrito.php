<?php
session_start();

if (isset ($_POST) && $_POST['producto'] != "" ){
     $registro = array();
     $registro['producto'] = $_POST['producto'];
     $registro['costo'] = $_POST['costo'];
     $registro['cantidad'] = $_POST['cantidad'];
     $registro['fecha'] = $_POST['fecha'];
     
     $_SESSION['carrito'][] = $registro;
     $_POST['producto'] = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>Carrito</title>
</head>
<body> <center>
      <h1>CARRITO DE COMPRAS</h1>
    <form action="" method="post">
        Producto: <input type="text" name="producto" value="">
        <br> <br>
        Costo: <input type="text" name="costo" value="">
        <br> <br>
        Cantidad: <input type="text" name="cantidad" value="">
        <br> <br>
        Fecha: <input type="text" name="fecha" value="">
        <br> <br>

        <input type="submit">                         
    </form>
</center>
  

    <p></p>
    <table border="1">
    	<tr>
    		<th>No</th>
    		<th>Producto</th>
    		<th>Costo</th>
    		<th>Cantidad</th>
            <th>Fecha</th>
    		<th>Total</th>
    	</tr>
    	<?php if (isset($_SESSION['carrito'])) : ?>
        <?php $conta = 0; ?>
    	<?php foreach ($_SESSION['carrito'] as $item) : ?>
    	<tr>
    		<td><?php echo ++$conta; ?></td>
    		<td><?php echo $item['producto']; ?></td>
    		<td><?php echo $item['costo']; ?></td>
    		<td><?php echo $item['cantidad'];  ?></td>
            <td><?php echo $item['fecha'];  ?></td>
    		<td><?php echo $item['costo']*$item['cantidad'];?></td>
    	</tr>
    <?php endforeach; ?>
     <?php endif; ?>
    </table>
        <p><a href="http://localhost/practica7PHP/administracion.php">Ir al inicio</a></p>

</body>
</html>