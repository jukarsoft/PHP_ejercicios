<?php
	header('Content-Type: text/html; charset=UTF-8');
	//variables
	$num1=null;
	$num2=null;
	$par1=null;
	$par2=null;
	$resultado='';
	//boton enviar pulsado
	if (isset($_POST['enviar'])) {
		//recoger atributos del formulario
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		//calculo
		$par1=$num1%2;
		$par2=$num2%2;
		//evaluación de las condiciones
		if ($num1%2==0 && $num2%2==0) {
			$resultado="los dos números son pares: $num1 $num2";
		} else if ($par1==1 && $par2==1) {
			$resultado="los dos números son impares: $num1 $num2";
			} else {$resultado="uno de los dos números es par: $num1 $num2";}
		//envio resultado al navegador
		echo "el resultado es: $resultado";	

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var mensaje = '<?=$resultado;?>';
		if (mensaje!='') {
			alert (mensaje);
		}
		
	</script>
</head>
<body>
	<form method='post' action="#">
		<label>Numero 1</label>
		<input type="number" name="num1" value="<?=$num1;?>">
		<label>Numero 2</label>
		<input type="number" name="num2" value="<?=$num2;?>">
		<input type="submit" name="enviar">
		
	</form>
</body>
</html>