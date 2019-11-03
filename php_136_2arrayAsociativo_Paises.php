<?php 
	//mismo ejercicio que php_136_arrayAsocitivo_paises.php
	//array asociativo clave => valor
	//crear el array de paises
	$paises=['francia'=>'Paris','alemania'=>'Berlin','italia'=>'Roma','inglaterra'=>'Londres','portugal'=>'Lisboa', 'marruecos'=>'Rabat','suecia'=>'Oslo'];
	print_r($paises);
	//inicializar variables
	$capital='';
	$pais='';
	$indice=null;
	
	//comprobar si se ah seleccionado un valor de la combo
	if (isset($_POST['capital'])) {
		//recuperar valor de la combo
		$capital=$_POST['capital'];
		//busca el valor y devuelve la clave
		$pais=array_search($capital, $paises);
		if ($pais!==null) {
		}
	}

	//parte 3 
	$opciones=null;	
	//recorre el array 
	foreach ($paises as $clave => $valor) {
		if ($capital==$valor) {
			$sel='selected';
		} else {
			$sel='';
		}
		$opciones.="<option $sel>$valor</option>";
	}
	

//foreach ($paises as $clave => $valor) {
//		echo "la capital de: $clave es $valor <br>";
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="#">
		<select name="capital" onchange='this.form.submit()'>
			<option disabled>Seleccione capital</option>
			<?=$opciones;?>;
		</select>
		<input type="text" name="pais" disabled value="<?php echo $pais;?>"/>
	</form>
</body>
</html>