<?php
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$resultado='';
	$nota=null;
	//se ejecuta si se ha pulsado el boton 'enviar'
	//comprobar si ha pulsado el boton
	if (isset($_POST['enviar'])) {
		//recuperar nota
		$nota=$_POST['nota'];
		//evaluar la nota con IF
		//caso de uso con if que contienen otros if/else
		if ($nota >= 0 && $nota <= 10 ) {
			if ($nota < 5) {
				$resultado="Suspenso con la nota $nota";
			} else if ($nota == 5) {
				$resultado="Aprobado por los pelos $nota";
			} else if ($nota > 5 && $nota < 9) {
				$resultado="Aprobado $nota";
			}
			else {
				$resultado="Matricula de honor $nota";
			}
		} else {
				$resultado="Nota no valida $nota";
		}	
		//informar el resultado 
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method='post' action="#">
		<input type="number" name="nota" value="<?=$nota;?>">
		<input type="submit" name="enviar">
		<input type="text" name="resultado" disabled value="<?php echo $resultado;?>">;
	</form>
</body>
</html>