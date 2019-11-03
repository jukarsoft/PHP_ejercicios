<?php 
	//crear variables
	$array = [];
	//bucle para rellenar array con numeros del 1 al 100
	for ($i=0; $i < 100 ; $i++) { 
		$array[$i]=$i+1;
	}
	print_r($array);
	echo "<br>";
	//bucle para saber los numeros pares e impares del array
	foreach ($array as $key => $valor) {
		if ($valor%2==0) {
			echo "número $valor es un número par";
		} else {
			echo "número $valor es un número impar";
		}
		echo "<br>";
	}
?>