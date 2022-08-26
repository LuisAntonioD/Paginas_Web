<script src="https://www.paypal.com/sdk/js?client-id=AT5OEeOlcxAuAxi0tv_rqM1S1UIdY2ppx0prUZjIBcvJvHAOuqQ8ppk9u7UM_dZrzhfZfEySdiP6HZU8&currency=MXN"></script>
<?php
/*
pagar.php

OBJETIVO: Detectar si hay una sesión activa,
si es asi, guarda datos en la BD. De lo contrario,
redirecciona al login para la autenticación del usuario.

*/
require_once("mysql.lib.php");
require_once("mensajes.lib.php");
require_once("carrito.lib.php");
session_start();

$mysqli = conectar();

extract($_REQUEST);

if ( isset($_SESSION["usuario"]) &&
	 isset($_SESSION["token"]) && 
	 valida_sesion( $_SESSION["usuario"], $_SESSION["token"] ) ) {
	// GENERA PAGO

$u=$_SESSION["usuario"];

$sql = "SELECT MAX(id)+1 as id_venta from venta";
$rs = query( $sql );
$row = $rs->fetch_assoc();
extract( $row );



$sql = "SELECT id AS id_cli from cliente where usuario ='$u'";
$rs2 = query( $sql );
$row2 = $rs2->fetch_assoc();
extract( $row2 );

//Inserta datos en la BD
	$sql = "INSERT INTO venta(id,ticket,fecha,cliente,total)
	VALUES(
		'$id_venta',
		'0',
		NOW(),
		'$id_cli',
		'0'
	)";

	query($sql);



//inserta el detalle
foreach ($_SESSION["carrito"] as $idproducto => $data) {
$sql = "SELECT MAX(id)+1 as id_ventainv from detalle_venta";
$rs3 = query( $sql );
$row3 = $rs3->fetch_assoc();
extract( $row3 );


$sql = "INSERT INTO detalle_venta( id, subtotal, precio, id_inventario, id_venta,cantidad ) VALUES (
	'$id_ventainv',
	'0',
	'".$data["precio"]."',
	'".$data["inventario"]."',
	'$id_venta',
	'".$data["cantidad"]."'
	)";
	query($sql);

		

}
//desaparecer el carrito
vaciar_carrito();

	$sql = "DELETE FROM detalle_venta where id = -1";
	query($sql);

$sql = "SELECT total from venta where id =$id_venta";
$rs = query( $sql );
$row = $rs->fetch_assoc();
extract( $row );

if ($total == 0) {
	$sql = "DELETE FROM venta where id = $id_venta";
	query($sql);
?>
	onCancel: function(data){
			alert("No hay stock");
			console.log(data);
		}
<?php


}


unset( $_SESSION["carrito"] );
if ($consola == 1) {
	desconectar();
	header("location:play2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&msgcode=12&accion=alta&idsu=$idsu&consola=$consola");
}

elseif ($consola == 2) {
	desconectar();
	header("location:nintendo2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&msgcode=12&accion=alta&idsu=$idsu&consola=$consola");
}

elseif ($consola == 3) {
	desconectar();
	header("location:xbox2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&msgcode=12&accion=alta&idsu=$idsu&consola=$consola");
}

else{
desconectar();
	header("location:catalogo.php?u=$_SESSION[usuario]&s=$_SESSION[token]&msgcode=12&accion=alta&idsu=$idsu&consola=$consola");
}

}
else{
	desconectar();
	header("location:login.php?pagar=true");
}


?>