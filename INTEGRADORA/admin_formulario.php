<?php
require_once( "mensajes.lib.php" );
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca

session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :



require_once( "admin_ini_head.php" );


$mysqli = conectar();

extract( $_REQUEST);

$sql = "SELECT max(id)+1 as idpro FROM producto";
$rs = query($sql);
$row = $rs->fetch_assoc();
extract($row);

if ( $accion == "alta" ) {
    $id             = $idpro;
    $Nombre         = "";
    $Categoria      = "";
    $precio    = "";
    $imagen ="";
}
elseif ( $accion == "cambio") {
    $sql = "select * from producto where id = '$id'";
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
<center><h2>ALTA DE PRODCUTO</h2></center>
<?php
elseif ($accion == "cambio"  ):
?>
<center><h2>MODIFICACIÓN DE PRODCUTO</h2></center>
<?php
endif;
?>    
        <form action="admin_procesa.php" method="post" enctype="multipart/form-data" onsubmit="return valida_formulario()" >
            <input type="hidden" name="accion" value="<?= $accion ?>">
	    <input type="hidden" name="u" value="<?= $u ?>">
	    <input type="hidden" name="s" value="<?= $s ?>">
        <input type="hidden" name="id" value="<?=$id?>" />
        
        <?php if ($accion == "alta") : ?>
            <div class="usuario">
                <input type="text" required class="form-control" name="Nombre" value="<?=$Nombre ?>"  id="Nombre" 
            	<?= $accion == "cambio" ? "" : "" ?> maxlength="30">
                <label for="Precioventa">NOMBRE:</label>
            </div>
	    <div class="usuario">
        <input type="text" required class="form-control" name="Categoria" value="<?=$Categoria ?>"  id="Categoria" maxlength="30">
                <label for="Precioventa">CATEGORIA:</label>
            </div>
            
            <div class="usuario">
            <input type="file" required class="form-control" name="imagen" value="<?=$imagen ?>"  id="archivoInput"  onchange="return validarExt()">	
                <label for="imagen"></label>
                <center><div id="visorArchivo">
                    <!--Aqui se desplegará el fichero-->
                </div></center>
            </div>
            <?php endif; ?>
            
	    <div class="usuario">
        <input type="number" required class="form-control" name="precio" value="<?=$precio ?>"  id="precio" >
                <label for="precio">PRECIO DE VENTA:</label>
            </div>
            
            
            
            

            <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">AGREGAR</span>
          </button></center>

          <br>
          <center><button class="learn-more" type="reset" onclick="location.href='admin_prod_home.php?&u=<?= $u ?>&s=<?= $s ?>'">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.png|.jpg|.jpeg)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Este tipo de archivo no es compatible sube solo fomato(.jpg,.png,.jpeg)',
		});
        archivoInput.value = '';
        return false;
    }

    else
    {
        //PRevio del PDF
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
            visor.onload = function(e) 
            {
                document.getElementById('visorArchivo').innerHTML = 
                '<embed src="'+e.target.result+'" width="100" height="100" />';
            };
            visor.readAsDataURL(archivoInput.files[0]);
        }
    }
}
</script>
<?php
    //Desconecta de la base de datos
    desconectar();
    require_once( "admin_foot.php" );

else :
    header( "location:admin.php?msgcode=7" );
endif;
?>