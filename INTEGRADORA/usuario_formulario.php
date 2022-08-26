<?php 
require_once("mensajes.lib.php");

require_once('mysql.lib.php');

session_start();
extract( $_REQUEST);//Extrae las variables $u y $s


if ( valida_sesion( $u, $s) ) :
$mysqli = conectar();


$sql= "select *  from cliente
WHERE nombre = nombre";

$rs = query ($sql);



require_once( "admin_ini_head.php" );
?>
<?php while ($row = $rs -> fetch_assoc()):
                            extract($row);
                            ?>               
                      <?php endwhile;?> 

<div class="contenedor mt-5">
        <h2>MODIFICAR DATOS</h2> 
        <form action="usuario_procesa.php?u=<?= $u ?>&s=<?= $s ?>" method="post" enctype="multipart/form-data" onsubmit="return valida_formulario()" >
       
            <div class="usuario">
                <input type="text" required class="form-control" name="Nombre" value="<?=$Nombre ?>"  id="Nombre" 
            	>
                <label for="Nombre">NOMBRE:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="ApellidoPat" value="<?=$ApellidoPat ?>"  id="ApellidoPat" 
            	>
                <label for="ApellidPat">APELLIDO PATERNO:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="ApellidoMat" value="<?=$ApellidoMat ?>"  id="ApellidoMat" 
            	>
                <label for="ApellidMat">APELLIDO MATERNO:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Colonia" value="<?=$Colonia ?>"  id="Colonia" 
            	>
                <label for="Colonia">COLINIA:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Calle" value="<?=$Calle ?>"  id="Calle" 
            	>
                <label for="Calle">CALLE:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="No_inte" value="<?=$No_inte ?>"  id="No_inte" 
            	>
                <label for="No_inte">NÚMERO INTERIOR:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="No_exte" value="<?=$No_exte ?>"  id="No_exte" 
            	>
                <label for="No_exte">NÚMERO EXTERIOR:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Cp" value="<?=$Cp ?>"  id="Cp" 
            	>
                <label for="Cp">CP:</label>
            </div>
            <div class="usuario">
            <input type="text" required class="form-control" name="municipio" value="<?=$municipio ?>"  id="municipio" >
                <label>MUNICIPIO:</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Telefono" value="<?=$Telefono ?>"  id="Telefono" 
            	>
                <label for="Telefono">TELEFONO:</label>
            </div>
            
            
            
            

            <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">AGREGAR</span>
          </button></center>

          <br>
          
          <center><button class="learn-more"  type="reset" onclick="location.href='cliente.php?u=<?= $u ?>&s=<?= $s ?>'">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">CANCELAR</span>
          </button></center>

          <br>
          
          <center><button class="learn-more"  type="reset" onclick="location.href='Recuperar.php?u=<?= $u ?>&s=<?= $s ?>'">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">R_PASSWORD</span>
          </button>
        
            </center>
        
          
        </form>
        

    </div>

        <div class="footer">

        </div>  
        <div id="mensaje">

<?php 

if (isset($_REQUEST['msgcode'] ) ) {
	codigo_alerta($_REQUEST["msgcode"]);
}
?>

	        	</div>
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