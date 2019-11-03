<?php 
	/////FICHEROS SECUENCIALES/////
	//formas para leer un fichero / lectura de un fichero
	//lee fichero completo
	echo "file_get_contents <br>";
	$contenido=file_get_contents('fichero_1.txt');
	echo "$contenido";
	echo "<br>";
	//lee fichero y muestra 
	echo "readfile <br>";
	readfile('fichero_1.txt');
	echo "<br>";
	//lee muestra y guarda la longitud del fichero
	echo "readfile <br>";
	$longitud=readfile('fichero_1.txt');
	echo "$longitud";
	echo "<br>";
	//leer linea a linea el fichero / devuelve registros en cada item del array
	
	echo "file <br>";
	$array = file('fichero_1.txt');
	print_r($array);
	echo "<br>";

	//escribir //  grabar 
	echo "file_put_contents <br>";
	file_put_contents('fichero_2.txt', 'nuevo contenido');	
	//lee muestra y guarda la longitud del fichero
	echo "readfile <br>";
	$longitud=readfile('fichero_2.txt');
	echo "$longitud";
	echo "<br>";
	//para saber si existe
	echo "file_exists <br>";
	$booleano=file_exists('fichero_3.txt');
	echo "<br>";

 ?>