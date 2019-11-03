<?php 
////mail php/////


 //comprobar si se ha pulsado enviar
	if (isset($_POST['enviar'])) {
		//recuperar información del formulario
		$to_email=$_POST['correo'];
		$to_Name=$_POST['nombre'];
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];	

	$remitente="david-alcolea@alcyon-it.com";
	$asunto="esto es la parte de asunto";
	$mensaje="esto es la parte de mensaje";
	$destinatario=$to_email;
	$remitente="jucamova@gmail.com";
	$asunto=$asunto;
	$mensaje=$mensaje;
	$cabeceras = "From: $remitente\r\n" .
		"Reply-To: $remitente\r\n" .
		"MIME-Version: 1.0 \r\n" .
		"Content-Type: text/html; charset=UTF-8";

	if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
		echo "mail enviado correctamente";
	};

}	




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		label {
			width: 120px;
			display: inline-block;
			
		}
	</style>
</head>
<body>
<form method="post" name="formulario">
	<label>Nombre destino</label>
	<input type="nombre" name="nombre"><br>
	<label>email destino</label>
	<input type="correo" name="correo"><br>
	<label>Asunto</label>
	<input type="asunto" name="asunto"><br>
	<textarea  name="mensaje"></textarea>
	<input type="submit" name="enviar">


</form>
</body>
</html>