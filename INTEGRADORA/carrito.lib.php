<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
/*
Biblioteca de de carrito de compra 
utilizara la variable de sesion "carrito"

$_SESSION["carrito"]

que sera un arreglo asociativo en donde 
cada elemento tendra los siguientes datos:

+idproducto   KEY
-nomproducto
-cantidad
-precio
-subtotal

*/

require_once("mysql.lib.php");
require_once("mensajes.lib.php");


function mostrar_carrito(){
	$totalsub = 0;
	extract($_REQUEST);
if ( isset($_SESSION["carrito"]) && count($_SESSION["carrito"]) > 0) {
	echo '<table class="table ">';
	echo '<tr class="bg-dark text-white text-center">
	<th class="col-md-2">Producto</th>
	<th class="col-md-2">Imagen</th>
	<th class="col-md-2">Cantidad</th>
	<th class="col-md-2">Precio</th>
	<th class="col-md-2">Subtotal</th>
	<th class="col-md-2">Borar articulo</th>
	</tr>';

	foreach ($_SESSION["carrito"] as $idproducto => $data) {
		echo '<tr class="text-center">
		<td class="ps-3 pe-3">'.$data["Nombre"].'</td>
		<td class="ps-3 pe-3"><img src="./images/'.$data["imagen"].'" class="mr-3 rounded" style="width:100px;height:100px;" /></td>
		<td>'.$data["cantidad"].'</td>
		<td>$'.number_format($data["precio"],2, ".", ",").'</td>
		<td>$'.number_format($data["subtotal"],2,".", ",").'</td>
		<td class="text-center"><a class="btn "
		href="carrito_borrar.php?idproducto='.
		$idproducto.'&u='.$_SESSION["usuario"].'&s='.$_SESSION["token"].'&cats=alta&idsu='.$idsu.'&cat='.$idsu.'"><img src="images/trash.gif" alt="envios" style="width:30px"></a></td>
		</tr>';
	$totalsub = $data["subtotal"] + $totalsub;
	}
	echo '</table>';
}
else{
	alerta("warning","No hay productos en el carrito");
}
$_SESSION["totalsub"] = $totalsub;
}



function agrega_carrito($idproducto, $cantidad, $inventario){

	global $mysqli;
	
	if (!isset($_SESSION["carrito"])) {
		$_SESSION["carrito"] = array();
	}

	$sql = "SELECT Nombre, precio,imagen
			FROM producto
			WHERE id = '$idproducto'";
			$rs = query( $sql );
			if ($row = $rs->fetch_assoc()) {
		extract($row);

		$_SESSION["carrito"][$idproducto] = array(
		"Nombre"=> $Nombre,
		"imagen"=> $imagen,
		"cantidad"=> $cantidad,
		"precio"=> $precio,
		"subtotal"=> $precio * $cantidad,
		"inventario"=> $inventario
	);
	}
}



function vaciar_carrito(){
	if (isset($_SESSION["carrito"])) {
		unset($_SESSION["carrito"]);
	}
}



function borra_producto($idproducto){
	if (isset($_SESSION["carrito"])) {
		if (isset($_SESSION["carrito"][$idproducto])) {
			unset($_SESSION["carrito"][$idproducto]);
		}
	}
}



function total_productos_carrito(){
	return isset($_SESSION["carrito"]) ? count($_SESSION["carrito"]) : 0;
	
}

?>