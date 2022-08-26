<?php
require_once ( "mensajes.lib.php" );
session_start();

if ( isset( $_SESSION[ "correo" ] ) && isset( $_SESSION[ "token" ] ) ) {
    header( "location:Trabajo7_home.php?u=".$_SESSION[ "correo" ].
    "&s=".$_SESSION[ "token" ] );
    exit( 0 );
}

require_once ( "trabajo7_head.php" );
$mysqli = conectar();
?>


    <div class="row mt-5">

    <div class="col col-md-4"></div>

    <div class="col col-md-4">
        <div class="card">
            <div class="card-header bg-warning text-center">
                <h3>Bienvenido</h3>
            </div>
            <div class="card-body">

            <form action="trabajo7_inicio.php" method="post">

        <div class="form-group mt-2">  
            <label form="correo"><strong>Correo electronico:</strong></label>
            <input 
            class="form-control" 
            name="correo" 
            id="correo" 
            type="text"
            required>
        </div>
        <div class="form-group mt-5">  
            <label form="contrasenia"><strong>contraseña:</strong></label>
            <input 
            class="form-control" 
            name="contrasenia" 
            id="contrasenia" 
            type="password"
            required>
        </div>
        <center>
        <button type="submit" class="btn btn-outline-primary btn-lg mt-2">
            <i class="fas fa-sign-in-alt"></i>    
            Ingresar
        </button></center>

        </form>


            </div>
            <div class="card-footer text-center p-3 bg-dark">
                <a href="trabajo7_registro.php" class="text-light btn btn-outline-danger">
                    <small>
                <i class="fas fa-user-plus text-light"></i>    
                Registrate como nuevo usuario</a>
                </small>
            </div>
        </div>
    </div>
    </div>

<center>
    <div class="row col-md-4 mt-3">
    
    <div id="mensaje">
        <?php
        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            codigo_alerta( $_REQUEST[ "msgcode" ]  );
        }
        ?>
        </div>
</div></center>

<?php
require_once ( "trabajo7_foot.php" );
desconectar();
?>
