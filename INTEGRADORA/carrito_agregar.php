<?php
require_once("mysql.lib.php");
require_once("carrito.lib.php");
session_start();
$mysqli = conectar();

extract($_REQUEST); //recupera variables "cantidad_x"

	$$nomvar = $cantida;
	if (isset($$nomvar) && $$nomvar > 0 ) {
		agrega_carrito($id_vide, $$nomvar,$id);
	}



desconectar();

if ($consola == 1) {
header("location:play2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&idsu=$idsu&cat=alta&id=$id&cat=$consola");
}
elseif ($consola == 2) {
	header("location:nintendo2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&idsu=$idsu&cat=alta&id=$id&cat=$consola");
}
elseif ($consola == 3) {
	header("location:xbox2.php?u=$_SESSION[usuario]&s=$_SESSION[token]&idsu=$idsu&cat=alta&id=$id&cat=$consola");
}
else{
header("location:catalogo.php?u=$_SESSION[usuario]&s=$_SESSION[token]&idsu=$idsu&cat=alta&id=$id&cat=$consola");
}
?>