<?php 

$destinatario='jucamova@gmail.com';
$remitente='david-alcolea@alcyon-it.com';
$asunto='Correo de prueba';
$mensaje='Texto del correo';
$cabeceras = "From: $remitente\r\n" .
	"Reply-To: $remitente\r\n" .
	"MIME-Version: 1.0 \r\n" .
	"Content-Type: text/html; charset=UTF-8";

if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
	echo "mail enviado correctamente";
};

?>