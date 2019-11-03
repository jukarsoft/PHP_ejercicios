<?php 
	//Abre fichero en modo lectura -r
	$fichero = fopen('php_232_fichero.txt','r');
	$contenido=null;
	//leer el fichero caracter a caracter
	echo "fgetc";
	echo "<br>";
	while (!feof($fichero)) {
		//getc caracter a caracter
		$contenido.= fgetc($fichero);
		echo "$contenido";
		echo "<br>";
	}
	

	$fichero = fopen('php_232_fichero.txt','r');
	$contenido=null;
	//leer el fichero x linea
	echo "fgets";
	echo "<br>";
	while (!feof($fichero)) {
		//gets linea a linea
		$contenido= fgets($fichero);
		echo "$contenido";
		echo "<br>";
	}
	


	//se situa al principio del fichero
	rewind($fichero);
	//leer fichero de una sola vez
	$longitud= filesize('php_232_fichero.txt');
	echo "<br>";
	echo $longitud;echo "<br>";

	//fread lee desde donde esta el puntero
	echo "fread";
	echo "<br>";
	$contenido = fread($fichero,$longitud);
	echo "$contenido";
	echo "<br>";

	fclose($fichero);

 ?>