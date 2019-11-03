<?php 
///PHPMAILER////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

	
	//comprobar si se ha pulsado enviar
	if (isset($_POST['enviar'])) {
		//recuperar información del formulario
		$to_email=$_POST['correo'];
		$to_Name=$_POST['nombre'];
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];	
		if (isset($_FILES['archivo'])) {
			$archivo=$_FILES['archivo'];
		}
		//print_r($archivo);

		//enviar correo
		$mail = new PHPMailer();
		$mail->CharSet = 'utf-8';
		$mail->From = "jucamova@gmail.com";
		$mail->FromName = "juanCarlos";
		$mail->AddAddress($to_email, $to_Name);

		//$mail->addCC('jc-moreno@atinet.es'); //añadir copia a otro correo
		//$mail->addBCC('bcc@example.com'); //añadir copia oculta a otro correo
		$mail->isHTML(true); // el mensaje es en formato HTML
		$mail->Subject = $asunto;
		$mail->Body = $mensaje;
		$mail->AltBody = 'Mensaje alternativo en texto para clientes de correo que no soportan HTML';
		$mail->SMTPDebug = 1; // indica si queremos activar los mensajes del debugger (0 o 1)
		if (isset($_FILES['archivo'])) {
			$mail->addAttachment($archivo['tmp_name'], $archivo['name']);
		}		
		if(!$mail->send()) {
		echo 'Mensaje NO enviado';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Mensaje enviado correctamente';
		} 
	}


/////////////////////////////////////////////////////////////////////////////////////



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
		form {
			background-color: lightgrey;
			border: 2px solid yellow;
			box-shadow: 1px 3px black;
			width: 400px;
			height: 200px;
		}
	</style>
</head>
<body>
	<form method="post" name="formulario" enctype="multipart/form-data">
		<label>Nombre destino</label>
		<input type="nombre" name="nombre"><br>
		<label>email destino</label>
		<input type="correo" name="correo"><br>
		<label>Asunto</label>
		<input type="asunto" name="asunto"><br>
		<textarea  name="mensaje"></textarea>
		<input type="file" name="archivo"><br><br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>