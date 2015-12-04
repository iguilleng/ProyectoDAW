<?PHP
if ($_REQUEST['cod']==1)
    header ('location:VerUsuarios.php');
if ($_REQUEST['cod']==2)
	header ('location:AgregarProducto.html');
if ($_REQUEST['cod']==3)
	header ('location:verProductos.php');
?>