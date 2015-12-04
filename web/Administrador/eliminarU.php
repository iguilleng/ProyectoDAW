<?php
	include("conexion.php");
	$id=$_REQUEST['id'];	


	$query="DELETE FROM clientes WHERE id_usuario='".$id."' ";
	$resultado=$conexion->query($query);
	header("Location: VerUsuarios.php");

?>
