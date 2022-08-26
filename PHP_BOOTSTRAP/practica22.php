<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 22 Conexión con base de datos</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="author" content="Luis Antonio Arredondo">

<!-- Biblioteca CSS BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" >
<!-- Biblioteca CSS FONT-AWESOME -->
<link rel="stylesheet" type="text/css" href="Fontawesome/css/all.min.css" >

<!-- Script JS JQUERY -->
<script src="js/jquery-3.6.0.min.js"></script>
<!-- Script JS BOOTSTRAP -->
<script src="Bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container mt-3">
    <h3>Ejercicio 22 Conexión con base de datos</h3>
        <div class="row">


            

<?php
require_once ("mysql.lib.php");//Inserta el codigo de la biblioteca
$mysqli = conectar();

$sql="Select a.*, abreviacion 
        from alumnos as a left join carreras using (idcarrera) order by nombre";
$rs = query ($sql) ;
?>
<div class="col col-md-7">
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

        <?php
        $sql  = "Select c.*,nomdivision from carreras as c left join divisiones as d using (
            division ) order by nomdivision,nomcarrera";
        $rscar = query ($sql);
        ?>
        <div class="col col-md-5">
            <select class="form-control">
                <option>--Selecciona la Carrera--</option>
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
                <option value="<?= $idcarrera ?>"><?= $nomcarrera ?></option>
                <?php endwhile; ?>

                </optgroup>
            </select>
        </div>
    </div>
</div>

<?php
//Desconecta de la base de datos
desconectar();
?>

</body>
</html>