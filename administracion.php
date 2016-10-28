<?php
session_start();
  echo "BIENVENIDO USUARIO  ". $_SESSION['USUARIO'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>principal</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
	
</head>
<body>

<div id="cabecera">
	<header><br>
	<H1>ADMINISTRACION</H1>
		 <br>
		<nav>
		   <ul>
		   	 <li><a href="#">inicio</a> </li>
		   	 <li><a href="http://localhost/practica7PHP/carrito/carrito.php">Ventas</a> </li>
		   	 <li><a href="http://localhost/practica7PHP/productos/index.php">Productos</a> </li>
		   	  <li><a href="http://localhost/practica7PHP/categorias/index.php">Categoria</a> </li>
		  	  <li><a href="http://localhost/practica7PHP/clientes/index.php">Clientes</a> </li>	
		  	  <li><a href="http://localhost/practica7PHP/personal/index.php">Personal</a> </li>
		   </ul> 
	    </nav>
	</header>
</div>
<div id="contenido">
	<section>
       <img src="imagen/16.jpg" width="500px"> 
    </section>
</div>
<div id="pie">
<p>&copy; 2016 Emergentes</p>
</div>

</body>
</html>
