<?php
require_once( "mensajes.lib.php" );
require_once( "mysql.lib.php" );
session_start();

extract( $_REQUEST );
//die(var_dump($_REQUEST));

if ( valida_sesion ( $u, $s ) ) :
    
    $mysqli = conectar();


    $sql = "UPDATE  cliente set
    Nombre = '$Nombre',
    ApellidoPat = '$ApellidoPat',
    ApellidoMat = '$ApellidoMat',
    Colonia = '$Colonia',
    Calle = '$Calle',
    No_inte = '$No_inte',
    No_exte = '$No_exte',
    Cp = '$Cp',
    Telefono = '$Telefono',
    Rfc = '$Rfc',
    municipio = '$municipio'
    where id = '$id'";


    query( $sql );
    



//Desconecta de la base de datos
desconectar();
//if ( $id_producto == $id_producto ) {
    //if( $id_sucursal == $id_sucursal ){
        //$msgcode =  18;
    //}
    
//}
//else{
   header ( "location:usuario_formulario.php?u=$u&s=$s".
       ( $msgcode != 0 ? "&msgcode=$msgcode" : "" ) ); //Te redirecciona a otra pagina  
//}


//header() no acepta ningun codigo echo

else :
header( "location:admin.php?msgcode=7" );
endif;

?>