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
<form method="post" action="PRUEBA2.php" >
<head>
    <style type="text/css">
        body{
            background: url(imagenes/fondo2.jpg) no-repeat;
            background-size: 150% 100%;
        }
        img {
        border-radius: 50% 50%; /* Borde redondeado */
        box-shadow: 0px 0px 15px #000; /* Sombra */
        padding:5px; /* Espacio entre la imagen y el borde */
        background:#000000; /* Color de fondo que se ve entre el espacio */
        -moz-transition: all 1s;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
        }
        img:hover {
        border-radius:10% 10%; /* Con esto quitamos el borde redondeado */
        -moz-transition: all 1s;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
        cursor:pointer;
        }
    </style>
</head>
<body text="white">
    <tr>
        <center><a href="cerrarSesion.php"><font color='white'>Cerrar Sesion</font></a></center>
    </tr>
    <tr>
        <center><h1>Realizar Comprar</h1></center>
    </tr>
<table> 
    <?php 
            include("conexion.php");
            $query="SELECT * FROM producto";
            $resultado=$conexion->query($query);
            $cont=100;
            while($row=$resultado->fetch_assoc())
            {

    ?>
                <tr>      
                    <td><img width="150" height="200" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
                    <td><?php echo "<pre><h3>".$row['nombre']."     </h3></pre>"; ?></td><br>
                    </td>
                    <td><?php echo "<h3>".$row['Descripcion']."</h3>"; ?></td>

                    <td>
                        <?php 
                            echo "<pre><h3>
                            Precio:   ".$row['Precio']."
                            Cantidad: ".$row['Cantidad']."
                            Tipo:     ".$row['Tipo']."</h3></pre>";
                        ?>
                    </td>
                    <?php $cont=$cont+1; ?>
                    <td>
                    <pre>
                    PRECIO:   <input type="checkbox" name="<?php echo $row['id_producto']; ?>" value="<?php echo $row['Precio']; ?>" id="<?php echo $row['id_producto']; ?>">
                    CANTIDAD: <input type="text" size="2" maxlength="5" name="<?php echo $cont; ?>" id="<?php echo $cont; ?>">
                    </pre>
                    </td>
                </tr>

    <?php
            }
    ?>
    <tr>
        <td colspan="5"><center><input type="submit" value="Realizar Pedido" name="Rpedido"></center><td/>
    </tr>
</table>
</body>
</form>

