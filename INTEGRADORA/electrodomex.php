<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :


    require_once( "admin_head.php" );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="Logotipoprincipal.svg" href="images/Logotipoprincipal.svg">
    <meta name="author" content="Luis Antonio Arredondo">

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--CSS de font-awesome-->
    <link href="./fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!--para bootstrat se debe de incluir JQuery como primer -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!--Script de boostrap-->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/Electrodomex.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/Estilos.css">
    <title>Electrodomex</title>
</head>
<body>
    
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
                      <a href="#0" class="nav-link" aria-current="page" href="#">
                        Ofertas
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    <li>
                      <a href="Sucursales.php" class="nav-link" aria-current="page" href="#">
                        Sucursales
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#0" class="nav-link" aria-current="page" href="#">
                        Ayuda
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                  </ul>
                
                  <div class="col col-md-7"></div>
                  <a class="navbar-brand" href="./electrodomex.html">
                    <img src="images/Logoindex.svg"
                    style="height: 50px;" />
                </a> 

                  
                
              </ul>
              <div class="col col-md-2">
              <a href="admin_cerrar.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    
                                </a>
              <a href="usuario_formulario.php?&u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-light btn-min">
              <i class="fas fa-cog"></i>
              </span></a>
              <a href="inicioSesion.html" class="btn btn-outline-light btn-min">
              <i class="far fa-user"></i>
                <span class="position-absolute top-3 start-99 translate-middle p-1 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
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
            <p><a class="btn btn-lg btn-light btn-outline-dark" href="">Ver mas</a></p>
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing mt-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <center><h2>Marcas mas vendidas</h2></center> 

      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/mabe.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Mabe</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="./Carrito/index.php">Comprar &raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/oster.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Oster</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="#">Comprar&raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      <div class="col col-lg-4 mt-5">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/samsung.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Samsung</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-outline-dark" href="#">Comprar &raquo;</a></p>
      </div></center><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->
    </div>

    <hr  /><!--Linea horizontal-->

    <!-- Mostrar productos en venta -->

  <div class="container marketing mt-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">

    <?php
require_once("mysql.lib.php");
    $mysqli=conectar();

    /*ejecucion de una consulta
    si la consulta es un select devuelve un objeto de la clase mysql_result(resultSet)
    (tambien conocido como resultSet o conjunto resultado)
    */
    $sql = "select nombre, precioventa, imagen from producto where id>=6";
    $rs =$mysqli->query($sql) or die ("Error: ".$mysqli->Error);

    ?>

        <center><h2>Productos</h2></center> 

        <?php while($row =$rs->fetch_assoc()): 
extract($row);    
    ?>
      <div class="col col-lg-4 mt-5">
        <center><img src="upload/fotousuarios/<?= $imagen?>" class="rounded" style="width:100px">

        <h2 class="fw-normal"><?= $nombre ?> </h2>
        <p>$ <?= $precioventa ?> MXN</p>
      </div></center><!-- /.col-lg-4 -->
<?php endwhile; ?>


    </div><!-- /.row -->
    </div>

    <?php
$mysqli->close();
?>

    -----
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
  
  <section class="">
    <a href="admin.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark btn-min mt-2">
      <p class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-outline-light btn-rounded">
          adminitradores
        </button>
      </p></a>
  </section>
  </div>
  
        
                          

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020, , Electrodomex.com.mx, Inc. o afiliados. Todos los derechos reservados.
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>



<?php
//Desconecta de la base de datos
    //desconectar();

    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>