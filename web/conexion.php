<?php

	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra servidor</h2>");;
	$db = mysql_select_db("usuarios",$link) or die("<h2>Error de conexion</h2>");
	$conexion = new mysqli("localhost","root","","usuarios");
?>
