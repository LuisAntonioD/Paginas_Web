<?php
require_once( "mensajes.lib.php" );
require_once( "trabajo7_head.php" );
$mysqli = conectar();

?>

<div class="row mt-3">
    <div class="col col-md-4"></div>

    <div class="col col-md-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3>Nuevo usuario</h3>
            </div>
            <div class="card-body">
                <form action="trabajo7_registro_procesa.php"
                method = "post"
                enctype="multipart/form-data">

                <div class="form-group mt-2">
                    <label for="nomusuario"><strong>Nombre de usuario:</strong></label>
                    <input type="text" 
                    class="form-control"
                    name="nomusuario"
                    id="nomusuario"
                    required>
                </div>

                <div class="form-group mt-2">
                    <label for="correo"><strong>Correo electronico:</strong></label>
                    <input type="text" 
                    class="form-control"
                    name="correo"
                    id="correo"
                    required>
                </div>

                <div class="form-group mt-2">
                    <label for="contrasenia"><strong>Contraseña:</strong></label>
                    <input type="password" 
                    class="form-control"
                    name="contrasenia"
                    id="contrasenia"
                    required>
                </div>

                <div class="form-group mt-2">
                    <label for="foto"><strong>Tu foto:</strong></label>
                    <input type="file" 
                    class="form-control"
                    name="foto"
                    id="foto"
                    required>
                </div>
                <button type="submit" class="btn btn-outline-success mt-3">
                    <i class="fas fa-save"></i>
                    Guardar
                </button>

            </form>
            </div>

            <div class="card-footer p-3 text-end">
                <small>
                    <a href="Trabajo7.php" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                        Cancelar
                    </a>
                </small>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col col-md-4"></div>
    <div class="col col-md-4">
        <div id="mensaje">
            <?php
            if ( isset( $_REQUEST[ "msgcode" ] ) ) {
                codigo_alerta( $_REQUEST[ "msgcode" ] );
            }
            ?>
        </div>
    </div>

</div>

<?php

require_once( "trabajo7_foot.php" );
desconectar();

?>

