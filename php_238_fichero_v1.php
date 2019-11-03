<?php 
	$fichero='php_238_parametros.txt';
	if (file_exists($fichero)) {
		$contador=file_get_contents($fichero);
		$contador++; 
	} else {
		$contador=1;
	}
	file_put_contents($fichero, $contador);	
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