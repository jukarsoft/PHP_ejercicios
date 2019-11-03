<?php 
	$array1 = [];
	$array2 = [];
	$array3 = [];

	//array_push
	for ($i=0;$i<10;$i++){
		$array1[$i]=$i+1;
	}
	print_r($array1);
	echo "<br>";

	//array_push
	for ($i=0;$i<10;$i++){
		$array2[$i]=$i+11;
	}
	print_r($array2);
	echo "<br>";

	//array_push
	for ($f=0;$f<sizeof($array2);$f++) {
		$array3[$f]=$array1[$f] + $array2[$f];
	}
	print_r($array3);
	echo "<br>";


?>