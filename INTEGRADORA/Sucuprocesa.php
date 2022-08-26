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



$sql = "insert into inventario values(
        '$id',
        '$cantidad',
        '$id_sucursal',
        '$id_producto',
        '$estatus'
        )";
    query( $sql );




    desconectar();
    header ( "location:admin.php?msgcode=15"); //Te redirecciona a otra pagina 


?>

