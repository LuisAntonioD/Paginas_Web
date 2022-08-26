<?php 
require_once("mysql.lib.php");
require_once("carrito.lib.php");
$mysqli = conectar();
session_start();

extract($_REQUEST);
if (valida_sesion($u,$s)) :

require_once("carrito_head.php");

?>
	<script src="https://www.paypal.com/sdk/js?client-id=AT5OEeOlcxAuAxi0tv_rqM1S1UIdY2ppx0prUZjIBcvJvHAOuqQ8ppk9u7UM_dZrzhfZfEySdiP6HZU8&currency=MXN"></script>
</head>
<link  href="css/practica1.css" rel="stylesheet" type="text/css">
<div class="container">
<div class="d-flex justify-content-between">
<h3 class="mt-4">Mis productos (<?= total_productos_carrito() ?>)</h3>
</div>


<?= mostrar_carrito(); ?>

<div class="d-flex justify-content-between">
<a href="carrito_vaciar.php?u=<?=$_SESSION["usuario"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&s=<?=$_SESSION["token"]?>&cat=alta&idsu=<?=$idsu?>&cat=<?=$idsu?>" class="btn btn-outline-light text-dark btn-lg">
<img src="images/trash.gif" alt="envios" style="width:50px">
<h5>Borrar articulos</h5>
</a>
</div>
</div>
<?php 
if (total_productos_carrito() > 0) :
?>
<center>
<div class="justify-content-between mt-5">
<div id="paypal-button-conteiner"></div>
</center>
<script>
	paypal.Buttons({
		style:{
			shape: 'rect',
			color: 'silver',
			layout: 'vertical',
			label: 'pay',

		},
		createOrder: function(data,actions){
			return actions.order.create({
				purchase_units: [{
					amount: {
						value: <?= $_SESSION['totalsub'] ?>
					}
				}]
			});
		},

		onApprove: function(data,actions){
			actions.order.capture().then(function (detalles){
				window.location.href="carrito_pagar.php?u=<?=$_SESSION["usuario"]?>&s=<?=$_SESSION["token"]?>&accion=alta&idsu=<?=$idsu?>&consola=<?= $consola ?>"
			});
		},

		onCancel: function(data){
			alert("Pago cancelado");
			console.log(data);
		}
	}).render('#paypal-button-conteiner');
</script>
<?php 
endif;
?>

</div>
<?php
require_once("carrito_foot.php");
desconectar();
else:
  header("location:inicio_sesion.php?msgcode=7");
endif;
?>