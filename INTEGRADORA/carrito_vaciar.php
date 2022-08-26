<?php
require_once("carrito.lib.php");
session_start();
vaciar_carrito();
extract($_REQUEST);
header("location:carrito.php?u=$_SESSION[usuario]&s=$_SESSION[token]&idsu=$idsu&cat=alta&cat=$consola");


?>