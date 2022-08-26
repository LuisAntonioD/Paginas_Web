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

<center><h2>REPORTE DE PRODUCTOS DE MENOR PRECIO</h2></center> 
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

$sql="select municipio as sucursal,producto.nombre as nombre_producto,precio as Precio_Venta,estatus
        from producto
        inner join  inventario on inventario.id_producto=producto.id
        inner join  sucursal on inventario.id_sucursal=sucursal.id
        where producto.id IN
        (select producto.id from inventario
        where precio <= 2000.00)
        ORDER BY inventario.id_sucursal";
$rs = query ($sql);
?>



<center><div class="container">
<div class="col col-md-8">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>Sucursal</th>
                    <th>Nombre del producto</th>
                    <th>Precio de venta</th>
                    <th>estatus</th>


                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $sucursal ?></td>
                        <td><?= $nombre_producto ?></td>
                        <td>$<?= $Precio_Venta ?></td>
                        <td><?= $estatus ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>
        <center><a href="excel2.php" class="btn ">
        <img src="images/table.gif" alt="envios" style="width:30px">&nbsp&nbsp&nbspDescargar Reporte
                            </a></center>
<br><br><br><br>
        <?php
//Desconecta de la base de datos
    desconectar();

    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>