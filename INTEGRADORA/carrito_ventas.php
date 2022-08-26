<?php 
require_once("mysql.lib.php");
require_once("mensajes.lib.php");
session_start();
$mysqli = conectar();

extract($_REQUEST);

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
                      <a href="catalogo.php?u=<?= $u ?>&s=<?= $s ?>&accion=alta&idsu=1" class="nav-link" aria-current="page" href="#">
                        PRODUCTOS
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    
                  </ul>
                
                  <div class="col col-md-11"></div>
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
<div class="container">


<h4 class="text-dark mt-3">Mis pedidos&nbsp&nbsp&nbsp&nbsp <img src="images/envio.gif" alt="envios" style="width:50px"></h4>

<?php
$sql = "SELECT 
		venta.id AS idven,
		fecha,
		count(*) AS numproductos,
		sum(cantidad * detalle_venta.precio) AS total
		FROM venta
			inner join detalle_venta on (detalle_venta.id_venta = venta.id)
			inner join cliente on (venta.cliente = cliente.id)
		WHERE 
			usuario = '$u'
		GROUP BY idven";
$rs = query($sql);


if ( $rs->num_rows > 0) :
?>	
<?php


$sql = "SELECT ticket as tic FROM venta WHERE id = id";	
$rs3 = query($sql);
$row3 = $rs3->fetch_assoc();
extract($row3);

?>	
<table class="table table-horver">
	<thead class="table-dark">
		<tr>
			<th>&nbsp&nbsp&nbspCompra</th>
			<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFecha</th>
			<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProductos</th>
			<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal</th>
			<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAcciones</th>
		</tr>
	</thead>
	<tbody>

<?php
while ($row = $rs->fetch_assoc()):
	extract($row);
?>	

<tr class="text-center">
	<td><?=$idven?></td>
	<td><?=$fecha?></td>
	<td><?=$numproductos?></td>
	<td class="text-end pe-5">$<?= number_format( $total,2, ".", "," ) ?></td>
	<td>
		<a href="carrito_ventasdetalle.php?idven=<?=$idven?>&u=<?=$u?>&s=<?=$s?>"
		class="btn btn-outline-light text-dark btn-sm">
		<img src="images/details.gif" alt="envios" style="width:30px">
		Ver detalle
		</a>
		<a href="carrito_factura.php?idven=<?=$idven?>&u=<?=$u?>&s=<?=$s?>"
		class="btn btn-outline-light text-dark  btn-sm" target="_blank">
		<img src="images/pdf.gif" alt="envios" style="width:30px">
		Factura
		</a>
	</td>
</tr>
<?php
endwhile;
?>
	</tbody>
</table>







<?php 
else :
	alerta("danger","No has realizado compras...");
endif;



desconectar();
require_once("carrito_foot.php");

else :  //EN CASO DE SESIÓN INVÁLIDA
	header("location:inicio_sesion.php?msgcode=7");
endif;
?>
