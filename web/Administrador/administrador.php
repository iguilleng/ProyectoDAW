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
<html>
<body>
<body background="imagenes/fondoNegro.jpg" text="white">
    <script src="funciones.js" language="JavaScript"></script>
    <link rel="StyleSheet" href="estilos.css" type="text/css">
    <div id="menu">
            <p>
                <center><a id="enlace1" href="VerUsuarios.php">ver usuarios registrados</a></center>
            </p>
            <p>
                <center><a id="enlace2" href="AgregarProducto.html">agregar Productos</a></center>
            </p>
            <p>
                <center><a id="enlace3" href="verProductos.php">Ver Productos</a></center>
            </p>
            <p>
                <center><a href="cerrarSesion.php">cerrar sesion</a></center>
            </p>
    </div>
    <div id="detalles"></div>
</body>
</html>