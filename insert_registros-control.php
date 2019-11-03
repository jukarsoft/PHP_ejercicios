<?php 
	//incorporar el fichero de conexión
	require 'conexionBanco.php';
	//contruir la sentencia sql // inseert más de un registro
	$sql="INSERT INTO personas VALUES(NULL, '38424012M','juan Carlos', 'Moreno'),(NULL, '12345678A','Antonio', 'Gomez'),(NULL, '22333444Z','Ramón', 'Heredia')";
	//ejecutar la sentencia sql
	//tratamiento errores opcion 1
	//mysqli_query($conexionBanco,$sql) or die(mysqli_error($conexionBanco));  //ojo no confundir con mysql_query
	if (!mysqli_query($conexionBanco,$sql)) {
		if (myqli_errno($conexionBanco,$sql) == 1062) {
			//clave duplicada
			echo "persona ya existe en la bbdd";
		} else {
			die(mysqli_error($conexionBanco));
		}

	} else {
		echo "un registro añadido a personas";
	}
	
 ?>