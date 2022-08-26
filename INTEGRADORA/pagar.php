<Script src="https://www.paypal.com/sdk/js?client-id=AYkoPZue8k1UUI6FbW5LAnvxVMJkXB1V-MuOjy6tcWed8gUarCznn0BzCDBXh7Q4-2TbYlTHXPsUWInt&currency=MXN"></script>



<?php
/*
pagar.php
OBJETIVO: detectar si hay sesion activa, si es asi, guarda datos en la BD de lo contrario, redireccionara al login para autentificacion del usuario
*/


require_once("mysql.lib.php");
require_once("mensajes.lib.php");
require_once("carrito.lib.php");
session_start();

$mysqli = conectar();
extract($_REQUEST);
if( isset ( $_SESSION["usuario"]) && 
    isset ( $_SESSION["token"]) && 
    valida_sesion($_SESSION["usuario"], $_SESSION["token"])){  

        //die("estoy pagando");
        
$u=$_SESSION["usuario"];

    //GENERA EL PAGO
    $sql="INSERT into factura(fecha_fac) values(
        now()
        )";

        $rs = query($sql);
        
    $idfactura = $mysqli->insert_id;
        

    $sql = "SELECT id AS id_cliente from usuario where usuario ='$u'";
$rs2 = query( $sql );
$row2 = $rs2->fetch_assoc();
extract( $row2 );

    //insertar datos en la BD
  
    $sql = "insert into venta (idFact,fecha,total,usuario) 
    values (
        NOW(),
        '$idfactura',
        '$monto_vent= 0',
        '$usuario',



    )";


    
query($sql);
    
//obtiene la mas reciente pk generado por un campo auto_increment
$id_ven = $mysqli -> insert_id;
//insertar el detalle

//var_dump($_SESSION["carrito"]);
foreach($_SESSION["carrito"] as $id_ven=> $data){
    extract($_SESSION["carrito"]);
    $sql="insert into detalle_venta (preciodetvent,cantidad,subtotal,id_venta,id_inventario) VALUES (
        '".$data["Precioventa"]."',
        '".$data ["cantidad"]."',
        '".$data ["subtotal"]."',
        '$id_ven',
        '".$data ["id_inventario"]."'
        
        
    )";


    query($sql);
}



//desaparecer el carrito
   vaciar_carrito();
   unset($_SESSION["carrito"]);

   desconectar();
   header("location:carrito.php?u=$_SESSION[usuario]&s=$$_SESSION[token]&msgcode=12");
}else{
    desconectar();
    header("location:inicio_sesion3.php?pagar=true");
}
?>