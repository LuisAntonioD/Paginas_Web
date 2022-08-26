<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="container  mt-5">
	<h3>Ejercicio 21 - Formularios PHP</h3>



    <?php
// Cargar archivo externo de funciones
function fecha_legible( $fecha ) {

	if ( $fecha == "" ) return "";

	$meses = array( 
		"enero", "febrero", "marzo", "abril", "mayo", "junio", 
		"julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre" );

	$afecha = explode( "-", $fecha );
	$nuevafecha = ( (int)$afecha[2] )." de ".$meses[ (int)$afecha[1] - 1 ]." de ".$afecha[0];

	return $nuevafecha;
}

// $_REQUEST sustituye tanto a $_GET como a $_POST
$nombre   = $_REQUEST[ "nombre" ];		
$contrasenia      = $_REQUEST[ "contrasenia" ];
$oculto = $_REQUEST[ "oculto" ];
$tipo        = $_REQUEST[ "tipo" ] ?? "No seleccionado";		// Radio Button
$beca        = isset( $_REQUEST[ "beca" ] ) ? "SI" : "NO";	// Checkbox
$fecnac      = fecha_legible( $_REQUEST[ "fecnac" ] );
$carrera     = $_REQUEST[ "carrera" ];
$comentario  = $_REQUEST[ "comentario" ];
?>

<div class="row">
    <div class="col col-md-7">
	<table class="table table-bordered table-hover">

		<tr>
			<th class="table-success">Nombre</th>
			<td><?= $nombre ?></td>
		</tr>
		
		<tr>
			<th class="table-success">Contraseña</th>
			<td><?= $contrasenia ?></td>
		</tr>

		<tr>
			<th class="table-success">Oculto</th>
			<td><?= $oculto ?></td>
		</tr>

		<tr>
			<th class="table-success">Tipo de beca</th>
			<td><?= $tipo ?></td>
		</tr>

		<tr>
			<th class="table-success">Beca</th>
			<td><?= $beca ?></td>
		</tr>

		<tr>
			<th class="table-success">Fecha nacimiento</th>
			<td><?= $fecnac ?></td>
		</tr>

		<tr>
			<th class="table-success">Carrera</th>
			<td><?= $carrera ?></td>
		</tr>

		<tr>
			<th class="table-success">Comentario</th>
			<td><?= $comentario ?></td>
		</tr>

		<tr>
			<th class="table-success">Archivo adjunto</th>
			<td>
			<?php
			if ( isset( $_FILES[ "archivo" ] ) && move_uploaded_file( 
					$_FILES[ "archivo" ][ "tmp_name" ],
					"upload/".$_FILES[ "archivo" ][ "name" ] ) ) :
			?>
				<small>
                     <strong>Nombre:</strong>
					<?= $_FILES[ "archivo" ][ "name" ] ?><br>
					<strong>Tipo:</strong>
					<?= $_FILES[ "archivo" ][ "type" ] ?><br>
					<strong>Tamaño:</strong>
					<?= number_format( $_FILES[ "archivo" ][ "size" ] ) ?> bytes<br>
					<a href="upload/<?= $_FILES[ "archivo" ][ "name" ] ?>" target="_blank">
                    <strong>Descargar</strong>

					</a>
					<br>
                </small>
			<?php
			else : 
			?>
				<span class="text-danger">¡Imposible subir archivo!</span>
			<?php
			endif; 
			?>	
			</td>
		</tr>

	</table>
    </div>
    </div>
    </div>
    </body>
</html>