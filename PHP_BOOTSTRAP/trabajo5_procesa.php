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

    <script src="js/practica5.js"></script>
    <title>Práctica 5 - Tipos de input y el evento submit</title>

</head>
<body>

<div class="container">
<h3 class="mt-3">Practica 5 - Gestión de formularios con PHP</h3>
<?php
extract( $_REQUEST);

if($operacion == "1"){
echo "<br>";
echo '<h4>Tabla de suma</h4>';
echo '<div class="col col-md-8">';
echo '<table class ="table table-bordered table-hover">';

//primer renglon
echo '<tr><td class="text-center"><i class="fas fa-plus fa-2x"</i></td>';
for ($col=1; $col <=$columnas ; $col++) { 
	echo '<th class="text-center table-primary">'.$col.'</th>';
}
echo '</tr>';

//celdas para el resto de renglones
for ($ren=1; $ren <=$renglones ; $ren++) { 
	echo '<tr><th class="text-center table-success">'.$ren.'</th>';
	for ($col=1; $col <=$columnas ; $col++) { 
	echo '<td class="text-center">'.($ren + $col).'</td>';
}
echo '</tr>';
}

echo '</table></div>';
echo "<br><br>";

}



else if($operacion == "2"){
echo "<br>";
echo '<h4>Tabla de resta</h4>';
echo '<div class="col col-md-8">';
echo '<table class ="table table-bordered table-hover">';

//primer renglon
echo '<tr><td class="text-center"><i class="fas fa-minus fa-2x"</i></td>';
for ($col=1; $col <=$columnas ; $col++) { 
	echo '<th class="text-center table-primary">'.$col.'</th>';
}
echo '</tr>';

//celdas para el resto de renglones
for ($ren=1; $ren <=$renglones ; $ren++) { 
	echo '<tr><th class="text-center table-success">'.$ren.'</th>';
	for ($col=1; $col <=$columnas ; $col++) { 
	echo '<td class="text-center">'.($ren - $col).'</td>';
}
echo '</tr>';
}

echo '</table></div>';
echo "<br><br>";
}




else if($operacion == "3"){
echo "<br>";
echo '<h4>Tabla de multiplicar</h4>';
echo '<div class="col col-md-8">';
echo '<table class ="table table-bordered table-hover">';

//primer renglon
echo '<tr><td class="text-center"><i class="fas fa-times fa-2x"</i></td>';
for ($col=1; $col <=$columnas ; $col++) { 
	echo '<th class="text-center table-primary">'.$col.'</th>';
}
echo '</tr>';

//celdas para el resto de renglones
for ($ren=1; $ren <=$renglones ; $ren++) { 
	echo '<tr><th class="text-center table-success">'.$ren.'</th>';
	for ($col=1; $col <=$columnas ; $col++) { 
	echo '<td class="text-center">'.($ren * $col).'</td>';
}
echo '</tr>';
}

echo '</table></div>';
echo "<br><br>";

}



else if($operacion == "4"){
echo "<br>";
echo '<h4>Tabla de dividir</h4>';
echo '<div class="col col-md-8">';
echo '<table class ="table table-bordered table-hover">';

//primer renglon
echo '<tr><td class="text-center"><i class="fas fa-divide fa-2x"</i></td>';
for ($col=1; $col <=$columnas ; $col++) { 
	echo '<th class="text-center table-primary">'.$col.'</th>';
}
echo '</tr>';

//celdas para el resto de renglones
for ($ren=1; $ren <=$renglones ; $ren++) { 
	echo '<tr><th class="text-center table-success">'.$ren.'</th>';
	for ($col=1; $col <=$columnas ; $col++) { 
	echo '<td class="text-center">'.($ren / $col).'</td>';
}
echo '</tr>';
}

echo '</table></div>';
echo "<br><br>";
}

?>


</div>
    
</body>
</html>