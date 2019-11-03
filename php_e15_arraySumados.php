<?php 
	//crear variables
	$array1 = [2,4,8,1,3,5];
	$array2 = [1,-1,1,0,1,-2];
	$array3 = [];
	print_r($array1);
	echo "<br>";
	print_r($array2);
	echo "<br>";
	$ind=count($array1)-1;
	for ($i=0; $i < $ind; $i++) {
		$array3[$i]=$array1[$i]+$array2[$i];
		echo "array1= $array1[$i] // array2: $array2[$i] // array3: $array3[$i] <br>";
	}	
	print_r($array3);
	echo "<br>";
?>