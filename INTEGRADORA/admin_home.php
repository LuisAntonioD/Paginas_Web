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
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- Script JS JQUERY -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<!-- Script JS BOOTSTRAP -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/Electrodomex.js"></script>
	<script src="js/bor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/Estilos.css">


    <title>Electrodomex                                                                                |                Dashboard</title>

</head>
<body>
<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
session_start();



extract( $_REQUEST);//Extrae las variables $u y $s


if ( valida_sesion( $u, $s) ) : //&& $_SESSION[ "tipo" ] == 'administrador' 
    

    
?>

<?php
                            require_once( "mysql.lib.php" );
                            $mysqli = conectar();

                            $sql="select usuario
                            from usuario";
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

<hr  /><!--Linea horizontal-->

<center><h2>Dashboard</h2></center> 
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
 

<div class="row">

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
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                            </div>
                            <div class="offcanvas-body">
                            <a href="admin_prod_home.php?&u=<?= $u ?>&s=<?= $s ?>" class="nav-link text-success">Productos <i class="fas  fa-store "></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2"><?= $productos ?></span></a>
                            <a href="most_usu.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>" class="nav-link text-danger">Clientes <i class="fas fa-user"></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2"><?= $usuarios ?></span></a>
                            <a href="Repadmin.php?<?= $usuario ?>&u=<?= $u ?>&s=<?= $s ?>"class="nav-link text-warning">Reportes <i class="fas fa-paper-plane"></i></i>&nbsp&nbsp&nbsp<span class="badge bg-primary rounded-pill col-md-2">8</span></a>
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


                        <div class="container w-50 " data-aos="fade-right">
      <?php
                            require_once( "mysql.lib.php" );
                            $mysqli = conectar();

                            $sql="select sum(total) as ingresos
                            from venta";
                            $rs = query ($sql);
                            
                                                        


                            ?>

                            <?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile; ?>  
                        <canvas id="myChart" width="50px" height="35px"></canvas>
                        <script>
                        var ctx = document.getElementById('myChart');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['2020','2021','2022'],
                                datasets: [{
                                    label: 'Ingresos de ventas por año',
                                    data: ['15200','20000','26500'],
                                    backgroundColor: [
                                        'rgb(85, 107, 47)',
                                        'rgb(85, 107, 47)',
                                        'rgb(85, 107, 47)'
                                    ],
                                    borderColor: [
                                        'rgb(85, 107, 47)',
                                        'rgb(85, 107, 47)',
                                        'rgb(85, 107, 47)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                        </script>
                        </div>
                        
                    
<div class="container text-start mt-5 p-5">
  <div class="row align-items-start" data-aos="fade-up" data-aos-duration="3000">
    <div class="col-1"></div>
    <div class="col-3">
                            <?php
                            require_once( "mysql.lib.php" );
                            $mysqli = conectar();

                            $sql="select count(id) as ventas
                            from venta";
                            $rs = query ($sql);


                            ?>

                            <?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile; ?>  
    <div class=" shadow-lg bg-success text-light rounded-3"><br>
    <h3>&nbsp&nbsp&nbspVentas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="far fa-folder"></i></h3>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= $ventas ?></p><br>
  </div>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-3">
                        <?php
                            require_once( "mysql.lib.php" );
                            $mysqli = conectar();

                            $sql="select sum(total) as ingresos
                            from venta";
                            $rs = query ($sql);

                            ?>

                            <?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile; ?> 
    <div class=" shadow-lg bg-warning text-light rounded-3"><br>
    <h3>&nbsp&nbsp&nbspIngresos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-hand-holding-usd"></i></h3>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$<?= $ingresos ?></p><br>
  </div>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-3">
                        <?php
                            require_once( "mysql.lib.php" );
                            $mysqli = conectar();

                            $sql="select count(id) as usuariosact
                            from cliente";
                            $rs = query ($sql);


                            ?>

                            <?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile; ?> 
    <div class="shadow-lg  bg-primary text-light rounded-3"><br>
    <h5>&nbsp&nbsp&nbspUsuarios activos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user"></i></h5>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= $usuariosact ?></p><br><br>
    <p></p>
  </div>
    </div>

  </div><br><br><br><br>
      <div class="container">
        <div class="row">
  
  <center><div class="col col-md-11 text-start">
  <p><strong data-aos="fade-right">Actualizaciones recientes</strong></p>
  <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-right">
    <i class="fas fa-box-open fa-2x" data-aos="fade-right"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Alta de producto 
  </div></div></center><br>
  <center><div class="col col-md-11 text-start">
  <div class="alert alert-danger alert-dismissible fade show" role="alert" data-aos="fade-right">
    <i class="fas fa-box-open fa-2x" data-aos="fade-right"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Baja de producto 
  </div></div></center><br>
  <center><div class="col col-md-11 text-start"> 
  <div class="alert alert-warning alert-dismissible fade show" role="alert" data-aos="fade-right">
    <i class="fas fa-box-open fa-2x" data-aos="fade-right"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Modificacion de producto 
  </div></div></center>
  </div>
  </div>
        
        
        <div class="row mt-2">
        <div class="col col-md-5">
    <div id="mensaje" class="mt-2 mb-5">
    

        <?php 



        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            codigo_alerta( $_REQUEST[ "msgcode" ] );
        }

        ?>
    </div>
    </div>
    </div>


    <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(100, 100).slideUp(900, function(){
        $(this).remove(); 
    });
}, 50000);
</script>

<div style=float:left;>

<script >

var  today = new Date();

var m = today.getMonth() + 1;

var mes = (m < 10) ? ‘0’ + m : m;

document.write(‘Fecha: ‘+today.getDate(),’/’ +mes,’/’+today.getFullYear());

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
  AOS.init();
</script>
</div>



    

   

<?php
//Desconecta de la base de datos
    desconectar();
    require_once( "admin_foot.php" );


else :
    header( "location:admin.php?msgcode=7" );
endif;

?>