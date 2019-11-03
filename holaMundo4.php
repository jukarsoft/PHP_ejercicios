<?<?php 
	//crear dos variables
	$titulo='hola mundo';
	$parrafo='párrafo despues del titulo reducido';
	$nombre='Manuel';
	$dia='martes';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<h1><?php echo $titulo;?></h1>
	<p><?=$parrafo;?></p>
	<p><?php echo 'Hola '.$nombre.', hoy es: '.$dia;?></p>
	<p><?php echo "Hola $nombre , hoy es: $dia";?></p>
</body>
</html>