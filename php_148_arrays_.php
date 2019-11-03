<?php 
	////////ARRAY INSTRUCCIONES///////
	$paises=['francia'=>'Paris','alemania'=>'Berlin','italia'=>'Roma','inglaterra'=>'Londres','portugal'=>'Lisboa', 'marruecos'=>'Rabat','suecia'=>'Oslo'];
	$dias=['lunes', 'martes', 'miercoles','jueves', 'viernes', 'sabado', 'domingo'];
	print_r($paises);
	echo "<br>";
	print_r($dias);
	echo "<br>";
	//busca por valor
	$existe=in_array('Berlin',$paises);
	print_r($existe);
	//buscar por clave/indice
	$existe=array_key_exists('francia', $paises);
	print_r($existe);
	echo "<br>";


	//ordenar arrays
	sort($dias);
	print_r($dias);
	echo "<br>";

	//ordenar arrays en reverso
	rsort($dias);
	print_r($dias);
	echo "<br>";

	//sort arrays asociativos  -- ordena por el valor
	asort($paises);
	print_r($paises);
	echo "<br>";

	//ordenar arrays asociativos de forma inversa
	arsort($paises);
	print_r($paises);
	echo "<br>";

	//sort para arrays asociativos por clave
	ksort($paises);
	print_r($paises);
	echo "<br>";
	//sort para arrays asociativos por clave de forma inversa
	krsort($paises);
	print_r($paises);
	echo "<br>";

	//ordenar array escalar de forma aleatoria
	shuffle($dias);
	print_r($dias);
	echo "<br>";

	//ordenar array multisort
	$numeros=[2,1,7,4,6,0];
	$letras=['a','b','c','d','e','f'];
	print_r($numeros);
	echo "<br>";
	print_r($letras);
	echo "<br>";
	echo "<br>";
	array_multisort($numeros, SORT_ASC, $letras);
	print_r($numeros);
	echo "<br>";
	print_r($letras);
	echo "<br>";









?>