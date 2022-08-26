<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();


extract( $_REQUEST );//Extrae las variables de $correo y $contraseña

if (verifica_usuario( $usuario,$password ) ) {
    //Crea la sesion
    session_start();

    session_regenerate_id();
    $token = session_id();

    $sql = "select usuario,tipo from usuario where usuario = '$usuario'";
    $rs = query( $sql );

    if ( $row = $rs -> fetch_assoc() ) {
        extract( $row );
    }

 
    $_SESSION[ "usuario" ]     = $usuario;
    $_SESSION[ "token" ]      = $token;
    $_SESSION[ "tipo" ] = $tipo;
    



    //Redireccionar a la pagina home

    desconectar();
    if($tipo == "Administrador" ){
        header( "location:admin_home.php?u=$usuario&s=$token");


        }
        elseif($tipo == "Cliente" ){
            header( "location:cliente_home.php?u=$usuario&s=$token");
        }
    
}
else {
    desconectar();
    header( "location:admin.php?msgcode=8");
}



?>







<!--if( ($_SESSION[ "tipo" ] == "administrador" ) ){   //isset
    header( "location:admin.php?msgcode=7" );
}
else{
    header( "location:admin.php")

}
if ($_SESSION[ "tipo" ] == "administrador" ) {
    
}
    desconectar();
    header( "location:admin_home.php?u=$usuario&s=$token");
else{
    desconectar();
    header( "location:admin.php?msgcode=7");
}