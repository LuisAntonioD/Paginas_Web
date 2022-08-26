

<?php
require_once( "mensajes.lib.php" );
require_once( "admin_ini_head.php" );
$mysqli = conectar();

?>

<br><br><br>
<div class="contenedor mt-5">
        <h2>RECUPERACIÓN DE CONTRASEÑA</h2> 
        <form action="Recuprocesa.php" action="https://formspree.io/f/mpznajnq" method="post">
            <div class="usuario">
                <input type="text" required class="form-control" name="usuario"  id="usuario" >
                <label>USUARIO</label>
            </div>
            <div class="usuario">
                <input type="password" required class="form-control" name="password"  id="password" >
                <label>CONTRASEÑA NUEVA</label>
            </div>
            

            <center><button class="learn-more" type="submit" >
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">RECUPERAR</span>
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

   <div class="container mt-6">
        <br><br><br><br><br><br>
    <div class="row col col-md-4">
        <div class="col col-md-15">
    <div id="mensaje" >
    

        <?php 



        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            codigo_alerta( $_REQUEST[ "msgcode" ] );
        }

        ?>
    </div>
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