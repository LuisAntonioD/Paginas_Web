<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();


extract( $_REQUEST );//Extrae las variables de $correo y $contraseña

if (verifica_usuario( $correo,$contrasenia ) ) {
    //Crea la sesion
    session_start();

    session_regenerate_id();
    $token = session_id();

    $sql = "select nomusuario,foto from usuarios where correo = '$correo'";
    $rs = query( $sql );
    if ( $row = $rs -> fetch_assoc() ) {
        extract( $row );
    }

    $_SESSION[ "correo" ]     = $correo;
    $_SESSION[ "token" ]      = $token;
    $_SESSION[ "nomusuario" ] = $nomusuario;
    $_SESSION[ "foto" ]       = $foto;



    //Redireccionar a la pagina home

    desconectar();
    header( "location:Trabajo7_home.php?u=$correo&s=$token");

}
else {
    desconectar();
    header( "location:Trabajo7.php?msgcode=8");
}
?>