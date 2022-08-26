<?php
session_start();
extract($_REQUEST);
require_once("mensajes.lib.php");
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
  <link rel="stylesheet" type="text/css" href="./css/card.css">
	
  <style>
   ul {
    list-style: none;
    
  }
  a {
    color: inherit;
    text-decoration: none;
    
  }
</style>

	<!--Para bootstrap se debe incluir jquery como primer Script de la página-->
	<script src="js/jquery-3.6.0.min.js"></script>
    <!--Script de brootstrap-->
	<script src="Bootstrap/js/bootstrap.min.js"></script>

	<script src="js/practica7.js"></script>
  <script type='text/javascript'>
      $(document).ready(function(){ 
          $(window).scroll(function(){ 
              if ($(this).scrollTop() > 100) { 
                  $('#scroll').fadeIn(); 
              } else { 
                  $('#scroll').fadeOut(); 
              } 
          }); 
          $('#scroll').click(function(){ 
              $("html, body").animate({ scrollTop: 0 }, 600); 
              return false; 
          }); 
      });
      </script>
</head>
<body>

<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

    <nav class="navbar navbar-expand-md navbar-dark   flex-fill roundeds"style="background: #000000;">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">

<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  INVENTARIO
</a>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
  <li><a class="dropdown-item" href="categoria.php?idsu=1">QUERÉTARO-QUERÉTARO</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="categoria.php?idsu=2">CDMX-IZTAPALAPA</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="categoria.php?idsu=3">GUADALAJARA-ZAPOPAN</a></li>
</ul>
</li>
                
                  <div class="col col-md-12"></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <a class="navbar-brand" href="index.php">
                    <img src="images/Logoindex.svg"
                    style="height: 50px;" />
                </a> 

                  
                
              </ul>
              
  <div class="bg-dark">
  
    

    <a href="admin.php" class="btn btn-outline-warning ">
<i class="fas fa-shopping-cart"></i>

</a>

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





<div class="row">
<?php

  if ($idsu ==1 ):
?>
<br><div class="row">
      
      <div class="p-1  bg-light text-dark mt-5">
      
        <ul class="menu">
            <li class="col col-md-11 mt-5">
              <a class="text-outline-secondary col col-md-2" aria-current="page" href="index.php" style="color: black;">Inicio / Todos los productos</a>
                <h3>Inventario en la sucursal de  Querétaro</h3>
            </li>
      
            
        </ul>
        
      </div>
<?php
  elseif ($idsu ==2 ):
?>
<br><div class="row">
      
      <div class="p-1  bg-light text-dark mt-5">
      
        <ul class="menu">
            <li class="col col-md-11 mt-5">
              <a class="text-outline-secondary col col-md-2" aria-current="page" href="index.php" style="color: black;">Inicio / Todos los productos</a>
                <h3>Inventario en la sucursal de CDMX</h3>
            </li>
      
            
        </ul>
        
      </div>
<?php
  elseif ($idsu ==3 ):
?>
<br><div class="row">
      
      <div class="p-1  bg-light text-dark mt-5">
      
        <ul class="menu">
            <li class="col col-md-11 mt-5">
              <a class="text-outline-secondary col col-md-2" aria-current="page" href="index.php" style="color: black;">Inicio / Todos los productos</a>
                <h3>Inventario en la sucursal de  Guadalajara</h3>
            </li>
      
            
        </ul>
        
      </div>
<?php
  endif;
?>



<?php
require_once("mysql.lib.php");
$mysqli = conectar();

$sql = "SELECT inventario.*,categoria,Nombre,imagen,precio FROM inventario INNER JOIN producto ON (inventario.id_producto = producto.id) WHERE id_sucursal = $idsu ";

$rs = $mysqli->query($sql) or die( "ERROR: ".$mysqli->error );

if( $rs->num_rows > 0):

while( $row = $rs->fetch_assoc() ) : 
extract( $row );
?>

<div class="col-md-3 mt-4">
      <div class="card">
        <div class="card-header">
          
        </div>
        <div class="card-body">
          <div class="media">
          <img src="./upload/fotousuarios/<?=$imagen?>" class="mr-3 rounded" style="width:230px;height:230px;" />
            <h4><?=$Nombre?></h4>
            <h4>$<?=$precio?></h4>
            <div class="media-body">
            </div>
          </div>
        </div>
        
      </div>
    </div>
<?php 
endwhile;
else:
alerta("warning","Por el momento no hay productos disponibles");
endif;
?>
</div>



<!--Pie de pagina-->
<footer class="bg-dark text-center text-white mt-5">
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Social media -->
<section class="mb-4">
  <!-- Facebook -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-facebook-f"></i
  ></a>

  <!-- Twitter -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-twitter"></i
  ></a>

  <!-- Google -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-google"></i
  ></a>

  <!-- Instagram -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-instagram"></i
  ></a>

  <!-- Linkedin -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-linkedin-in"></i
  ></a>

  <!-- Github -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-github"></i
  ></a>
</section>
<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
<!-- Grid row -->
<div class="row mt-3">
<!-- Grid column -->
<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  <!-- Content -->
  <h6 class="text-uppercase fw-bold mb-4">
    <i class="fas fa-gem me-3"></i>Electrodomex
  </h6>
  <p>
    Proporcionamos a todos nuestros clientes esta plataforma con la cual pueden comprar 
    productos con la mejor calidad del pais, garantizando siempre la mejor experiencia
    de las compras en linea.
  </p>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  <!-- Links -->
  <h6 class="text-uppercase fw-bold mb-4">
    Productos
  </h6>
  <p>
    <a href="#!" class="text-reset">Televisiones</a>
  </p>
  <p>
    <a href="#!" class="text-reset">Lavadoras</a>
  </p>
  <p>
    <a href="#!" class="text-reset">Tostadoras</a>
  </p>
  <p>
    <a href="#!" class="text-reset">Licuadoras</a>
  </p>
</div>
<!-- Grid column -->



<!-- Grid column -->
<div class="col-md-45 col-lg-6 col-xl-4 mx-auto mb-md-0 mb-2">
  <!-- Links -->
  <h6 class="text-uppercase fw-bold mb-4">
    Contactos
  </h6>
  <p><i class="fas fa-home me-3"></i> Queretaro, Jurica - Robles No.ext.12 No.int.40, Mexico</p>
  <p>
    <i class="fas fa-envelope me-3"></i>
    Electrodomex@info.com.mx
  </p>
  <p><i class="fas fa-phone me-3"></i> + 442 234 567 88 - Sucursal Queretaro</p>
  <p><i class="fas fa-phone me-3"></i> + 551 567 234 99 - Sucursal CDMX</p>
  <p><i class="fas fa-phone me-3"></i> + 386 654 123 00 - Sucursal Guadalajara</p>
</div>
<!-- Grid column -->
</div>
<!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<br><br><br>

<!-- Section: CTA -->


</div>

    
                      

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
© 2020, , Electrodomex.com.mx, Inc. o afiliados. Todos los derechos reservados.
</div>
<!-- Copyright -->
</footer>

</body>
</html>