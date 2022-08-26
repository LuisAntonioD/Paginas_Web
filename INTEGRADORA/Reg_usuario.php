<?php
require_once( "mensajes.lib.php" );
require_once( "Reg_usuario_head.php" );
$mysqli = conectar();

?>
<br><br><br><br><br><br><br><br>
<div class="container mt-5"></div>
<div class="contenedor mt-5">
        <h2>REGISTRO</h2> 
        <form action="Reg_usupro.php" method="post" enctype="multipart/form-data" >
            <div class="usuario">
                <input  type="text" required class="form-control" name="Nombre"  id="Nombre" maxlength="30">
                <label>NOMBRE</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="ApellidoPat"  id="ApellidoPat" maxlength="30">
                <label>APELLIDO PATERNO</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="ApellidoMat"  id="ApellidoMat" maxlength="30">
                <label>APELLIDO MATERNO</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Colonia"  id="Colonia"maxlength="30" >
                <label>COLONIA</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Calle"  id="Calle" maxlength="30">
                <label>CALLE</label>
            </div>
            <div class="usuario">
                <input type="number" required class="form-control" name="No_exte"  id="No_exte" min="1">
                <label>NÚMERO EXTERIOR</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="No_inte"  id="No_inte" maxlength="4" >
                <label>NÚMERO INTERIOR</label>
            </div>
            <div class="usuario">
                <input type="number" required class="form-control" name="Cp"  id="Cp" min="1">
                <label>CODIGO POSTAL</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="municipio"  id="municipio" maxlength="50">
                <label>MUNICIPIO</label>
            </div>
            <div class="usuario">
                <input type="tel" required class="form-control" name="Telefono"  id="Telefono" maxlength="10">
                <label>TELEFONO</label>
            </div>
            <div class="usuario">
                <input type="file"  class="form-control" name="imagen"   id="archivoInput"  onchange="return validarExt()">
                <label>FOTO</label>
                <center><div id="visorArchivo">
                    <!--Aqui se desplegará el fichero-->
                </div></center>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Rfc"  id="Rfc" maxlength="10">
                <label>RFC</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="usuario"  id="usuario" maxlength="150">
                <label>USUARIO</label>
            </div>
            <div class="usuario">
                <input type="password" required class="form-control" name="password"  id="password" >
                <label>PASSWORD</label>
            </div>          
            </center>

          <br>
          <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">AGREGAR</span>
          </button></center>
          <br>
          <center><button class="learn-more" type="reset" onclick="location.href='admin.php'">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">CANCELAR</span>
          </button></center>
        

        </form>
        

    </div>
   
        <div id="mensaje" class="col-md-4 " class="alert-dismissible">
            <?php
            if ( isset( $_REQUEST[ "msgcode" ] ) ) {
                codigo_alerta( $_REQUEST[ "msgcode" ] );
            }
            ?>
       

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
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(100, 100).slideUp(900, function(){
        $(this).remove(); 
    });
}, 2000);



<?php

desconectar();

?>