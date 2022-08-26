<?php

require_once( "mensajes.lib.php" );
session_start();

extract( $_REQUEST );

if ( valida_sesion( $u,$s ) ) :

    session_unset();
    session_destroy();

    header( "location:admin.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;

?>