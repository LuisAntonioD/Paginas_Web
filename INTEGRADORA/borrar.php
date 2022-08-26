<?php
require_once( "carrito.lib.php" );
session_start();

borra_producto( $_REQUEST[ "id" ] );

header( "location:carrito.php" )
?>