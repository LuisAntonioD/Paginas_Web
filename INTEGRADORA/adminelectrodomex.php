<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="Logotipoprincipal.svg" href="images/Logotipoprincipal.svg">
    <meta name="author" content="Luis Antonio Arredondo">

	<!-- Biblioteca CSS BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" >
	<!-- Biblioteca CSS FONT-AWESOME -->
	<link rel="stylesheet" type="text/css" href="Fontawesome/css/all.min.css" >

	<!-- Script JS JQUERY -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<!-- Script JS BOOTSTRAP -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/Electrodomex.js"></script>

    <link rel="stylesheet" type="text/css" href="css/Estilos.css">
    <title>Electrodomex                                                                                |                Dashboard</title>

</head>
<body>
  
  <div class="offcanvas offcanvas-end" id="demo">
    <div class="offcanvas-header">
      <div class="col col-md-2"></div>
                  <a class="navbar-brand" href="adminelectrodomex.html">
                    <img src="images/Logoindex.svg"
                    style="height: 50px;" />
                </a> 
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <a href="Prodadmin.html" class="nav-link text-dark">Productos <i class="fas  fa-store"></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-1">17</span></a>
      <a href="Usuadmin.html" class="nav-link text-dark">Usuarios <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-1">5</span></a>
      <a href="Repadmin.html" class="nav-link text-dark">Reportes <i class="fas fa-paper-plane"></i></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-1">10</span></a>
      <div class="col col-md-7">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="electrodomex.html" class="btn btn-outline-dark btn-min mt-2">
                <i class="fas fa-sign-out-alt"></i>
              Salir</a>
          </div>
      </div>
    </div>
  </div>
  

  <div class="container-fluid mt-3">
    
<button class="btn btn-outline-dark"  type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
      
      <i class="fas fa-bars"></i>
      
    </button>
       <a class="navbar-brand" href="adminelectrodomex.html">
       <img src="images/Logoindex.svg" class="col col-md-2"
        style="height: 50px;" />
        </a> 
  </div>

  <br><br>

  <hr  /><!--Linea horizontal-->

          <center><h2>Dashboard</h2></center> 
          <hr  /><!--Linea horizontal-->

<div class="container">
  <div class="row">
    <div class="col col-md-3"></div>
    <div class="col col-md-6">
        <div class="card text-center">
            <div class="card-header bg-warning">
                <h3>Bienvenido, Luis</h3>
            </div>
            <div class="card-body">
                Has visitado este sitio: <strong>x</strong> veces 
            </div>
            <div class="card-header">
                <a class="btn btn-outline-danger">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                    Cerrar sesion 
                </a>
            </div>
        </div>
      </div>
<br><br><br><br><br>
  <p><strong>Actualizaciones recientes</strong></p>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fas fa-box-open fa-2x"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Alta de producto 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div><br>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fas fa-box-open fa-2x"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Baja de producto 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div><br>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-box-open fa-2x"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Modificacion de producto 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
</div>
</div>

  <!--Pie de pagina-->
  <footer class="bg-dark text-center text-white mt-5">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
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

    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->


    </div>
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020, , Electrodomex.com.mx, Inc. o afiliados. Todos los derechos reservados.
    </div>
    <!-- Copyright -->
  </footer>
    </body>
</html>