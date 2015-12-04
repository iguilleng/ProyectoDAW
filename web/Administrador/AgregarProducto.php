
<?php
	include("conexion.php");	
	$Nombre=$_POST['nombre'];
	$Precio=$_POST['precio'];
	$Cantidad=$_POST['cantidad'];
	$Tipo=$_POST['tipo'];
	$Descripcion=$_POST['descripcion'];
	$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$req = (strlen($Nombre)*strlen($Precio)*strlen($Cantidad)*strlen($Tipo)*strlen($Descripcion)*strlen($imagen)) or die("<h2>no se ha llenado todos los campos</h2>");

	mysql_query("INSERT INTO producto (id_producto,nombre,precio,cantidad,tipo,descripcion,imagen) VALUES ('','$Nombre','$Precio','$Cantidad','$Tipo','$Descripcion','$imagen')",$link) or die("<h2>Error de envio</h2>");

	echo '<center><h2>REGISTRO COMPLETO</h2></center>
		  <center><a href="Administrador.php">regresar</a></center>';
?>
