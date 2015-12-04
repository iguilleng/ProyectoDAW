<?php
	include("conexion.php");
	$id=$_REQUEST['id'];	


	$query="DELETE FROM producto WHERE id_producto='".$id."' ";
	$resultado=$conexion->query($query);
	header("Location: VerProductos.php");

?>
