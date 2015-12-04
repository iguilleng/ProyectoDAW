<?php
	session_start();
	$conexion = new mysqli();

	$conexion->connect('localhost','root','','usuarios');
	if($conexion->connect_error)
	{
		die ("no hubo conexion :".$conexion->connect_error);
	}
	$nick = $_POST['nick'];
	$password = $_POST['password'];
	$sentenciaSQL = "SELECT * FROM administrador WHERE nick='".$nick."' AND contrasena='".$password."' ";
	$resultados = $conexion->query($sentenciaSQL);
	if($resultados->num_rows>0)
	{
		while($registros = $resultados->fetch_array())
		{
			$nombre=$registros['nick']; 
			$_SESSION['nickpersona'] = $nombre;
			header ('location:administrador.php');
		}
		echo "datos validados";
		//header ('location:Pedidos.html');
	}
	else
	{
		echo "datos incorrectos intente nuevamente";
	}


?>