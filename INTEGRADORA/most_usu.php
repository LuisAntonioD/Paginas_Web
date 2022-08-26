<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
    require_once( "admin_head.php" );
    session_start();

    extract( $_REQUEST);//Extrae las variables $u y $s

    if ( valida_sesion( $u, $s) ) :
?>
<div class="container mt-5">
		<a class="navbar-brand" href="admin_home.php?&u=<?= $u ?>&s=<?= $s ?>">
			<img src="images/Logoindex.svg" class="col col-md-12"
			style="height: 80px;" /></a> 
		</div>
        <hr  /><!--Linea horizontal-->

<center><h2>CLIENTES EN EL SISTEMA</h2></center> 
<hr  /><!--Linea horizontal-->
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
        

                        <div class="row">






                        <?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select  * from cliente where id like id";
$rs = query ($sql);
?>
    <!-- Begin page content -->

    <div class="container">


<div class="row">
<div class="col-12 col-md-12">
<!-- Contenido -->   





<center><div class="container">
<div class="col col-md-10 mt-5">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>RFC</th>
                    <th>Municipio</th>
                    <th>Usuario</th>
                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $Nombre ?> <?= $ApellidoPat ?> <?= $ApellidoMat ?> </td>
                        <td><?= $Telefono ?></td>
                        <td><?= $Rfc ?></td>
                        <td><?= $municipio ?></td>
                        <td><?= $usuario ?></td>

                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>

  
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
  title: 'Nuestros clientes',
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