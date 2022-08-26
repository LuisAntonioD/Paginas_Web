<?php
	require_once("mensajes.lib.php");
	session_start();
	extract($_REQUEST);
if ( valida_sesion( $u, $s) 	) :
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
<div class="p-1  bg-secondary text-white">

        
        <ul class="menu">
            <li class="col col-md-3">
                <i class="fas fa-phone-alt"></i>
                Llamanos al: 442-111-22-33
            </li>
            <li class="col col-md-8">
                <i class="fas fa-truck"></i>
                Envio gratis y devoluciones al comprar 2 productos o pagar mas de $2,000 MXN
            </li>
          </ul>
         
          
        
    </div>
    <nav class="navbar navbar-expand-md navbar-dark   flex-fill roundeds"style="background: #000000;">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <ul class="menu" >
                    
                    <li>
                      <a href="Sucursales.php?u=<?= $u ?>&s=<?= $s ?>" class="nav-link" aria-current="page" href="#">
                        Sucursales
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    <li>
                      <a href="carrito_ventas.php?u=<?= $u ?>&s=<?= $s ?>" class="nav-link" aria-current="page" href="#">
                        Compras
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    <li>
                      <a href="ayuda.php?u=<?= $u ?>&s=<?= $s ?>" class="nav-link" aria-current="page" href="#">
                        Ayuda
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                  </ul>
                
                  <div class="col col-md-3"></div>
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
      
     <a href="./cliente.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-light ">
     <i class="fas fa-user"></i>
</a>


              <a href="./carrito.php?idsu=1&u=<?= $u ?>&s=<?= $s ?>&accion=alta&consola=4" class="btn btn-outline-warning btn-min">
              <i class="fas fa-shopping-cart "></i>
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



 <!--Carrusel-->
 <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="600px" src="images/nuevo.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="5%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <h1>Todo lo nuevo esta en tus manos.</h1>
            <p>Lo ultimo en modelos recientes.</p>
            <p><a class="btn btn-lg btn-light btn-outline-dark" href="#">Ver mas</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="600px" src="images/nuevo2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="5%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Calidad.</h1>
            <p>Tenemos los productos con mejor calidad en el pais.</p>
            <p><a class="btn btn-lg  btn-light btn-outline-dark" href="#">Ver mas</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="600px" src="images/nuevo3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="5%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <h1>Eficacia</h1>
            <p>Tienes 30 dias para regresar el producto si no te gusto y 1 año de garantia directo con el proveedor.</p>
            <p><a class="btn btn-lg btn-light btn-outline-dark" href="#">Ver mas</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br />
 <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing mt-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <center><h2>Sucursales</h2></center> 

      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/qro.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Querétaro</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="catalogo.php?u=<?= $u ?>&s=<?= $s ?>&accion=alta&idsu=1">Comprar &raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/cdmx.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">CDMX</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="catalogo.php?u=<?= $u ?>&s=<?= $s ?>&accion=alta&idsu=2">Comprar&raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/gdl.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Guadalajara</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="catalogo.php?u=<?= $u ?>&s=<?= $s ?>&accion=alta&idsu=3">Comprar &raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->
    </div>

    


 </div>
 <hr  /><!--Linea horizontal-->

<div class="p-1  bg-secondary text-white mt-5">

    
    <div class="container marketing mt-5">

        <!-- Three columns of text below the carousel -->
        <div class="row">
    
          <div class="col col-lg-4 mt-1">
            <center><i class="fas fa-truck fa-4x"></i><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
    
            <h4 class="fw-normal">Envios nacionales</h4>
            <p>We offer free shipping to more than 40 countries around the world.</p>
          </div></center><!-- /.col-lg-4 -->
          <div class="col col-lg-4 mt-1">
            <center><i class="fas fa-money-check-alt fa-4x"></i><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
    
            <h4 class="fw-normal">Pagos seguros</h4>
            <p>Every purchase is secure thanks to our excellent online safety standards.</p>
          </div></center><!-- /.col-lg-4 -->
          <div class="col col-lg-4 mt-1">
            <center><i class="fas fa-shopping-bag fa-4x"></i></i><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
    
            <h4 class="fw-normal">Devoluciones simples</h4>
            <p>Every purchase you make comes with a 30-day money-back guarantee.</p>
          </div></center><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
        </div>
     
      
    
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

<?php

else:
	header("location:admin.php?msgcode=7");
endif;
?>