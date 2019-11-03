<?php 
	echo "<br>";
	echo "array clasificación inversa";
	echo "<br>";
	$array=[4,2,7,12,23];
	print_r($array);
	echo "<br>";
	//array sort
	sort($array);
	//reverse del array
	rsort($array);
	print_r($array);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "array invertido";
	$array2=[4,2,7,12,23,44];
	$tmp=null;
	$i=0;
	$j=count($array2)-1;
	echo "<br>";
	print_r($array2);
	echo "<br>";
	echo "$i -- $j ";
	while ($i < $j) {
		$tmp=$array2[$i];
		$array2[$i]=$array2[$j];
		$array2[$j]=$tmp;
		$i++;
		$j--;
		echo "$array[$i] -- $array2[$j] -- $tmp";
		echo "<br>";
	} 
	print_r($array2);	
?>