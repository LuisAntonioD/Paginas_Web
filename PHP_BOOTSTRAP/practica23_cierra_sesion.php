<?php
require_once ( "practica23_head.php" );


session_start();
//Extrae variables de la URL(Usuario / token)
extract( $_REQUEST );

if (isset( $_SESSION[ "usuario" ] ) &&
    isset( $_SESSION[ "token" ] ) &&
    $_SESSION[ "usuario" ] == $usuario &&
    $_SESSION[ "token" ] == $token ){
    
    //Eliminar las variables de las sesion
    session_unset();

    //Destriur la sesion
    session_destroy();


    header( "location:practica23.php" );
}
else{
    header("location:practica23.php?msgcode=6" );
}
?>