<?php
	include("conexion.php");
	$id=$_REQUEST['id'];	
	$nick=$_POST['nick'];
	$nombre=$_POST['nombre'];
	$email1=$_POST['email1'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$fecna=$_POST['fecna'];

	$req = (strlen($nick)*strlen($nombre)*strlen($email1)*strlen($password1)*strlen($password2)*strlen($fecna)) or die("<h2>no se ha llenado todos los campos</h2>");
	if($password1 != $password2){
		die('el password no coincide <br><br>');
	}

	$query="UPDATE clientes SET nick='".$nick."', nombre='".$nombre."', correo='".$email1."', contrasena='".$password1."', fechaNacimiento='".$fecna."' WHERE id_usuario='".$id."' ";
	$resultado=$conexion->query($query);

	echo '<h2>REGISTRO COMPLETO</h2>
		  <h5>gracias por registrarse en nuestra web, ya puedes ingresar como usuario</h5>
		  <a href="VerUsuarios.php">ver registros</a>';
?>
