<?php
require_once( "mensajes.lib.php" );
require_once( "admin_ini_head.php" );
$mysqli = conectar();

?>
<div class="contenedor mt-5">
        <h2>ALTA EN SUCURSAL</h2> 
        <form action="Sucuprocesa.php" method="post">
            <div class="usuario">
                <input type="number" required class="form-control" name="id"  id="id" >
                <label>ID</label>
            </div>
            <div class="usuario">
                <input  type="number" required class="form-control" name="cantidad"  id="cantidad" >
                <label>CANTIDAD</label>
            </div>
            <div class="usuario">
                <input type="number" required class="form-control" name="id_sucursal"  id="id_sucursal" min="1" max="3">
                <label>ID_SUCURSAL</label>
            </div>
            <div class="usuario">
                <input type="number" required class="form-control" name="id_producto"  id="id_producto" >
                <label>ID_PRODUCTOS</label>
            </div>
            <div class="usuario">
                <input type="usuario" required class="form-control" name="estatus"  id="estatus" >
                <label>ESTATUS</label>
            </div></center>

          <br>
          <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">AGREGAR</span>
          </button></center>
          <br>
          
          <center><button class="learn-more" type="reset" onclick="location.href='admin_prod_home.php?u=<?= $u ?>&s=<?= $s ?>'">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">CANCELAR</span>
          </button></center>
        

        </form>
        

    </div>
   <br><br><br><br><br><br>

<div class="row mt-6">
    <div class="col col-md-8"></div>
    <div class="col col-md-4">
        <div id="mensaje">
            <?php
            if ( isset( $_REQUEST[ "msgcode" ] ) ) {
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
}, 2000);
</script>

<?php

desconectar();

?>