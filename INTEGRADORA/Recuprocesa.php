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


$sql = "update  usuario set
                    usuario = '$usuario',
                    password = '$password'
                    where usuario = '$usuario'";
query( $sql );




desconectar();
header( "location:Recuperar.php?msgcode=14" );





?>
