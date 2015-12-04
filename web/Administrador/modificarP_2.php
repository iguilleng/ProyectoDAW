
<?php
	include("conexion.php");
	$id=$_REQUEST['id'];	
	$Nombre=$_POST['nombre'];
	$Precio=$_POST['precio'];
	$Cantidad=$_POST['cantidad'];
	$Tipo=$_POST['tipo'];
	$Descripcion=$_POST['descripcion'];
	$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$req = (strlen($Nombre)*strlen($Precio)*strlen($Cantidad)*strlen($Tipo)*strlen($Descripcion)*strlen($imagen)) or die("<h2>no se ha llenado todos los campos</h2>");

	$query="UPDATE producto SET nombre='".$Nombre."', Precio='".$Precio."', Cantidad='".$Cantidad."', Tipo='".$Tipo."', Descripcion='".$Descripcion."', imagen='".$imagen."' WHERE id_producto='".$id."' ";
	$resultado=$conexion->query($query);

	echo '<h2>REGISTRO COMPLETO</h2>
		  <a href="verProductos.php">Ver Tabla</a>';
?>
