

<?php
require_once( "trabajo6_head.php" );
?>
        <div class="row">

<?php
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
require_once( "mensajes.lib.php" );
$mysqli = conectar();

$sql="Select a.*, abreviacion 
        from alumnos as a left join carreras using (idcarrera) order by nombre";
$rs = query ($sql) ;
?>
<div class="col col-md-11">
<div class="d-flex  justify-content-end">
                    <div class="rounded-circle  mb-3"
                            style="width:30px;height:30px;
                            background-color:rgb(255,243,205);">
                    </div>
                    &nbsp;&nbsp;Becarios
            </div>

<?php  if($rs->num_rows > 0): ?>
    

            <table class="table table-bordered table-hover">
                <tr class="text-center table-success">
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Grupo</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr <?= $beca ==1 ? 'class="table-warning"' :"" ?>>
                        <td class="text-center"><?= $matricula ?></td>
                        <td class="text-center"><?= $nombre ?></td>
                        <td class="text-center"><?= $sexo ?></td>
                        <td class="text-center"><?= $grupo ?></td>
                        <td class="text-center"><?= $abreviacion ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-around">
                            <a href="trabajo6_formulario.php?accion=cambio&matricula=<?= $matricula ?>" class="btn btn-success" title="Modificar alumno">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a  href="trabajo6_procesa.php?accion=baja&matricula=<?= $matricula ?>"
                                class="btn btn-danger" 
                                title="Eliminar alumno"
                                onclick="borrar_alumno( event,'<?= $matricula ?>' )">
                                    <i class="fas fa-trash"></i>
                             </a>
                            </div>
                        </td>

                    </tr>
                    <?php endwhile; ?>
            </table>

            <?php else: ?>
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    <i class="fas fa-ban fa-2x"></i> No hay alumnos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
        </div>

        
        
        <div class="row mt-2">
        <div class="col col-md-5">
    <div id="mensaje" class="mt-2 mb-5">
    

        <?php 



        if (isset( $_REQUEST[ 'msgcode' ] ) ) {
            $sql = "select mensaje from mensajes where msgcode = ".$_REQUEST[ 'msgcode' ];
            $rs = query( $sql );

            if ( $row = $rs -> fetch_assoc() ) {
                alerta( "danger",$row ["mensaje"]);
            }
        }

        ?>
    </div>
    </div>
    </div>

    <div class="row">
            <div class="col col-md-3">
            <a href="trabajo6_formulario.php?accion=alta" class="btn btn-outline-primary">
                <i class="fas fa-user-plus"></i>
                Agregar alumno
            </a>
            </div>
        </div>

<?php
//Desconecta de la base de datos
desconectar();
?>


<?php
require_once( "trabajo6_foot.php" );
?>