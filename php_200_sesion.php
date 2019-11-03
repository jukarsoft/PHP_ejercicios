<?php 
	//variable de sesion  (equivalente  a sesionstorage de js)
	//arranca sesion
	session_start();
	//crea una variable de sesion  variable 'sesion' valor 'sesion inicial'
	//vigente mientras esta abierto el navegador
	$_SESSION['sesion1']='sesion inicial';
	echo $_SESSION['sesion1'];
	$_SESSION['sesion2']='sesion xxxxxx';
	echo $_SESSION['sesion2'];
	//borrar variable de session
	unset($_SESSION['sesion1']);
	//borra todas las variables de sesion
	session_destroy();
	

?>