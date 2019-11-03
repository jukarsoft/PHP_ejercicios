<?php 
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
		$pais=array_search($capital, $paises);
		if ($pais!==null) {
		}
	}
	//


	//parte 3 	
		
	

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
			<option <?php if ($capital=='Paris') {echo 'selected';}?> >Paris</option>
			<option <?php if ($capital=='Berlin') {echo 'selected';}?> >Berlin</option>
			<option <?php if ($capital=='Roma') {echo 'selected';}?> >Roma</option>
			<option <?php if ($capital=='Londres') {echo 'selected';}?> >Londres</option>
			<option <?php if ($capital=='Lisboa') {echo 'selected';}?> >Lisboa</option>
			<option <?php if ($capital=='Rabat') {echo 'selected';}?> >Rabat</option>
			<option <?php if ($capital=='Oslo') {echo 'selected';}?> >Oslo</option>
		</select>
		<input type="text" name="pais" disabled value="<?php echo $pais;?>"/>
	</form>
</body>
</html>