<?php 
require_once("mysql.lib.php");
require_once("mensajes.lib.php");
require_once("head.php");
session_start();
$mysqli = conectar();

extract($_REQUEST);

if (valida_sesion($u,$s)) :

?>

<body style="background-color:papayawhip">
<div class="d-flex justify-content-between">
	<a href="vistaprincipal.php?u=<?= $u ?>&s=<?= $s ?>">Inicio</a>
	<span>
		<small>
			Hola, <?=$_SESSION["usuario"]?>
			<img src="upload/fotousuarios2/<?=$_SESSION["foto"]?>" class="rounded-circle" style="width: 50px;">
			<a href="cerrar.php?u=<?= $u ?>&s=<?= $s ?>">Cerrar sesión</a>
		</small>
	</span>

</div>
<center>
<h4 class="text-dark ">Mis ventas <i class="fas fa-dollar-sign"></i></h4>
</center>

<?php

$u=$_SESSION["usuario"];

$sql = "select venta.id as idven,fecha,COUNT(*) as numproductos,
sum(detalle_venta.cantidad*detalle_venta.preciodetvent) as total
from venta
inner join detalle_venta on (venta.id=detalle_venta.id)
inner join usuario on(venta.id_usuario=usuario.id)
where 
 usuario='$u'
 group by idven";


$rs = query($sql);
if ( $rs->num_rows > 0) :
?>

<center>
		<div class="conteiner"> 
		<div class="col col-md-7">

		<table class="table table-horver">
			<thead class="table-secondary">
				<tr>
					<th>ID</th>
					<th>Fecha</th>
					<th>Productos</th>
					<th>Total</th>
					<th>Ver detalle</th>
				</tr>
			</thead>
			<tbody>
		<?php
		while ($row = $rs->fetch_assoc()):
			extract($row);
		?>	

		<tr class="text-center">
			<td><?=$idven?></td>
			<td><?=$fecha?></</td>
			<td><?=$numproductos?></td>
			<td class="text-end pe-5">$<?= number_format( $total,2, ".", "," ) ?></td>
			<td>
				<a href="ventasdetalle.php?idven=<?=$idven?>&u=<?=$u?>&s=<?=$s?>"
				class="btn btn-outline-primary btn-sm">
				<i class="fas fa-money-check-alt fa-2x"></i>
				Ver detalle
				</a>
				<a href="factura.php?idven=<?=$idven?>&u=<?=$u?>&s=<?=$s?>"
				class="btn btn-outline-danger btn-sm" target="_blank">
				<i class="fas fa-file fa-2x"></i>
				Factura
				</a>
			</td>
		</tr>
		<?php
		endwhile;
		?>
			</tbody>
</table>

	</div>
</div>
</center>

<?php 
else :
	
	alerta("warning","No hay productos todavía");
endif;

desconectar();

require_once("foot.php");



else : // en caso de sesion invalida 
    header("location:admin.php?msgcode=7");
endif;

?>