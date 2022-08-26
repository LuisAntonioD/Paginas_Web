<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :


    require_once( "admin_head.php" );
?>
<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(usuario) as usuarios from cliente";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id) as productos from producto";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  
<div class="container mt-5">
            <a class="navbar-brand" href="admin_home.php?&u=<?= $u ?>&s=<?= $s ?>">
                <img src="images/Logoindex.svg" class="col col-md-12"
                style="height: 80px;" /></a> 
        </div>
        <?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="Select usuario,password,fecha,id
        from clavecambiada";
$rs = query ($sql);


?>

        <div class="col col-md-9">                   
                            <?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile; ?>              
            </div>  
        <div class="container mb-5">
                            <div class="row">
                            <div class="offcanvas offcanvas-end" id="demo">
                            <div class="offcanvas-header">
                            <div class="col col-md-2"></div>
                                        <a class="navbar-brand" href="admin_home.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>">
                                            <img src="images/Logoindex.svg"
                                            style="height: 50px;" />
                                        </a> 
                            <a type="button" class="btn-close" data-bs-dismiss="offcanvas"></a>
                            </div>
                            <div class="offcanvas-body">
                            <a href="admin_prod_home.php?&u=<?= $u ?>&s=<?= $s ?>" class="nav-link text-success">Productos <i class="fas  fa-store "></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2"><?= $productos ?></span></a>
                            <a href="most_usu.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>" class="nav-link text-danger">Clientes <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2"><?= $usuarios ?></span></a>
                            <a href="Repadmin.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>" class="nav-link text-warning">Reportes <i class="fas fa-paper-plane"></i></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2">8</span></a>
                            <a href="backDB.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>"class="nav-link text-dark">Backup de base de datos&nbsp&nbsp&nbsp<i class="fas fa-paper-plane"></i></a>
                            <br><br><br><br><br><br><br>
                            <center><img src="images/administrdadores.png" class="rounded" style="width:50px">
                            <p><?= $_SESSION[ "usuario" ] ?></p></center>
                            <div class="col col-md-5">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="admin_cerrar.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Cerrar sesión
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
      
    
                        <div class="container-fluid mt-3">   
                        <center><div class="col col-md-11 ">
                            <button class="btn btn-outline-dark"  type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">        
                            <i class="fas fa-users-cog"></i>&nbsp&nbsp&nbspAcciones
                            </button>
                        </div>
                    </center>
                        </div>
                            </div>
                        </div>

  

  

 
    

      <hr  /><!--Linea horizontal-->

      <center><h2>Reportes</h2></center> 
      <hr  /><!--Linea horizontal-->

      <div class="container">
        <div class="row">
          
        <div class="col col-md-9"></div>
            <div class="col col-lg-4 mt-5">
                <div class="card " style="width: 18rem;">
                    <center><img src="images/infocli.jpg" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body ">
                      <h5 class="card-title ">Reporte de compras del cliente</h5>
                      <br>
                      <center><a href="pal_1.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/faccli.jpg" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de facturas de clientes</h5>
                      <br>
                      <center><a href="r2.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/preciobajo.png" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de productos de menor precio</h5>
                      <br>
                      <center><a href="r3.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->


            
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/ubicli.jfif" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de ubicación del cliente</h5>
                      <br>
                      <center><a href="v2.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/clicom.png" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de los clientes que han realizado compras</h5>
                      <br>
                      <center><a href="v3.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/modifcon.jpg" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de modificación de contraseñas</h5>
                      <br>
                      <center><a href="modifcontra.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/exist.jpg" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de existencia de productos</h5>
                      <br>
                      <center><a href="r.productos.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->
            <div class="col col-lg-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <center><img src="images/rangos.jpj.jfif" class="card-img-top rounded shadow"  alt="..."></center> 
                    <div class="card-body">
                      <h5 class="card-title">Reporte de ventas por rango de fechas</h5>
                      <br>
                      <center><a href="ventas_fecha.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-dark">Ver</a></center> 
                    </div>
                  </div>
            </div></center><!-- /.col-lg-4 -->


            

           
          </div><!-- /.row -->
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
      © 2020,Electrodomex.com.mx, Inc. o afiliados. Todos los derechos reservados.
    </div>
    <!-- Copyright -->
  </footer>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
  title: 'Nuestros reportes',
  confirmButtonAriaLabel: 'OK',
})
</script>
  <?php
//Desconecta de la base de datos
    desconectar();

    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>