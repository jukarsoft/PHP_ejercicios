<?php 
///PHPMAILER////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$destinatario="jucamova@gmail.com";
$remitente="david-alcolea@alcyon-it.com";
$asunto="esto es la parte de asunto";
$mensaje="esto es la parte de mensaje";
$destinatario=$destinatario;
$remitente=$remitente;
$asunto=$asunto;
$mensaje=$mensaje;
$cabeceras = "From: $remitente\r\n" .
	"Reply-To: $remitente\r\n" .
	"MIME-Version: 1.0 \r\n" .
	"Content-Type: text/html; charset=UTF-8";

if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
	echo "mail enviado correctamente";
};

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	

</form>
</body>
</html>