<?php
//Activar las sesiones php(Tambien recupera una sesion activa)
session_start();

//Extrae usuarios de $_REQUEST
extract ( $_REQUEST );

//CREAR VARIABLES UNICAS DE SESION UNICAS
$_SESSION[ "usuario" ] = $usuario;
$_SESSION[ "visitas" ] = 0;


//Crear ID unico de sesión y lo guarda en la variable de sesion
session_regenerate_id();
$token = session_id();
$_SESSION [ "token" ] = $token;

//Redirecciona a la pagina de visitas
header( "location:practica23_visitas.php?usuario=$usuario&token=$token" );

?>