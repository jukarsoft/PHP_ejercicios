<?php 
	muestraNumeros(); //función recursiva  - variable static

	function muestraNumeros() {
 		static $numero = 0; //para evitar que se reinicie en cada llamada 
 		$numero++; 
 		if ($numero<=10) { 
 			echo $numero.'<br>'; 
 			MuestraNumeros(); //llamada recursiva a la función 
		}; 
	} 
?>