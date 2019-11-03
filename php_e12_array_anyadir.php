<?php 
	echo "<br>";
	echo "array ";
	echo "<br>";
	$array=[20,30,40,0];
	print_r($array);
	echo "<br>";
	//inserta un elemento en la posición 1
	array_unshift($array,10);
	print_r($array);
	echo "<br>";
	//elimina el último elemento del array
	array_pop($array);	
	print_r($array);
	echo "<br>";
		
?>