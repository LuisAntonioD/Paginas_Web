<?php
require_once( "mysql.lib.php" );
function alerta($tipo,$mensaje){
    echo'<div class="col-md-4 opacity-75 alert alert-' .$tipo. ' alert-dismissible fade show" role="alert"><strong>Electrodomex</strong><hr  />' .$mensaje. '.</div>';
    


}

function codigo_alerta( $code ){
    $sql = "select * from mensajes where msgcode = '$code'";
    $rs = query( $sql );
    if ( $row = $rs -> fetch_assoc() ) {
        extract( $row );//$msgcode,$mensaje,$tipo
        alerta( $tipo,$mensaje);
    }
}

function valida_sesion( $u, $s){
    return 
    isset( $_SESSION[ "usuario" ] ) &&
    isset( $_SESSION[ "token" ] ) &&
    $_SESSION[ "usuario" ] == $u &&
    $_SESSION[ "token" ]  == $s; 
}
?>
