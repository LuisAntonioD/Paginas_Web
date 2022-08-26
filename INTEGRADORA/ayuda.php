<?php
require_once ( "mensajes.lib.php" );
session_start();
extract($_REQUEST);
if ( valida_sesion( $u, $s) 	) :
/*if(isset($_SESSION['tipo'])){
    switch ($_SESSION['tipo']) {
        case 'administrador':
            header("location:admin_home.php?u=".$_SESSION[ "usuario" ].
            "&s=".$_SESSION[ "token" ]);
            break;
        case 'cliente':
            header("location:Recuperar.php?u=".$_SESSION[ "usuario" ].
            "&s=".$_SESSION[ "token" ]);
            break;
    }
}*/

/*if ( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "token" ] ) ) {
    header( "location:admin_home.php?u=".$_SESSION[ "usuario" ].
    "&s=".$_SESSION[ "token" ]);
    exit( 0 );

}*/




require_once ( "admin_ini_head.php" );
$mysqli = conectar();
?>
<div class="container mt-5"></div>
<?php
$sql = "select * from usuario ";
$rs = query ($sql);

?>


<div class="contenedor mt-2">
        <h2>AYUDA</h2> 
        <form action="https://formspree.io/f/mpznajnq" method="post">
            <div class="usuario">
                <input type="usuario" required class="form-control" name="Nombre"  >
                <label>DAME TU NOMBRE COMPLETO</label>
            </div>
            <div class="usuario">
                <input type="usuario" required class="form-control" name="Correo"  >
                <label>INGRESA TU CORREO</label>
            </div>
            <div class="usuario">
                <input type="text" required class="form-control" name="Ayuda"  maxlength="255" >
                <label>¿EN QUE TE PODEMOS AYUDAR?</label>
            </div>

            <center><button class="learn-more" type="submit" type="reset">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">ENVIAR</span>
          </button></center>
          <button type="reset" id="limpiar" hidden=""></button>
          
          <center><br>
            <button class="learn-more" type="reset" onclick="location.href='cliente.php?u=<?= $u ?>&s=<?= $s ?>'">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text text-light">REGRESAR</span>
      </button></center>



        </form>

    </div>
     

    <div class="container mt-6">
        <br><br><br><br><br><br><br><br>
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
<script>
    $(document).ready(function() {
        $("#limpiar").click();
        $("#form-comun > textarea").html("");
    });
</script>

<?php
desconectar();
?>
<?php

else:
	header("location:admin.php?msgcode=7");
endif;
?>