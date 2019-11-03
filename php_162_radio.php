<?php 
	$valor=null;
	if (isset($_POST['enviar'])) {
		if (isset($_POST['check'])){
			$valor= $_POST['check'];
			print_r($valor);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
		<input type="checkbox" name="check[]" value="check1" >
		<input type="checkbox" name="check[]" value="check2" >
		<input type="submit" name="enviar" value="enviar">
	</form>

</body>
</html>