<html><head>
	<center><b>Agrege Producto</b></center>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body {
			background: url(imagenes/fondoNegro.jpg);
			background-position: center;
		}
		form {
			background: #333333;
			width: 360px;
			border: 1px solid #4e4d4d;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			box-shadow:inset 0 0 10px #000;
			margin:100px auto;
		}
		form h1 {
			text-align: center;
			color:#fff;
			font-weight: normal;
			font-size: 40pt;
			margin: 30px 0px;
		}
		form h2 {
			color:#fff;
			font-weight: normal;
			font-size: 10pt;
			margin: 5px 50px;
		}
		form h3 {
			text-align: center;
			color:#fff;
			font-weight: normal;
			font-size: 10pt;
			margin: 5px 0px;
		}
		form input {
			width: 280px;
			height: 35px;
			padding: 0px 10px;
			margin: 10px 40px;
			color:#6d6d6d;
			text-align: center;
		}
		form input[type="radio"]{
			width: 15px;
			height: 15px;
			padding: 10px 5px;
			margin: 5px 5px 10px 70px;
			color:#6d6d6d;
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
		}
		form button {
			width:135px;
			margin: 20px 0px 30px 110px;
			height: 50px;
			border:1px solid #232323;
			box-shadow: 0px 2px 0px #000;
			-moz-box-shadow: 0px 2px 0px #000;
			-webkit-box-shadow: 0px 2px 0px #000;
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
		}
		form button:hover {
			background: #3a3a3a;
		}
	</style>
</head>
<body text="white">
				<?php 
					include("conexion.php");
					$id=$_REQUEST['id'];
					$query="SELECT * FROM producto WHERE id_producto='".$id."'";
					$resultado=$conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>
<form method="post" action="modificarP_2.php?id=<?php echo $row['id_producto']; ?>" enctype="multipart/form-data">

			<h1>Registro</h1>
			<input type="text" REQUIRED name="nombre" id="nombre"  value="<?php echo $row['nombre']; ?>">
			<input type="text" REQUIRED name="precio" id="precio"  value="<?php echo $row['Precio']; ?>" >
			<input type="text" REQUIRED name="cantidad" id="cantidad"  value="<?php echo $row['Cantidad']; ?>" >
			<input type="text" REQUIRED name="tipo" id="tipo"  value="<?php echo $row['Tipo']; ?>">
			<input type="text" REQUIRED name="descripcion" id="descripcion"  value="<?php echo $row['Descripcion']; ?>" >
			<center><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></center>
			<input type="file" REQUIRED name="imagen" id="imagen">		
			<button type="submit" value="Registrar" name="Registra">Registrar Producto</button>
</form>
</body>
</html>
