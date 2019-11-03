<?php 
	//host, usuario, password, base de datos
	$conexionBanco = mysqli_connect('localhost', 'root', 'Bit_AlumnoA4', 'banco2')
	or die("hubo un error al conectar con la base de datos");
	mysqli_set_charset($conexionBanco, "utf8");
	//$conexionBanco es un objeto de conexión

 ?>