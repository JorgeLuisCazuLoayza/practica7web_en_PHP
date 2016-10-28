
<center>
<h1>Registro Producto</h1>
	<form action="" method="post">
	<label>descripcion</label>
	<input type="text" name="DESCRIPCION" value="<?php echo $this->data['item']['DESCRIPCION']; ?>"> <br> <br>
	<label>costo_uni</label>
	<input type="text" name="COSTO_UNI" value="<?php echo $this->data['item']['COSTO_UNI']; ?>"> <br> <br>
	<label>cantidad</label>
	<input type="text" name="CANTIDAD" value="<?php echo $this->data['item']['CANTIDAD']; ?>">	<br> <br>
	<label>stock_min</label>
	<input type="text" name="STOCK_MIN" value="<?php echo $this->data['item']['STOCK_MIN']; ?>">	<br> <br>
	<input type="hidden" name="ID_PROD" value="<?php echo $this->data['item']['ID_PROD']; ?>">
	<input type="submit" value="Enviar" />
</form>
</center>
