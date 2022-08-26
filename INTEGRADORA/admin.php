<?php
require_once ( "mensajes.lib.php" );
session_start();

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
$sql = "select * from usuario where usuario=usuario";
$rs = query ($sql);

?>


<div class="contenedor mt-2">
        <h2>INICIO DE SESION</h2> 
        <form action="admin_inicio.php" method="post">
            <div class="usuario">
                <input type="usuario" required class="form-control" name="usuario"  id="usuario" >
                <label>USUARIO</label>
            </div>
            <div class="usuario">
                <input type="password" required class="form-control" name="password"  id="password" >
                <label>CONTRASEÑA</label>
            </div>

            <center><button class="learn-more" type="submit">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text text-light">Ingresar</span>
          </button></center>

          
          <center><br>
            <button class="learn-more" type="reset" onclick="location.href='Recuperar.php'">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text text-light">RECUPERAR</span>
      </button></center>


<center><br>
      <button class="learn-more" type="reset" onclick="location.href='Reg_usuario.php'">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text text-light">REGISTRAR</span>
      </button></center>

      <center><br>
      <button class="learn-more" type="reset" onclick="location.href='index.php'">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text text-light">INICIO</span>
      </button></center>




        </form>

    </div>
     

    
    
    <div id="mensaje" class="col-md-4 " class="alert-dismissible">
    

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
}, 2000);
</script>


<?php
desconectar();
?>


