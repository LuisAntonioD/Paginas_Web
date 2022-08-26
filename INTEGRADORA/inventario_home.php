
<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :


    require_once( "admin_head.php" );
?>
<div class="container mt-5">
		<a class="navbar-brand" href="admin_home.php?&u=<?= $u ?>&s=<?= $s ?>">
			<img src="images/Logoindex.svg" class="col col-md-12"
			style="height: 80px;" /></a> 
		</div>
<hr  /><!--Linea horizontal-->

<center><h2>Inventario</h2></center> 
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



<!--Ventanas modales-->
    <!-- Button trigger modal -->
    <center><a  class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Alta en inventario
            </a></center> 
  <br>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inventario</h5>
        </div>
        <div class="modal-body">
        
        <center><a href="inventario_formulario.php?accion=alta&id=<?= $id ?>&u=<?= $u ?>&s=<?= $s ?>" class="btn ">
        <img src="images/inventory.gif" alt="envios" style="width:50px">&nbsp&nbsp&nbspAlta en inventario
                            </a></center>
                            <br>
                            <!--VER GRAFICO--><center><a  class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <img src="images/graphic.png" alt="envios" style="width:50px">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGrafico
            </a></center> 
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  
  <br>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
        <?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as QRO from inventario where id_sucursal=1";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as CDMX from inventario where id_sucursal=2";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as GDL from inventario where id_sucursal=3";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  
 
   <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;width:70%" ></div>
   <script>
    Highcharts.setOptions({
    colors: ['rgb(85, 107, 47)']
});
    Highcharts.chart('container', {
      credits: {
        text: 'Electrodomex.com.mx',
        href: 'inventario_home.php?u=<?= $u ?>&s=<?= $s ?>'
    },
    
  chart: {
    type: 'column'
  },
  title: {
    text: 'Productos en cada sucursal'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Sucursal de Querétaro',
      'Sucursal de CDMX',
      'Sucursal de Guadalajara'
    ],
    crosshair: false
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Productos'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0,
      borderWidth: 80,
      groupPadding: 0,
      shadow: false
    }
  },
  series: [{
    name: 'Productos',
    data: [<?=$QRO?>,<?= $CDMX?>, <?=$GDL?>]

  }]
});

   </script>
        
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<div class="container text-center">
<div class="row">

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();



$sql="select inventario.id,cantidad,municipio,nombre,estatus
from producto
inner join inventario on inventario.id_producto=producto.id
inner join sucursal on inventario.id_sucursal=sucursal.id order by id";
$rs = query ($sql);
?>


<div class="col col-md-12">


<?php  if($rs->num_rows > 0): ?>
    

            <table class="table table-bordered table-hover text-center">
                <tr class="table-dark">
                    <th>Cantidad</th>
                    <th>Sucursal</th>
                    <th>Producto</th>
                    <th>Estatus</th>
                    <th>Modificar</th>
                    
                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td class="text-center"><?= $cantidad ?></td>
                        <td class="text-center"><?= $municipio ?></td>
                        <td class="text-center"><?=$nombre ?></td>
                        <td class="text-center"><?=$estatus ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-around">
                            <a href="inventario_formulario.php?accion=cambio&id=<?= $id ?>&u=<?= $u ?>&s=<?= $s ?>" class="btn " title="Modificar en inventario">
                            <img src="images/modify.gif" alt="envios" style="width:30px">
                            </a>
                            <a  href="javascript:void(0);"
                                class="btn " 
                                title="Eliminar producto"
                                onclick="borrar_inv( event,'<?= $id ?>','<?= $u ?>','<?= $s ?>' )">
                                <img src="images/delete.gif" alt="envios" style="width:30px">
                             </a>
                            </div>
                        </td>

                    </tr>

            
                    <?php endwhile; ?>
            </table>

            
            

            <?php else: ?>
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    <i class="fas fa-ban fa-2x"></i> No hay nada.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
        </div>

        </div>
        
        
    <div id="mensaje" class="mt-2 mb-5">
    

        <?php 



        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            codigo_alerta( $_REQUEST[ "msgcode" ] );
        }

        ?>
    </div>
    

   

        

        <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(100, 100).slideUp(900, function(){
        $(this).remove(); 
    });
}, 3500);
</script>

<?php
//Desconecta de la base de datos
    desconectar();

    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>