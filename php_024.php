<?php

	$a=3;
	$b='3';
	$c=true;
	$d=1;

	echo ($a == $b);//retorna true
	echo '<br>';
	//compara contenido y tipo
	echo ($a === $b);//retorna false 
	echo '<br>';
	echo ($c == $d);//retorna true 
	echo '<br>';
	//compara contenido y tipo
	echo ($c === $d);//retorna false
	echo '<br>';


	$op1=true; $op2=false;
	echo "muestra contenido booleano";
	echo "<br/> op1: ". $op1 ." op2: ".$op2;
	echo "<br/> op1 && op2: ". ($op1 && $op2);
	echo "<br/> op1 || op2: ". ($op1 || $op2);
	echo "<br/> !op1: ". !$op1;
	echo "<br/> op1 & op2: ". ($op1 & $op2);
	echo "<br/> op1 | op2: ". ($op1 | $op2);
	echo "<br/> op1 ^ op2: ". ($op1 ^ $op2);
?>