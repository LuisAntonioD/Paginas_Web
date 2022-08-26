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
                      <a href="catalogo.php<?= isset( $u ) ? "?u=$u" : "" ?><?= isset( $s ) ? "&s=$s&accion=alta&idsu=$idsu" : "" ?>" class="nav-link" aria-current="page" href="#">
                        PRODUCTOS
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
                      </a>
                    </li>
                    
                  </ul>
                
                  <div class="col col-md-8"></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
    


              <a href="./carrito.php?idsu=1&u=<?= $u ?>&s=<?= $s ?>&cat=alta&cat=4" class="btn btn-outline-warning btn-min">
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

