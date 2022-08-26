<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Luis Antonio Arredondo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

	<!-- Biblioteca CSS BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" >
	<!-- Biblioteca CSS FONT-AWESOME -->
	<link rel="stylesheet" type="text/css" href="Fontawesome/css/all.min.css" >

	<!-- Script JS JQUERY -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<!-- Script JS BOOTSTRAP -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>

    <script src="js/ejercicio20.js"></script>
    <title>Ejercicio 20 - Lenguaje PHP</title>

</head>
<body>

<div class="container">
<h3 class="mt-3">Ejercicio 20 - Lenguaje PHP</h3>
<!--Aqui comienza el scrip-->
<?php
/*Esto es codigo php*/

echo '<h1 class="text-primary">Esto es PHP</h1>';

//Las variables en PHP se identifican con un signo de $ al inicio del nombre
for ($i = 1; $i <= 6; $i++) { 
	//PHP inserta el valor de cualquier variable
	//Dentro de una cadena entrecomillada con comilla doble ("")
	echo "\n<h$i>Nueva forma de ver HTML (es PHP)</h$i>";
}
/*Aqui termina el codigo PHP*/

?>
<!--Aqui termina el scrip PHP-->

<hr/>
<h3>Arreglos PHP</h3>

<?php

$colores = array('rojo','verde','azul','negro' );
echo "<h5>Usando <i>for</i></h5>";
for ($i=0; $i < count($colores); $i++) { 
	echo $colores[$i]."<br />";
}

//foreach se usa para recorrer elemento de un arreglo
echo '<h5>Usando <i>foreach</i></h5>';
foreach ($colores as $color) {
	echo $color."<br />";
}

/*

Arreglos asociativos
Se crean indices que pueden ser numeros o cadenas

*/

$abotones = array(
"rojo"=> "danger",
"verde" => "success",
"azul" => "primary",
"aguamarina" => "info",
"gris" => "secondary",
"negro" => "dark",
"amarillo" => "warning",
"grisclaro" => "light"

);

//var_dump: imprime el contenido y tipo de una variable
//print_r: imprime el contenido de un arreglo
echo "<br><br>";
print_r($colores);

echo "<br><br>";

print_r($abotones);

echo '<h5 class="mt-3">usando <i>foreach</i></h5>';
foreach($abotones as $color => $clase_bs){
	echo $color." => $clase_bs<br />";
}

echo '<h5 class="mt-3">Botones dinamicos</h5>';
echo '<div class="d-flex justify-content-between">';
foreach ($abotones as $color => $clase_bs){
	//Concatenación usando punto (.)
	echo "\n".'<button class="btn btn-'.$clase_bs.' btn-lg">'.$color.'</button>';
}

echo '</div>';

echo "<br><br>";
echo '<h3>Ciclos anidados</h3>';
echo '<div class="col col-md-8">';
echo '<table class ="table table-bordered table-hover">';

//primer renglon
echo '<tr><td class="text-center"><i class="fas fa-times fa-2x"</i></td>';
for ($col=1; $col <=15 ; $col++) { 
	echo '<th class="text-center table-primary">'.$col.'</th>';
}
echo '</tr>';

//celdas para el resto de renglones
for ($ren=1; $ren <=15 ; $ren++) { 
	echo '<tr><th class="text-center table-success">'.$ren.'</th>';
	for ($col=1; $col <=15 ; $col++) { 
	echo '<td class="text-center">'.($ren * $col).'</td>';
}
echo '</tr>';
}

echo '</table></div>';
?>

</div>


</body>
</html>