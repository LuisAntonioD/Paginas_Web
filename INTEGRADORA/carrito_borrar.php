<?php
require_once("carrito.lib.php");

session_start();
extract($_REQUEST);
borra_producto($_REQUEST["idproducto"]);

header("location:carrito.php?u=$_SESSION[usuario]&s=$_SESSION[token]&s=$_SESSION[token]&s=$_SESSION[token]&s=$_SESSION[token]&s=$_SESSION[token]&s=$_SESSION[token]&s=$_SESSION[token]&idsu=$idsu&accion=alta&consola=$consola");
?>