<?php
require_once("carrito.lib.php");
session_start();

vaciar_carrito();

header( "location:carrito.php" );
?>