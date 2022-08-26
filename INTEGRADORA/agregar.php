<?php
require_once("mysql.lib.php");
require_once("carrito.lib.php");

session_start();  
$mysqli = conectar();

extract( $_REQUEST );
var_dump($_REQUEST);
//extract( $_SESSION["carrito"] );

$sql = "SELECT * FROM inventario";
$rs = query( $sql);

while ( $row = $rs->fetch_assoc() ) {
    $id = $row[ "id" ];

    $nomvar = "cantidad_$id";
    if (isset( $$nomvar ) && $$nomvar >0 ) {
        var_dump($$nomvar);
        agregar_carrito( $id, $$nomvar );
    }
}

desconectar();
header( "location:carrito.php" );
?>


]