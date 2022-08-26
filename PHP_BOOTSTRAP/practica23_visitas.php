<?php
require_once ( "practica23_head.php" );


session_start();
//Extrae variables de la URL(Usuario / token)
extract( $_REQUEST );

//Validar la sesión
if (isset( $_SESSION[ "usuario" ] ) &&
    isset( $_SESSION[ "token" ] ) &&
    $_SESSION[ "usuario" ] == $usuario &&
    $_SESSION[ "token" ] == $token ) :

    $_SESSION[ "visitas" ] = $_SESSION[ "visitas" ] + 1; 
?>


<div class="row">
    <div class="col col-md-3"></div>
    <div class="col col-md-6">
        <div class="card text-center">
            <div class="card-header bg-warning">
                <h3>Bienvenido, <?= $usuario ?></h3>
            </div>
            <div class="card-body">
                Has visitado este sitio: <strong><?= $_SESSION[ "visitas" ] ?></strong> veces 
            </div>
            <div class="card-header">
                <a href="practica23_cierra_sesion.php?usuario=<? $usuario ?>&token=<? $token ?>" 
                class="btn btn-outline-danger">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                    Cerrar sesion 
                </a>
            </div>
        </div>
    </div>
    
</div>

<?php
require_once ( "practica23_foot.php" );

else : 
    header("location:practica23.php?msgcode=6" );
endif;
?>