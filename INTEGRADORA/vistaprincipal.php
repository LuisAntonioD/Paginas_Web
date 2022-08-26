
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <!--CSS de bootstrap-->
    <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--CSS de font-awesome-->
    <link href="./Fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!--para bootstrat se debe de incluir JQuery como primer -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!--Script de boostrap-->
    <script src="./Bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
  


<?php
require_once( "mensajes.lib.php" );
session_start();

extract( $_REQUEST );

if ( valida_sesion(  $u,$s ) ) :
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
$mysqli = conectar();


extract( $_REQUEST);
?>
  <div  >
        
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white mt-2 flex-fill roundeds"  style="color: white>
    
        <div class="container-fluid">
            <a class="navbar-lingt" href=""><img src="./imagenes/lili50.jpg"
				style="height: 100px;" /></a>
       
        
                

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
           data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                      <a class= "nav-link text-white" href="cerrar.php" >Cerrar sesión</a> </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="conocenos.php">Conocenos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 
                Sucursales 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " style="text-dark" href="Sucursal1.php"><b>Sucursal Queretaro</b></a></li>
                  <li><a class="dropdown-item" href="./sucursal2.php">Sucursal Hidalgo </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./sucursal3.php">Sucursal Ezequiel Montes </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-white" href="cpmpras.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mi perfil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="ventas.php?u=<?= $u ?>&s=<?= $s ?>">Mis ventas </a></li>
                  
                  
                </ul>
              </li>
              <li class="nav-item">
              
              </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button type="button" class="btn btn-warning">
                  <i class="fas fa-search fa-2x"></i>
                </button>

                <a href="carrito.php" class="btn btn-secondary" ><i class="fas fa-shopping-cart"></i>
                  Carrito 
                </a>
             
          </div>
        </div>
      </nav>

      <div class="media ">

        <div class="navbar navbar-expand-lg " style="background-color: #d19df4;">
          <center> <h4 class=""> BIENVENIDO  </h4> </center>
          </div>
         
      </div>
         
     <!--Carrusel-->


<div class="row">
    
      <div class="col-md-15">
        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2500">
                    <a href="practica02_editoriales.html"><img src="./imagenes/lili30.jpg" alt="Muñecas leles " class="d-block rounded w-100 opacity-75"
                      style="width:700px;height:450px;"></a>
                    <div class="carousel-caption">
                      <strong><h5>Muñecas leles </h5>
                      <p>Los mejores precios del mes </p></strong>
                    </div>
                  </div>
  
              <div class="carousel-item" data-bs-interval="2500">
                <a href="practica02_deportes.html"><img src="./imagenes/lili14.jpg" alt="Juguetes de madera " class="d-block rounded w-100 opacity-75"
                  style="width:700px;height:450px;"></a>
                <div class="carousel-caption">
                  <strong><h5>Juguetes de madera</h5>
                  <p>Conoce los mojores juguetes hechos a mano </p></strong>
                </div>
              </div>
  
            <div class="carousel-item" data-bs-interval="2500">
              <a href="practica02_cultura.html"><img src="./imagenes/lili16.jpg" alt="Reproduccion" class="d-block rounded w-100 opacity-75"
              style="width:700px;height:450px;"></a>
              <div class="carousel-caption">
                <strong><h5>La lotería Mexicana</h5>
                  <p>Los juegos tradicionales </p></strong>
                  </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
  </div>
  <div class="col col-md-5">
    
      <div>
      
     
      </div>
    
  </div>
    <!--Cards-->
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
    <div class="col">
      <div class="card h-100">
        <img src="./imagenes/ABY2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <a href=""><button type="button"  style="background-color: #d19df4;">Ver más </button></a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Actualizado hace 3 semanas...</small>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card h-100">
        <img src="./imagenes/lili50.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CONOCENOS</h5>
          <a href="./conocenos.php"><button type="button"  style="background-color: #d19df4;">Ver más </button></a>
        </div>
        <div class="card-footer">
          <small class="text-muted"></small>
        </div>
      </div>
    </div>
  </div>



  <div style="color: plum">.</div>
<div style="color: plum">.</div>
<div style="color: plum">.</div>



  <div class="row mt-3">

    <div class="card flex-fill">
      <div class="card-body bg-dark text-white d-flex justify-content-between">
        <span>&copy; Derechos reservados</span>
        <span>&reg;UTEQ, 2021</span>
      </div>
    </div>

  </div>

</div>


</body>
</html>

<?php
desconectar();

require_once( "foot.php" );

else :
header( "location:admin.php?msgcode=7" );
endif;
?>