<?php
    session_start();
    error_reporting(0);
    echo "Bienvenido/a ".$varSesion = $_SESSION['nickpersona'];
    if($varSesion == null || $varSesion=='')
    {
        echo"<center><h2>INICIAR SESION PARA PODER REALIZAR PEDIDOS</h2></center>";
        //header ('location:PaginaPrincipal.html');
        die();
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body >
<body background="imagenes/fondoNegro.jpg" text="white">
	<center>
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"><a href="http://localhost/proyecto/web/registrarCliente.html">nuevo</a></th>
					<th colspan="7">Lista de Usuarios</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ID</td>
					<td>Nick</td>
					<td>Nombre</td>
					<td>correo</td>
					<td>Pasword</td>
					<td>fecha de Nacimiento</td>
					<td>Operaciones</td>
					<td><a href="Administrador.php">regresar</a></td>;
				</tr>

				<?php 
					include("conexion.php");
					$query="SELECT * FROM clientes";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id_usuario']; ?></td>
						<td><?php echo $row['nick']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['correo']; ?></td>
						<td><?php echo $row['contrasena']; ?></td>
						<td><?php echo $row['fechaNacimiento']; ?></td>
						<td><a href="modificarU.php?id=<?php echo $row['id_usuario']; ?>">Modificar</a></td>
						<td><a href="eliminarU.php?id=<?php echo $row['id_usuario']; ?>">Eliminar</a></td>
					</tr>
				<?php
				    }
				   ?>

			</tbody>
		</table>
	</center>
</body>