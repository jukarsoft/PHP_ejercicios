<?php
 	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$ancho=null;
	$alto=null;
	$resultado=null;
	if (isset($_POST['enviar'])) {
		$ancho=$_POST['ancho'];
		$alto=$_POST['alto'];
		$area=calcularArea($ancho,$alto);
		$perimetro=calcularPerimetro($ancho,$alto);
		$resultado="el area es: $area  ---  y el perimetro es:  $perimetro";
	}

	function calcularArea($a,$b) {
		 $calculo=$a*$b;
		 return $calculo;
	}
	function calcularPerimetro($a,$b) {
		 $calculoPerimetro=$a*2+$b*2;
		 return $calculoPerimetro;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>calculo area y perimetro</title>
	<style type="text/css">
		div	{
			width: <?=$ancho."px";?>;
			height: <?=$alto."px";?>;
			background-color: blue;
		}
		p {
			font-size: 1.5em;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<p><?=$resultado?></p>
	<form method='post' action="#">
		<label>ancho</label>
		<input type="number" name="ancho"  min="1" value="<?=$ancho;?>">
		<label>alto</label>
		<input type="number" name="alto"  min="1" value="<?=$alto;?>">
		<input type="submit" name="enviar" value="Enviar consulta">
		<div></div>
	</form>
</body>
</html>