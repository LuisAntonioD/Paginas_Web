<?php
require_once( "trabajo6_head.php" );
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
require_once( "mensajes.lib.php" );
$mysqli = conectar();

extract( $_REQUEST);
if ( $accion == "alta" ) {
    $matricula   = "";
    $nombre      = "";
    $grupo       = "";
    $beca        = 0;
    $sexo        = "";
    $idcarrera   = 0;
}
elseif ( $accion == "cambio") {
    $sql = "select * from alumnos where matricula = '$matricula'";
    $rs = query ( $sql );

    if ( $row = $rs -> fetch_assoc() ) {
        extract( $row );//Crea todas las variables
    }
    else {
        die( "Error: Algo inesperado paso :(" );
    }
}
else {
    die( "Error: Algo inesperado paso :(" );
}
?>


<form action="trabajo6_procesa.php" method="post" onsubmit="return valida_formulario()">

<input type="hidden" name="accion" value="<?= $accion ?>">
<div class="row mt-4">
    <div class="col col-md-2">
        <div class="form-goup">
            <label for="matricula"><strong>Matricula:</strong></label>
            <input type="text" name="matricula" id="matricula" value="<?= $matricula ?>" class="form-control"
            <?= $accion == "cambio" ? "readonly" : "" ?>>
        </div>
    </div>

    <div class="col col-md-4">
        <div class="form-goup">
            <label for="nombre"><strong>Nombre:</strong></label>
            <input type="text" name="nombre" id="nombre" value="<?= $nombre ?>" class="form-control"
            <?= $accion == "cambio" ? "readonly" : "" ?>>
        </div>
    </div>

    <div class="col col-md-2">
        <div class="form-goup">
            <label for="grupo"><strong>Grupo:</strong></label>
            <input type="text" name="grupo" id="grupo" value="<?= $grupo ?>" class="form-control">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-md-2">
            <div class="form-check">
                <br>
                <label for="beca" class="form-check-label"><strong>Beca:</strong></label>
                <input type="checkbox" name="beca" id="beca"<?= $beca == 1 ? "checked" : "" ?> class="form-check-input">
            </div>
        </div>

        <div class="col col-md-4 mt-4">
                <label><strong>Sexo:</strong></label>&nbsp;&nbsp;
                <div class="form-check form-check-inline">
                    <label for="sexom">Masculino</label>
                    <input type="radio" name="sexo" id="sexom" value="M" <?= $sexo == "M" ? "checked" : "" ?> class="form-check-input">
                </div>
                <div class="form-check form-check-inline">
                <label for="sexof">Femenino</label>
                    <input type="radio" name="sexo" id="sexof" value="F" <?= $sexo == "F" ? "checked" : "" ?> class="form-check-input">
                </div>
        </div>
        
        <?php
        $sql  = "Select idcarrera as idcarreraselect,nomcarrera,nomdivision from carreras as c left join divisiones as d using (
            division ) order by nomdivision,nomcarrera";
        $rscar = query ($sql);
        ?>

        <div class="col col-md-6">
            <div class="form-goup">
                <label for="idcarrera" class="form-check-label"><strong>Carrera:</strong></label>
                <select name="idcarrera" id="idcarrera" class="form-control">
                <option value="0" >-- Selecciona la Carrera --</option>
                <?php 
                $nomdivisionant = "";
                while ( $rowcar = $rscar->fetch_assoc () ):
                /*
                    Obtiene las variables idcarrera,nomcarrera,abreviacion,division
                */
                    extract( $rowcar);


                    if( $nomdivisionant !== $nomdivision){

                        if( $nomdivisionant != ""){
                            echo '</optgroup>'."\n";
                        }
                        echo "\t\t".'<optgroup label=" '.$nomdivisionant.'">'."\n";
                        $nomdivisionant = $nomdivision;
                    } 
                ?>
                <option value="<?= $idcarreraselect ?>"
                            <?= $idcarrera  == $idcarreraselect ? "selected" : "" ?>> 
                            <?= $nomcarrera ?>
                </option>
                <?php endwhile; ?>

                </optgroup>
            </select>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col col-md-5">
    <div id="mensaje" class="mt-2 mb-2">
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
    <div class="row mt-5">
        <div class="col col-md-2">
            <button class="btn btn-success" type="submit">
            <i class="fas fa-save"></i>
                Guardar
            </button>
        </div>
        <div class="col col-md-2">
            <a href="Trabajo6.php" class="btn btn-secondary">
                <i class="fas fa-arrow-circle-left"></i>
                Cancelar
            </a>

        </div>

        </form>


<?php
//Desconecta de la base de datos
desconectar();
require_once( "trabajo6_foot.php" );
?>
