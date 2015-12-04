<?php
    session_start();
    error_reporting(0);
    echo $varSesion = $_SESSION['nickpersona'];
    if($varSesion == null || $varSesion=='')
    {
        echo"<center><h2>INICIAR SESION PARA PODER REALIZAR PEDIDOS</h2></center>";
        die();
    }

?>

<html>
            <tr>
                <center><a href="cerrarSesion.php" text="white">cerrar sesion </a></center>
            </tr>
</html>


<html><head><body  background="imagenes/fondoNegro.jpg" text="white">
	<center><b>Llene los Datos De Envio</b></center><br/>
	</head>
</html>
<?php
function recogeDato($campo)
{
	return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
}
	//productos
	$a1=recogeDato('1');
	$a2=recogeDato('2');
	$a3=recogeDato('3');
	$a4=recogeDato('4');
	$a5=recogeDato('5');
	$a6=recogeDato('6');
	$a7=recogeDato('7');
	$a8=recogeDato('8');
	$a9=recogeDato('9');
	$a10=recogeDato('10');
	$a11=recogeDato('11');
	$a12=recogeDato('12');
	$a13=recogeDato('13');
	$a14=recogeDato('14');
	$a15=recogeDato('15');


	//cantidad
	$p1=recogeDato('101');
	$p2=recogeDato('102');
	$p3=recogeDato('103');
	$p4=recogeDato('104');
	$p5=recogeDato('105');
	$p6=recogeDato('106');
	$p7=recogeDato('107');
	$p8=recogeDato('108');
	$p9=recogeDato('109');
	$p10=recogeDato('110');
	$p11=recogeDato('111');
	$p12=recogeDato('112');
	$p13=recogeDato('113');
	$p14=recogeDato('114');
	$p15=recogeDato('115');


	
	echo     "<pre>PRODUCTOS               CANTIDAD      PRECIO</pre>";
	echo     "<pre>--------------------------------------------</pre>";
	if ($a1==TRUE)
		echo "<pre>Vino Tinto              ".$p1."           ".$a1."</pre>";
	if ($a2==TRUE)
		echo "<pre>Vino Blanco             ".$p2."           ".$a2."</pre>";
	if ($a3==TRUE)
		echo "<pre>Vino Reposado           ".$p3."           ".$a3."</pre>";
	if ($a4==TRUE)
		echo "<pre>El Jumador Reposado     ".$p4."           ".$a4."</pre>";
	if ($a5==TRUE)
		echo "<pre>El Jumador Joven        ".$p5."           ".$a5."</pre>";
	if ($a6==TRUE)
		echo "<pre>Frida Kahlo Anejo       ".$p6."           ".$a6."</pre>";
	if ($a7==TRUE) 
		echo "<pre>Whisky de Escocia       ".$p7."           ".$a7."</pre>";
	if ($a8==TRUE)
		echo "<pre>Whisky de Francia       ".$p8."           ".$a8."</pre>";
	if ($a9==TRUE)
		echo "<pre>Whisky de Rosado        ".$p9."           ".$a9."</pre>";
	if ($a10==TRUE)
		echo "<pre>Origen Italiano         ".$p10."           ".$a10."</pre>";
	if ($a11==TRUE)
		echo "<pre>Origen Venezuela        ".$p11."           ".$a11."</pre>";
	if ($a12==TRUE)
		echo "<pre>Origen Argentina        ".$p12."           ".$a12."</pre>";
	if ($a13==TRUE)
		echo "<pre>Ceda Blend              ".$p13."           ".$a13."</pre>";
	if ($a14==TRUE)
		echo "<pre>Ceda Pinot Noir         ".$p14."           ".$a14."</pre>";
	if ($a15==TRUE)
		echo "<pre>Ceda Chardonnay         ".$p15."           ".$a15."</pre>";
	echo     "<pre>--------------------------------------------</pre>";
	echo     "<pre>Total   ".(($p1*$a1)+($p2*$a2)+($p3*$a3)+($p4*$a4)+($p5*$a5)+($p6*$a6)+($p7*$a7)+($p8*$a8)+($p9*$a9)+($p10*$a10)+($p11*$a11)+($p12*$a12)+($p13*$a13)+($p14*$a14)+($p15*$a15))."</pre>";
	

?>
<?php
  setcookie("num_accesos");
?>


<html>
<body>
<form >
	<table style="text-aling: left; width: 50%" cellpadding="3" rules="rows">
		<tbody>
			<tr><b><br/>lugar de envio</b>
				<td>Departamento:</td>;
				<td><select name="conocio" id="conocio">
					<option selected="selected"></option>
					<option>Amazonas</option>
					<option>Ancash</option>
					<option>Apurimac</option>
					<option>Arequipa</option>
					<option>Ayacucho</option>
					<option>Cajamarca</option>
					<option>Cuzco</option>
					<option>Huancavelica</option>
					<option>Huanuco</option>
					<option>Ica</option>
					<option>Junin</option>
					<option>La Libertad</option>
					<option>Lambayeque</option>
					<option>Lima</option>
					<option>Loreto</option>
					<option>Madre De Dios</option>
					<option>Moquegua</option>
					<option>Pasco</option>
					<option>Piura</option>
					<option>Puno</option>
					<option>San Martin</option>
					<option>Tacna</option>
					<option>Tumbes</option>
					<option>Ucayali</option>
					</select>
				</td> 
			</tr>
			<tr>
				<td>Direcci&oacute;n:</td>;
				<td class="centrado" colspan="2">
					<textarea cols="50" rows="3" name="consulta" id="consulta"></textarea>
				</td><br/>
			</tr>
		</tbody>
	</table>
</form>
</body>
</html>


<html><head>
</head>
<body>

<form >
	<table style="text-aling: left; width: 30%" cellpadding="3" rules="rows">
		<tbody>		
			<tr>
                <CENTER><td><a href="vista.php"><input type="button" value="Enviar" name="Envia"></a> <td/></CENTER>
            </tr>
		</tbody>
	</table>
</form>
</body>
</html>

