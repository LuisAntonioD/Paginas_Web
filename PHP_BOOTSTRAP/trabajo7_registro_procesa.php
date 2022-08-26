<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

extract( $_REQUEST );

//Verificar que no exista el correo
$sql = "select * from usuarios where correo = '$correo'";
$rs = query( $sql );

if ( $rs -> num_rows > 0 ) {
    desconectar();
    header( "location:trabajo7_registro.php?msgcode=10");
    exit( 0 );
}

$sql = "insert into usuarios values(
        '$correo',
        '$contrasenia',
        '$nomusuario',
        '".$_FILES[ "foto" ][ "name" ]."'   
        )";
query( $sql );

//Sube la foto
if ( !move_uploaded_file( 
    $_FILES[ "foto" ][ "tmp_name" ],
    "upload/fotousuarios/".$_FILES[ "foto" ][ "name" ] ) ) {   
    desconectar();
    header( "location:Trabajo7.php?msgcode=11" );
    exit( 0 );
}


desconectar();
header( "location:Trabajo7.php?msgcode=9" );





?>

