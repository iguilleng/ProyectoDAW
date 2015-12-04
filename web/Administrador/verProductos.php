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
<body>
<body background="imagenes/fondoNegro.jpg" text="white">
	<center>
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"><a href="AgregarProducto.html">nuevo</a></th>
					<th colspan="8">Lista de Productos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ID</td>
					<td>nombre</td>
					<td>precio</td>
					<td>cantidad</td>
					<td>tipo</td>
					<td>descripcion</td>
					<td>imagen</td>
					<td>Operaciones</td>
					<td><a href="Administrador.php">regresar</a></td>;
				</tr>

				<?php 
					include("conexion.php");
					$query="SELECT * FROM producto";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id_producto']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['Precio']; ?></td>
						<td><?php echo $row['Cantidad']; ?></td>
						<td><?php echo $row['Tipo']; ?></td>
						<td><?php echo $row['Descripcion']; ?></td>
						<td><img width="100" height="150" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<td><a href="modificarP.php?id=<?php echo $row['id_producto']; ?>">Modificar</a></td>
						<td><a href="eliminarP.php?id=<?php echo $row['id_producto']; ?>">Eliminar</a></td>
		  				
					</tr>
				<?php
				    }
				   ?>

			</tbody>
		</table>
	</center>
</body>