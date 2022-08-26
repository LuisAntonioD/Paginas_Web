<?php
require_once( "mensajes.lib.php" );
session_start();

extract( $_REQUEST );

if ( valida_sesion(  $u,$s )) :
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
$mysqli = conectar();


extract( $_REQUEST);

//Normalización o validación de datos 
if ( $accion == "alta" || $accion == "cambio" ) {

    
    $cantidad = mb_strtoupper($cantidad);
    $id_sucursal = mb_strtoupper($id_sucursal);
    $id_producto = mb_strtoupper($id_producto);
    $estatus = mb_strtoupper($estatus);



}

$msgcode = 0;
    switch ( $accion ) {
            case "alta":

                $sql = "select * from inventario where id = '$id'";
                $rs = query( $sql );

                $idi = "select max(id)+1 as idinv from inventario";
                $rs2 = query($idi);
                $row = $rs2->fetch_assoc();
                extract($row);


                if ( $rs -> num_rows > 0) {
                    //Hay duplicado si entra aqui
                    desconectar();
                    header ( "location:inventario_formulario.php?accion=alta&msgcode=4&u=$u&s=$s" ); //Te redirecciona a otra pagina 
                    exit ( 0 );
                }


                $sql = "insert into inventario values(
                    '$idinv',
                    '$cantidad',
                    '$id_sucursal',
                    '$id_producto',
                    '$estatus'
                    )";
                    $msgcode = 1;

              
                    break;
                    case "cambio":
                        $sql = "update  inventario set
                            cantidad = '$cantidad',
                            estatus = '$estatus'
                            where id = '$id'";
        
                            $msgcode = 2;
        
                            break;
            case "baja":
                $sql = "delete from inventario where id = '$id'" ;

                $msgcode = 3;
                break;

        }
query( $sql );
    if ( $mysqli -> affected_rows == 0 ) {
            $msgcode = $accion != "cambio" ?  5 : 6;
    }



    //Desconecta de la base de datos
    desconectar();
    //if ( $id_producto == $id_producto ) {
        //if( $id_sucursal == $id_sucursal ){
            //$msgcode =  18;
        //}
        
    //}
    //else{
       header ( "location:inventario_home.php?u=$u&s=$s".
           ( $msgcode != 0 ? "&msgcode=$msgcode" : "" ) ); //Te redirecciona a otra pagina  
    //}
    

//header() no acepta ningun codigo echo

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>

<!--    header ( "location:Trabajo7_home.php?accion=cambio&msgcode=6&u=$u&s=$s" ); //Te redirecciona a otra pagina 