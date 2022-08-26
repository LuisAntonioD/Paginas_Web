<?php
require_once( "mensajes.lib.php" );
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
session_start();

extract( $_REQUEST );

if ( valida_sesion(  $u,$s )) :
$mysqli = conectar();


extract( $_REQUEST);

//Normalización o validación de datos 
if ( $accion == "alta" || $accion == "cambio" ) {

    
    //$nombre = mb_strtoupper( $nombre );
    //$grupo = mb_strtoupper( $grupo );

}

$msgcode = 0;
    switch ( $accion ) {
            case "alta":

                $sql = "select * from producto where Nombre = '$Nombre'";
                $rs = query( $sql );

                //$idp = "select max(id)+1 as idpro from producto";
                //$rs2 = query($idp);
                //$row = $rs2->fetch_assoc();
                //extract($row);

                if ( $rs -> num_rows > 0) {
                    //Hay duplicado si entra aqui
                    desconectar();
                    header ( "location:admin_formulario.php?accion=alta&msgcode=4&u=$u&s=$s" ); //Te redirecciona a otra pagina 
                    exit ( 0 );
                }


                $sql = "insert into producto values(
                    '$id',
                    '$Nombre',
                    '$Categoria',
                    '$precio',
                    '".$_FILES[ "imagen" ][ "name" ]."'
                    )";

                    //Sube la foto
if ( !move_uploaded_file( 
    $_FILES[ "imagen" ][ "tmp_name" ],
    "upload/fotousuarios/".$_FILES[ "imagen" ][ "name" ] ) ) {   
    desconectar();
    //header( "location:admin_prod_home.php?msgcode=11" );
    exit( 0 );
}
                    $msgcode = 1;

              
                    break;
            case "cambio":
                $sql = "update  producto set
                    precio = '$precio'
                    where id = '$id'";

                    $msgcode = 2;

                    break;
            case "baja":
                $sql = "delete from producto where id = '$id'" ;

                $msgcode = 3;
                break;

        }
query( $sql );



    if ( $mysqli -> affected_rows == 0 ) {
            $msgcode = $accion != "cambio" ?  5 : 6;
    }

    //Desconecta de la base de datos
    desconectar();
    header ( "location:admin_prod_home.php?u=$u&s=$s".
           ( $msgcode != 0 ? "&msgcode=$msgcode" : "" ) ); //Te redirecciona a otra pagina 

//header() no acepta ningun codigo echo

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>

<!--    header ( "location:Trabajo7_home.php?accion=cambio&msgcode=6&u=$u&s=$s" ); //Te redirecciona a otra pagina