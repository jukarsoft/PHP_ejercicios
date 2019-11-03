<?php 
	/////STRING//////
	//cadenas de texto  extrae una parte de la cadena
	$texto='hola, soy un texto';
	echo substr($texto,1,4);
	echo "<br>";
	//idem substr
	echo strstr($texto,'xt');
	echo "<br>";
	//posición de un texto en la cadena 
	//empezando por el inicio
	echo strpos($texto, 'o');
	echo "<br>";
	//empezando por el final
	echo strrpos($texto, 'o');
	echo "<br>";

	//obtener la extensión de un archivo sin el punto
	$archivo='documento.pdf';
	$pos=strrpos($archivo, '.');
	$ext=substr($archivo, $pos+1);	
	echo $ext;
	echo "<br>";
	//obtener subcadena
	$cadena='wonderful day';
	echo substr($cadena,3,4);
	echo "<br>";
	$texto="esto xxx es una xxx  prueba";
	//replace texto
	$nueva=str_replace('xxx', 'zzz', $texto);
	echo $nueva;
	echo "<br>";

 ?>