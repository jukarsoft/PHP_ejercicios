<?php 
	//inicializar variables
	$existe=false;
	$contenido=null;
	

	//comprobar si se ha pulsado el boton de enviar
	if (isset($_POST['escribir'])) {
		$contenido=$_POST['texto'];
		//escribir //  grabar 
		file_put_contents('php_230_fichero.txt', $contenido);	
	}

	//comprobar si existe el fichero
	$existe=file_exists('php_230_fichero.txt');
	//si existe cargar info en textarea
	if ($existe) {
		$contenido=file_get_contents('php_230_fichero.txt');
	} 


?>
<!DOCTYPE html>
<html>
<head>
	<title>ficheros</title>
</head>
<body>
	<form method="post" action="#">
		<textarea name="texto"><?=$contenido;?></textarea><br>
		<input type="submit" name="escribir">
	</form>
</body>
</html>