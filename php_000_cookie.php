<?php 
	//crear cookie
	$contenido = "Hola Mundo";
	setcookie("saludar", $contenido, time()+3600);
	//no se puede leer hasta la siguiente sesion
	//echo $_COOKIE['saludar'];

?>