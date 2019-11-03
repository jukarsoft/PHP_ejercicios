<?php 
	/////SERVIDOR SUBIR ARCHIVOS///////
	$arrayExt = ['jpg', 'gif', 'png', 'svc', 'txt'];
	
	//comprobar si se ha pulsado enviar
	if (isset($_POST['enviar'])) {
		//recuperar información del formulario
		$to_email=$_POST['correo'];
		$to_Name=$_POST['nombre'];
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];	
		//Comprobar si se ha seleccionado un archivo
		if (isset($_FILES['archivo'])) {
			$archivo=$_FILES['archivo'];
		//comprobación del tamaño del archivo   (bytes)
			try {
				if ($archivo['size']<500000 && validaExt($archivo,$arrayExt)) {
				//mover a una carpeta de servidor
					move_uploaded_file($archivo['tmp_name'], "../tmp/$archivo[name]");
					echo "archivo en el servidor";
				} else { throw new Exception('error al subir el fichero',10);}
			} catch (Exception $error) {
				//captura de excepciones $error es un objeto de la clase Exception
				echo $error->getMessage(); //mensaje de error
				echo "<br>";
				echo $error->getCode();//nos muestra el código de error
				echo "<br>";
				echo $error->getLine();//nos muestra en que linea de código se ha producido el error
			}
		}
		//print_r($archivo);
	}

	//validar una extensión de archivo
	function validaExt ($file,$arrayExt) {
		$pos=strrpos($file['name'], '.');
		$ext=substr($file['name'], $pos+1);
		if (!in_array($ext, $arrayExt)) {
			return false;
		} else  return true;
		// if ($ext=="gif" || $ext=="png" || $ext=="jpg" || $ext=='txt') {
		// 	return true;
		// } else return false;	


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