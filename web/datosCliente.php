<?php
	include("conexion.php");	
	$nick=$_POST['nick'];
	$nombre=$_POST['nombre'];
	$email1=$_POST['email1'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$fecna=$_POST['fecna'];

	$req = (strlen($nick)*strlen($nombre)*strlen($email1)*strlen($password1)*strlen($password2)*strlen($fecna)) or die("<h2>no se ha llenado todos los campos</h2>");
	
	if($password1 != $password2){
		die('el password no coincide <br><br><a href="registrarCliente.html">Volver</a>');
	}

	//$password = md5($password1);

	mysql_query("INSERT INTO clientes (id_usuario,nick,nombre,correo,contrasena,fechaNacimiento) VALUES ('','$nick','$nombre','$email1','$password1','$fecna')",$link) or die("<h2>Error de envio</h2>");

	echo '<h2>REGISTRO COMPLETO</h2>
		  <h5>gracias por registrarse en nuestra web, ya puedes ingresar como usuario</h5>
		  <a href="IniciarSecion.html">Ingresar</a>';
?>

<html>
	<body background="imagenes/fondoNegro.jpg" text="white">
</html>