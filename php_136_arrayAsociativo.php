<?php 
	//array asociativo clave => valor
	$paises=['francia'=>'Paris','alemania'=>'Berlin','italia'=>'Roma','inglaterra'=>'Londres','portugal'=>'Lisboa', 'marruecos'=>'Rabat','suecia'=>'Oslo'];
	print_r($paises);
	echo ('<br>');
	print_r($paises['alemania']);
	echo ('<br>');

	foreach ($paises as $clave => $valor) {
		echo "la capital de: $clave es $valor <br>";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get" action="#">
		<select name="capital" onchange='this.form.submit()'>
			<option>Seleccione capital</option>
			<option>Paris</option>
			<option>Berlin</option>
			<option>Roma</option>
			<option>Londres</option>
			<option>Lisboa</option>
			<option>Rabat</option>
			<option>Oslo</option>
		</select>
		<input type="text" name="pais" value="<?php echo $pais;?>"/>
	</form>
</body>
</html>