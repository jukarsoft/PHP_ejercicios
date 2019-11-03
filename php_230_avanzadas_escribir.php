<?php 
	//Abre fichero en modo lectura -r
	$fichero = fopen('php_232_fichero.txt','r+');
	$contenido=null;
	//leer el fichero
	while (!feof($fichero)) {
		//getc caracter a caracter
		//gets linea a linea
		$contenido.= fgets($fichero);
		
	}

	fwrite($fichero,'fwrite escribe');
	
	fclose($fichero);



 ?>