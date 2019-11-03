<?php 
	$dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 7,true];
	//recorrer un array
	echo $dias[3];
	echo $dias[0]; 
	//sizeof o count nos dice elementos de un array
	for ($i=0; $i < sizeof($dias); $i++) { 
		echo "<br> $dias[$i] <br>";
	}
	foreach ($dias as $indice => $valor) {
		echo "<br> $indice - $valor <br> ";
	}
	foreach ($dias as $valor) {
		echo "<br> $valor <br> ";
	}
	//volcar el contenido array en pantalla
	echo "<br>";
	print_r($dias);echo "<br>";
	echo "<br>";
	var_dump($dias);echo "<br>";
	echo "<br>";
	var_export($dias);echo "<br>";
?>