<?php
require_once( "mensajes.lib.php" );

session_start();

extract( $_REQUEST );


require_once( "mysql.lib.php" );
$mysqli = conectar();

extract( $_REQUEST );

//Verificar que no exista el usuario
$sql = "select * from usuario where usuario = '$usuario'";
$rs = query( $sql );



$sql = "insert into cliente (Nombre,ApellidoPat,ApellidoMat,Colonia,Calle,No_inte,No_exte,Cp,Telefono,Rfc,usuario,password,municipio,imagen) values(
        '$Nombre',
        '$ApellidoPat',
        '$ApellidoMat',
        '$Colonia',
        '$Calle',
        '$No_inte',
        '$No_exte',
        '$Cp',
        '$Telefono',
        '$Rfc',
        '$usuario',
        '$password',
        '$municipio',
        '".$_FILES[ "imagen" ][ "name" ]."'
        )";
    query( $sql );
//Sube la foto
if ( !move_uploaded_file( 
    $_FILES[ "imagen" ][ "tmp_name" ],
    "upload/fotousuarios/".$_FILES[ "imagen" ][ "name" ] ) ) {   
    desconectar();
    //header( "location:admin_prod_home.php?msgcode=11" );
    exit( 0 );
}



desconectar();
header( "location:admin.php?msgcode=9" );






?>