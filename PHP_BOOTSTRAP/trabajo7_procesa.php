<?php
require_once( "mensajes.lib.php" );
session_start();

extract( $_REQUEST );

if ( valida_sesion(  $u,$s ) ) :
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
$mysqli = conectar();


extract( $_REQUEST);

//Normalización o validación de datos 
if ( $accion == "alta" || $accion == "cambio" ) {

    $nombre = mb_strtoupper( $nombre );
    $grupo = mb_strtoupper( $grupo );

    $beca = isset( $beca ) ? 1 : 0;
}

$msgcode = 0;
    switch ( $accion ) {
            case "alta":

                $sql = "select * from alumnos where matricula = '$matricula'";
                $rs = query( $sql );
                if ( $rs -> num_rows > 0) {
                    //Hay duplicado si entra aqui
                    desconectar();
                    header ( "location:trabajo7_formulario.php?accion=alta&msgcode=4&u=$u&s=$s" ); //Te redirecciona a otra pagina 
                    exit ( 0 );
                }


                $sql = "insert into alumnos values(
                    '$matricula',
                    '$nombre',
                    '$sexo',
                    '$beca',
                    '$grupo',
                    '$idcarrera',
                    '$u',
                    '$u',
                    NOW(),
                    NOW())";

                    $msgcode = 1;
                    break;
            case "cambio":
                $sql = "update  alumnos set
                    nombre = '$nombre',
                    sexo = '$sexo',
                    beca = '$beca',
                    grupo = '$grupo',
                    idcarrera = '$idcarrera',
                    usumod = '$u',
                    feculmod = NOW()
                    where matricula = '$matricula'";

                    $msgcode = 2;

                    break;
            case "baja":
                $sql = "delete from alumnos where matricula = '$matricula'" ;

                $msgcode = 3;
                break;

        }
query( $sql );
    if ( $mysqli -> affected_rows == 0 ) {
            $msgcode = $accion != "cambio" ?  5 : 6;
    }

    //Desconecta de la base de datos
    desconectar();
    header ( "location:Trabajo7_home.php?u=$u&s=$s".
           ( $msgcode != 0 ? "&msgcode=$msgcode" : "" ) ); //Te redirecciona a otra pagina 

//header() no acepta ningun codigo echo

else :
    header( "location:Trabajo7.php?msgcode=7" );
endif;
?>

<!--    header ( "location:Trabajo7_home.php?accion=cambio&msgcode=6&u=$u&s=$s" ); //Te redirecciona a otra pagina 