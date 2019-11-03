<?php 
	$numeros=[10,20,30,40,50];
	$valorTotal=$media=0;
	for ($i=0; $i < sizeof($numeros); $i++) { 
		$valorTotal+=$numeros[$i];
	}
	$media=$valorTotal/count($numeros);
	print_r(count($numeros));
	echo "<br>";
	print_r($media);
	echo "<br>";
	print_r($valorTotal);
	echo "<br>";

?>