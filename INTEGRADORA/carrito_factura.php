<?php 
require_once("mysql.lib.php");
require_once("mensajes.lib.php");
session_start();
$mysqli = conectar();

extract($_REQUEST); //extrae variables $u, $s, $idventa

if (valida_sesion($u,$s)) :



ob_start();   //start capturing output

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="Luis Antonio Arredondo Deanda">

<title>ELECTRODOMEX</title>
  <link rel="icon" type="image/jpg" href="images/Logoindex.svg">
	 <!--css de brootstrap-->
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--css de fontawesome-->
	<link href="Fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css" >
	<link rel="stylesheet"
	href="print.css"
      type="text/css"
      media="print" />

	<!--Para bootstrap se debe incluir jquery como primer Script de la página-->
	<script src="js/jquery-3.6.0.min.js"></script>
    <!--Script de brootstrap-->
	<script src="Footstrap/js/bootstrap.min.js"></script>

	<script src="js/practica7.js"></script>
	<script>
        function imprimir(){
            document.getElementById( "boton" ).style.visibility = "hidden";
            window.print();
        }
    </script>
</head>
<body>
	
<?php
$sql = "SELECT * FROM venta WHERE id = '$idven'";
$rs = query($sql);
if ( $row = $rs->fetch_assoc() ) {
	$fecha = $row["fecha"];
}
$fecha = $fecha ?? "--";

$sql = "SELECT nombre, detalle_venta.cantidad, producto.precio, subtotal
		FROM detalle_venta 
		INNER JOIN inventario ON (inventario.id = detalle_venta.id_inventario)
		INNER JOIN producto ON (inventario.id_producto = producto.id)
		WHERE id_venta = '$idven'";
$rs = query($sql);	

$sql = "SELECT Nombre as clientenom, ApellidoPat, ApellidoMat,Telefono,calle,colonia,No_exte,Rfc,municipio FROM cliente WHERE usuario = '$u'";	
$rs2 = query($sql);
$row2 = $rs2->fetch_assoc();
extract($row2);
?>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="images/Logoindex.svg">
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">ELECTRODOMEX</span>
					<br>
					<samll>Robles Jurica 12, Querétaro</samll>
					<br>
					<samll>Teléfono: +(442) 234 56 78</samll>
					<br>
					<samll>Email: electrodomex.com.mx.net</samll>
				</div>
			</td>

			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
					<p>No. Factura: <strong><?=$idven?></strong></p>
					<p>Fecha: <?=$fecha?></p>
				</div>
			</td>
		</tr>
	</table>
	<table id="factura_cliente">
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Cliente</span>
					<table class="datos_cliente">
						<tr>
							<td><label>Teléfono:</label> <p><?=$Telefono?></p></td>
							<td><label>RFC:</label> <p><?=$Rfc?></p></td>

						</tr>
						<tr>
							<td><label>Nombre:</label> <p><?=$clientenom?> <?=$ApellidoPat?> <?=$ApellidoMat?></p></td>
							<td><label>Dirección:</label> <p><?=$calle?> <?=$colonia?> <?=$No_exte?> <?=$municipio?></p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cantidad</th>
					<th class="textleft">Descripción</th>
					<th class="textright" width="150px">Precio Unitario</th>
					<th class="textright" width="150px"> Precio Total</th>
				</tr>
			</thead>
			<?php
$total_sin_iva = 0;
while ($row = $rs->fetch_assoc()):
	extract($row);
$precio_sin_iva = $precio ;
$subtotal_sin_iva = $precio_sin_iva * $cantidad;
$total_sin_iva += $subtotal_sin_iva;
?>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter"><?=$cantidad?></td>
					<td><?=$nombre?></td>
					<td class="textright">$<?= number_format( $precio_sin_iva,2, ".", "," ) ?></td>
					<td class="textright">$<?= number_format( $subtotal_sin_iva,2, ".", "," ) ?></td>
				</tr>
				<?php
endwhile;
?>
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL</span></td>
					<td class="textright text-danger"><span>$<?= number_format( $total_sin_iva,2, ".", "," ) ?></span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA (16%)</span></td>
					<td class="textright text-danger"><span>$<?= number_format( $total_sin_iva * 0.16,2, ".", "," ) ?></span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL </span></td>
					<td class="textright text-danger"><span>$<?= number_format( $total_sin_iva * 1.16,2, ".", "," ) ?></span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre,email y su duda el el apartado de mi cuenta</p>
		<br><br><br><br><br><br><br><br><br><br>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>

</div>
<br><br><br>
<center>
	<a class="btn " id="boton" onclick="imprimir()"><img src="images/print.gif" alt="envios" style="width:50px">Imprimir documento</a>
</center>

	<br><br><br>
<?php 
require_once("carrito_foot.php");




desconectar();
else :  //EN CASO DE SESIÓN INVÁLIDA
	header("location:login.php?msgcode=7");
endif;
?>

</body>
</html>