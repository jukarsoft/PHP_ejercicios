<?php 
	//crear variables
	$array = [];
	$tmp=null;
	$indice=null;
	//bucle para rellenar array con numeros aleatorios
	for ($i=0; $i < 100 ; $i++) { 
		$aleatorio = rand(1,100);
		$array[$i]=$aleatorio;
	}
	print_r($array);
	echo "<br>";
	sort($array);
	print_r($array);
	echo "<br>";
	$indice=count($array)-1;
	echo "número menor: $array[0] y número mayor: $array[$indice] <br>";



?>