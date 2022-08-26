<?php
require_once ( "practica23_head.php" );
require_once ( "mensajes.lib.php" );
?>
<form action="practica23_inicio_sesion.php" method="post"
        onsubmit="return valida()">
    <div class="row">
    <div class="col colo-md-4">
    <div class="form-group">  
    <label form="usuario"><strong>Usuario:</strong></label>
    <input type="form-control" name="usuario" id="usuario" type="text">
</div>
</div>

<div class="col col-md-3">
    <button type="submit" class="btn btn-outline-primary btn-lg">
    <i class="fas fa-sign-in-alt fa-2x"></i>    
    Regresar</button>
</div>
<div class="col col-md-6">
    <div id="mensaje">
        <?php
        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            alerta( "danger", "Sesión invalida, debes entrar con usuario" );
        }
        ?>
    </div>
</div>
</div>
</form>

<?php
require_once ( "practica23_foot.php" );
?>
