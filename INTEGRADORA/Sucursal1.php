<?phpent
require_once("mysql.lib.php");
require_once("carrito.lib.php");
$mysqli = conectar();
session_start();


extract($_REQUEST);



$sql ="select Nombre, Precioventa,categoria,imagen,estatus, inventario.id, sucursal.id,cantidad
from producto
inner join inventario on (producto.id=inventario.id_producto)
inner join sucursal on (inventario.id_sucursal=sucursal.id)
where id=1";
$rs = query( $sql );
?>

<body background="./imagen/fondo3.webp">
<nav class="navbar navbar-dark bg-dark">
          
          <div class="container-fluid">
            <span class="navbar-text">
              
            <h2>!Bienvenido¡</h2> <!--<pre>&nbsp;&nbsp;&nbsp;&nbsp;Rayitodesol</pre> -->
                        <ul class="nav nav-tabs">
                      
                        <li class="nav-item">
                          <a class="nav-link" href="vistaprincipal2.php">Inicío</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="conocenos.php">Conocenos</a>
                        </li>
                        <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sucursales 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-dark" href="Sucursal1.php">Sucursal Queretaro</a></li>
                  <li><a class="dropdown-item text-dark" href="./sucursal2.php">Sucursal Hidalgo </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-dark" href="./sucursal3.php">Sucursal Ezequiel Montes </a></li>
                </ul>
              </li>
                        
                      </ul>
  
            </span>
          </div>
  </nav> 
  
<div class="navbar navbar-expand-lg-dark " style="background-color: #d19df4;">
  <center> <h4 class=""> BIENVENIDOS  A LA SUCURSAL DE HIDALGO </h4> </center>
  </div>

 <div class="d-flex justify-content-between">
        <span>
          <i class="fas fa-shopping-cart fa-2x mt-3"></i>
          (<?= total_productos_carrito()?>)

                <?php
                if( total_productos_carrito() > 0 ):
                ?>
                <a href="carrito.php<?= isset($u) ? "?u=$u" :"" ?> <?= isset ($s) ? "?s=$s" :"" ?> "> Ver carrito </a>
                <?php
                endif;
                ?>
                </span>

                <?php
                if( isset($u) && isset ($s) && valida_sesion($u, $s) ):
                ?>

               <a href="">Mis ventas </a>
               <span>
                Hola, <?= $_SESSION[ "usuario" ] ?>
                <a href="cerrar.php?u=<?= $u ?>&s=<?= $s ?>">cerrar session</a>
               </span>

                <?php
                else:
                ?>

                <a href="admin.php">Login</a>
                <?php
                endif;
                ?>
        </div>

<form class="mt-3" action="agregar.php" method="post">
    <input type="hidden" name="u" value="<?= "$u" ?>"/>
    <input type="hidden" name="s" value="<?= $s ?>"/>

  

        
        <?php
        while( $row = $rs->fetch_assoc() ):
            extract( $row );
        ?>
   <center><a href="index.html"><img class="bd-placeholder-img rounded-circle" width="140" height="140" src=<?= $imagen?> role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></a><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
            <h6 class="fw-normal"><?= $Nombre ?> 
            </h6>
            <h6>$<?= number_format( $Precioventa, 2, ".", ",")?></h6>
            <h6><?= $categoria?></h6>
            <h6><?= $estatus?></h6>
            <input class="from-control" name="cantidad_<?= $id ?>" type="number" min="0" max="<?=$cantidad?>" value="0"/>

            <button type="submit" class="btn btn-outline-info">
                    <a >
                    <i class="fas fa-cart-plus"></i></i>Agregar al carrito</a>
            </button>
  </div></center>

        <?php
        endwhile;
        ?>  
    </tbody>
</table> 



</form>

<div id="mensaje" class="mt-3">
    <?php
    if ( isset($_REQUEST ["msgcode"] ) ){
        codigo_alerta($_REQUEST ["msgcode"] );

   }
   ?>
</div>
<?php
require_once( "foot.php" );
desconectar();
?>