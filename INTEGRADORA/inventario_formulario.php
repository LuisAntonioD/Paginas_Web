<?php
require_once( "mensajes.lib.php" );
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca

session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :



require_once( "admin_ini_head.php" );


$mysqli = conectar();

extract( $_REQUEST);

$sql = "SELECT max(id)+1 as idinv FROM inventario";
$rs = query($sql);
$row = $rs->fetch_assoc();
extract($row);

if ( $accion == "alta" ) {
    $id               = $idinv;
    $cantidad         = 0;
    $id_sucursal      = "";
    $id_producto      = "";
    $estatus          = "";
}
elseif ( $accion == "cambio") {
    $sql = "select * from inventario where id = '$id'";
    $rs = query ( $sql );

    if ( $row = $rs -> fetch_assoc() ) {
        extract( $row );//Crea todas las variables
    }
    else {
        die( "Error: Algo inesperado paso :(" );
    }
}
else {
    die( "Error: Algo inesperado paso :(" );
}
?>
        


                                              

        <div class="contenedor mt-5">
        <?php

if ($accion == "alta" ):
?>
<center><h2>ALTA DE INVENTARIO</h2></center>
<?php
elseif ($accion == "cambio"  ):
?>
<center><h2>MODIFICACIÓN DE INVENTARIO</h2></center>
<?php
endif;
?>  
        <form action="inventario_procesa.php" method="post" enctype="multipart/form-data" onsubmit="return valida_formulario()" >
            <input type="hidden" name="accion" value="<?= $accion ?>">
	    <input type="hidden" name="u" value="<?= $u ?>">
	    <input type="hidden" name="s" value="<?= $s ?>">
        <input type="hidden" name="id" value="<?=$id?>" />
        
            <div class="usuario">
                <input type="number" required class="form-control" name="cantidad" value="<?=$cantidad ?>"  id="cantidad" min="0"
            	<?= $accion == "cambio" ? " " : "" ?>>
                <label for="cantidad">CANTIDAD:</label>
            </div>
            <?php if ($accion == "alta") : ?>
	    <div class="usuario">
                <label for="id_sucursal">ESCOGE LA SUCURSAL:</label>
                <br><br>
                <select  name="id_sucursal" class="form-select" aria-label="Default select example"> 
                <option selected>SUCURSALES</option>   
                <option name="id_sucursal" value="1"  id="id_sucursal">Querétaro</option>    
                <option name="id_sucursal" value="2"  id="id_sucursal" >CDMX</option>    
                <option name="id_sucursal" value="3"  id="id_sucursal" >Guadalajara</option>    
                </select> 
            </div>
            <br>
	    <div class="usuario">
        
                <label for="id_producto">PRODUCTO:</label>
                <br><br>
                <?php
        $sql  = "Select id,nombre from producto  order by id";
        $rscar = query ($sql);
        ?>
            <select name="id_producto" class="form-select" aria-label="Default select example">
                <option>SELECCIONA TU PRODUCTO</option>
                <?php 
                while ( $rowcar = $rscar->fetch_assoc () ):
                /*
                    Obtiene las variables idcarrera,nomcarrera,abreviacion,division
                */
                    extract( $rowcar);


                    
                ?>
                <option value="<?= $id ?>"><?= $nombre ?></option>
                <?php endwhile; ?>

            </select>
            </div>
            <?php endif; ?>
            <br>
            <div class="usuario">
            <input type="text" required class="form-control" name="estatus" value="<?=$estatus ?>"  id="estatus" maxlength="15">	
                <label for="estatus">ESTATUS:</label>
            </div>
            
            

            <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">AGREGAR</span>
          </button></center>

          <br>
          
          <center><button class="learn-more"  type="reset" onclick="location.href='inventario_home.php?u=<?= $u ?>&s=<?= $s ?>'">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">CANCELAR</span>
          </button></center>
        

        </form>
        

    </div>
<div class="row mt-5">
        <div class="col col-md-5">
    <div id="mensaje" class="mt-2 mb-2">
    <?php 



if (isset( $_REQUEST[ "msgcode" ] ) ) {
    $sql = "select mensaje from mensajes where msgcode = ".$_REQUEST[ "msgcode" ];
    $rs = query( $sql );

    if ( $row = $rs -> fetch_assoc() ) {
        alerta( "danger",$row ["mensaje"]);
    }
}

?>
    </div>
    </div>
    </div>

<?php
    //Desconecta de la base de datos
    desconectar();
    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>
