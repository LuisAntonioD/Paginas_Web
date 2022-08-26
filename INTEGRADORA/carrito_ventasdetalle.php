<?php 
require_once("mysql.lib.php");
require_once("mensajes.lib.php");
session_start();
$mysqli = conectar();

extract($_REQUEST); //extrae variables $u, $s, $idventa

if (valida_sesion($u,$s)) :

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="Luis Antonio Arredondo Deanda">

	<title>ELECTRODOMEX</title>
	  <link rel="icon" type="image/jpg" href="images/Logoindex.svg">
	 <!--css de brootstrap-->
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--css de fontawesome-->
	<link href="Fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./css/Estilos.css">

	<!--Para bootstrap se debe incluir jquery como primer Script de la página-->
	<script src="js/jquery-3.6.0.min.js"></script>
    <!--Script de brootstrap-->
	<script src="Bootstrap/js/bootstrap.min.js"></script>

	<script src="js/practica7.js"></script>
</head>
<body>


    <nav class="navbar navbar-expand-md navbar-dark   flex-fill roundeds"style="background: #000000;">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <ul class="menu" >
                    <li>
                      <a href="catalogo.php?u=<?= $u ?>&s=<?= $s ?>&accion=alta&idsu=1" class="nav-link" aria-current="page">
                        PRODUCTOS
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    <li>
                      <a href="carrito_ventas.php?u=<?= $u ?>&s=<?= $s ?>" class="nav-link" aria-current="page" >
                        
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
						 COMPRAS
                      </a>
                    </li>
                  </ul>
                
                  <div class="col col-md-5"></div>
                  <a class="navbar-brand" href="cliente_home.php?u=<?= $u ?>&s=<?= $s ?>">
                    <img src="images/Logoindex.svg"
                    style="height: 50px;" />
                </a> 

                  
                
              </ul>
              
  <div class="bg-dark">
  <a href="admin_cerrar.php?u=<?=$u?>&s=<?=$s?>"
			class="btn btn-outline-danger ">
				<i class="fas fa-sign-out-alt"></i>
				
			</a>
     


              <a href="./carrito.php?idsu=1&u=<?= $u ?>&s=<?= $s ?>&accion=alta&consola=4" class="btn btn-outline-warning btn-min">
              <i class="fas fa-shopping-cart  "></i>
                
              </span></a>
</div>
          
          
              
            <!--  
        <form class="d-flex" role="search">
            
          <input class="form-control me-2" style="width: 300px;" type="search" placeholder="Buscar productos,marcas y mas" aria-label="Buscar">
          <button class="btn btn-outline-light"  type="submit"><i class="fas fa-search fa-1x"></i>
          </button>
        </form>
        -->
      </div>
    
      </nav>
	  <br><br><br>

<?php
$sql = "SELECT * FROM venta WHERE id = '$idven'";
$rs = query($sql);
if ( $row = $rs->fetch_assoc() ) {
	$fecha = $row["fecha"];
}
$fecha = $fecha ?? "--";

$sql = "SELECT Nombre,imagen, detalle_venta.cantidad, detalle_venta.precio, detalle_venta.cantidad * detalle_venta.precio as subtotal,detalle_venta.cantidad
		FROM detalle_venta
		inner join inventario on (detalle_venta.id_inventario = inventario.id)
			inner join producto on (inventario.id_producto = producto.id)
			inner join venta on (detalle_venta.id_venta = venta.id)
		WHERE venta.id = '$idven'";
$rs = query($sql);	

$sql = "SELECT Nombre as clientenom, ApellidoPat, ApellidoMat FROM cliente WHERE usuario = '$u'";	
$rs2 = query($sql);
$row2 = $rs2->fetch_assoc();
extract($row2);

$sql = "SELECT ticket as tic FROM venta WHERE id = id";	
$rs3 = query($sql);
$row3 = $rs3->fetch_assoc();
extract($row3);

?>	


<div class="container">
<button type="button" 
        class="btn btn-outline-dark btn-lg mt-2 text-secondary"
        data-bs-toggle="collapse"
        data-bs-target="#texto"
        aria-expanded="false"
        aria-controls="texto">
        Datos de la compra
    </button>
	<br><br>
<div class="card collapse mt-3 col-md-5 " id="texto">
		
        <div class="card-body">
		<div class="row">
<div class="col col-md-12">
<table class="table table-bordered table-dark">
		<tr>
			<th class="col-md-1">Compra:</th>
			<td><?=$idven?></td>
		</tr>
		<tr>
			<th>Fecha:</th>
			<td><?=$fecha?></td>
		</tr>
		<tr>
			<th>Cliente:</th>
			<td><?=$clientenom?> <?=$ApellidoPat?> <?=$ApellidoMat?></td>
		</tr>
</table>
</div>
</div> 
        </div>
        
	</div>

<table class="table table-horver">
	<thead class="table-dark">
		<tr class="text-center">
			<th>Producto</th>
			<th>Imagen</th>
			<th>Cantidad</th>
			<th>Precio unitario</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	
<?php
$total = 0;
while ($row = $rs->fetch_assoc()):
	extract($row);
$total += $subtotal;
?>

<tr class="text-center">
	<td class="text-start"><?=$Nombre?></td>
	<td class="text-start">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="./images/<?=$imagen?>" class="mr-3 rounded" style="width:100px;height:100px;" /></td>
	<td><?=$cantidad?></td>
	<td class="text-end pe-5">$<?= number_format( $precio,2, ".", "," ) ?></td>
	<td class="text-end pe-5">$<?= number_format( $subtotal,2, ".", "," ) ?></td>
</tr>
<?php
endwhile;
?>

<tr>
	<td colspan="4" class="text-end pe-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>TOTAL A PAGAR</strong></td>
	<td class="text-end pe-5 text-danger">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>$<?= number_format( $total,2, ".", "," ) ?></strong></td>
</tr>
</tbody>
</table>
</div>
<br><br><br>

<?php 
desconectar();
require_once("carrito_foot.php");

else :  //EN CASO DE SESIÓN INVÁLIDA
	header("location:login.php?msgcode=7");
endif;
?>