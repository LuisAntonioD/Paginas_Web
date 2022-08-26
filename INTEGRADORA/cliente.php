<?php
	require_once("mensajes.lib.php");
	session_start();
	extract($_REQUEST);
  if ( valida_sesion($u,$s) ) :
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
    <link rel="stylesheet" type="text/css" href="css/btn.css">

	<!--Para bootstrap se debe incluir jquery como primer Script de la página-->
	<script src="js/jquery-3.6.0.min.js"></script>
    <!--Script de brootstrap-->
	<script src="Bootstrap/js/bootstrap.min.js"></script>

	<script src="js/practica7.js"></script>
  <style>
    
.myModal-body{
	background-color:#243b55;
	
}
  </style>
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
                    <li>
                      <a href="carrito_ventas.php?u=<?= $u ?>&s=<?= $s ?>" class="nav-link" aria-current="page" href="#">
                         COMPRAS
                        <span class="border border-top"></span>
                        <span class="border border-right"></span>
                        <span class="border border-bottom"></span>
                        <span class="border border-left"></span>
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

<div class="row mt-4">


<div class="container">

<!-- Button trigger modal -->
<center>
<button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
<img src="images/user.gif" alt="envios" style="width:50px">
  Datos de la cuenta
</button>
</center>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
  require_once("mysql.lib.php");
  $mysqli = conectar();
      $sql = "SELECT *  FROM cliente  WHERE usuario like '$u';";
  $rs = query($sql);

?>

<?php if ($rs->num_rows > 0) : ?>

		
			<?php while($row = $rs->fetch_assoc() ):
				extract($row);
			?>

      <center><img src="upload/fotousuarios/<?= $imagen ?>" alt="foto_del_usuario" style="width:100px" class="rounded"></center>
			<p>Nombre:<?= $Nombre ?> <?= $ApellidoPat ?> <?= $ApellidoMat ?> </p>
			<p>Contraseña:<?=$password?></p>
      <p>RFC:<?= $Rfc ?></p>
      <p>Municipio:<?= $municipio ?></p>
      <p>Usario:<?= $usuario ?></p>
      <p>Telefono:<?= $Telefono ?></p>
      <div class="modal-footer">
			<a href="ayuda.php?u=<?= $u ?>&s=<?= $s ?>" class="btn ">
      <img src="images/info2.gif" alt="envios" style="width:50px">
        Ayuda
      </a>
      
    </div>
		    	
		<?php endwhile; ?>	
		

<?php else : ?>

<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
  <i class="fas fa -ban fa-2x"></i>
  No hay Productos
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>

<?php endif; ?>
</div>
      </div>
     
    </div>
  </div>
</div>
	<div id="mensaje" class="mt-1">
<?php
if (isset($_REQUEST["msgcode"])) {
	$sql = "SELECT mensaje From mensajes where msgcode = ".$_REQUEST["msgcode"];
	$rs = query($sql);
	if ($row = $rs->fetch_assoc() ) {
		alerta("success", $row["mensaje"]);
	}
}
?>
	</div>

  <br>
<br>
<br>
<!-- Button trigger modal -->



        
</div>
  <?php
require_once("foot.php");
else:
  header("location:inicio_sesion.php?msgcode=7");
endif;
?>
