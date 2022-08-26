<?php
require_once ("mensajes.lib.php");//Inserta el codigo de la biblioteca
session_start();

extract( $_REQUEST);//Extrae las variables $u y $s

if ( valida_sesion( $u, $s) ) :


    require_once( "trabajo7_head.php" );
?>

<div class="row mt-5">
<div class="col col-md-4">
<a href="trabajo7_cerrar.php?u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-secondary">
       <i class="fas fa-sign-out-alt"></i> 
       Cerrar sesión <?= $u ?>
       </a>

       
</div>
<div class="col col-md-5">
    <img src="upload/fotousuarios/<?= $_SESSION[ "foto" ]?>" class="rounded" style="width:100px">
    <h4>Bienvenido, <?= $_SESSION[ "nomusuario" ] ?></h4>
</div>
</div>



<div class="row">

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="Select a.*, abreviacion 
        from alumnos as a left join carreras using (idcarrera) order by nombre";
$rs = query ($sql);
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
                            <a href="trabajo7_formulario.php?accion=cambio&matricula=<?= $matricula ?>&u=<?= $u ?>&s=<?= $s ?>" class="btn btn-success" title="Modificar alumno">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a  href="javascript:void(0);"
                                class="btn btn-danger" 
                                title="Eliminar alumno"
                                onclick="borrar_alumno( event,'<?= $matricula ?>','<?= $u ?>','<?= $s ?>' )">
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



        if (isset( $_REQUEST[ "msgcode" ] ) ) {
            codigo_alerta( $_REQUEST[ "msgcode" ] );
        }

        ?>
    </div>
    </div>
    </div>

    <div class="row">
            <div class="col col-md-3">
            <a href="trabajo7_formulario.php?accion=alta&matricula=<?= $matricula ?>&u=<?= $u ?>&s=<?= $s ?>" class="btn btn-outline-primary">
                <i class="fas fa-user-plus"></i>
                Agregar alumno
            </a>
            </div>
        </div>

<?php
//Desconecta de la base de datos
    desconectar();

    require_once( "trabajo7_foot.php" );

else :
    header( "location:Trabajo7.php?msgcode=7" );
endif;
?>