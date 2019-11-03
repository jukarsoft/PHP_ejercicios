<?php 
	$nameFichero='php_238_parametrosW.txt';
	$fichero = fopen($nameFichero, 'w+'); 
	$contador=0;
	echo "$fichero";
	if (file_exists($nameFichero)) {
		$long = filesize($nameFichero);
		echo "$long";
		if ($long<0 || $long=null) {
			$contador=1;
		} else {
			$contador=(int)fgets($fichero);
			echo "leido";
			echo $contador;
			if (!is_numeric($contador)){
				echo "entro b";
				$contador=1;
			}else {
				echo "entro c";
				$contador=$contador+1;
				echo $contador;
			}
		}
	} else {$contador=100;}


	rewind($fichero);
	echo "entro d";
	echo $contador;
	fputs($fichero, $contador); 
	fclose($fichero);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?=$contador?></h1>
</body>
</html>