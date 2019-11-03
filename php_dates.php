<?php 
	$fecha=date("Y/m/d");
	echo $fecha;
	echo "<br>";
	$fechaUnix=strtotime($fecha);
	echo $fechaUnix;
 ?>