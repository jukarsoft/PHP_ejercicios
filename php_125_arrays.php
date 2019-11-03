<?php 
	///////JUEGO INSTRUCCIONES ARRAY/////

	//crea array e inicializa con contenido
	$colores= ['rojo', 'azul', 'verde','amarillo','rosa'];
	//añadir un  elemento al final :array.push
	array_push($colores,'gris','blanco');
	print_r($colores);
	echo "<br>";
	//añadir al principio del array
	array_unshift($colores, 'negro');
	print_r($colores);
	echo "<br>";
	//borrar un elemento al final - borra el ultimo elemento
	array_pop($colores);	
	print_r($colores);
	echo "<br>";
	//borrar un elemento al final - borra el ultimo elemento y guarda en una variable
	//$color=array_pop($colores);	
	//print_r($colores);
	//echo "<br>";
	//borrar un elemento al inicio
	array_shift($colores);
	print_r($colores);
	echo "<br>";
	//**borrar un elemento al inicio (guarda el elemento que se quiere borrar en una variable)
	//$color=array_shift($colores);
	//print_r($colores);
	//echo "<br>";
	//**borrar un elemento en cualquier posición  // no reorganiza los indices
	unset($colores[2]);
	print_r($colores);
	echo "<br>";
	//**borrar varios elementos (array, desde(incluido), numero de elementos)
	//puede tener valores negativos
	array_splice($colores, 1,2);
	print_r($colores);
	echo "<br>";
	//**convertir un array a lista de elementos ... para las cookies va bien
	$lista=join(';',$colores);
	echo $lista;
	echo "<br>";
	$lista=implode(';',$colores); //idem que join
	echo $lista;
	echo "<br>";
	//**convertir lista a Array
	$colores=explode(';',$lista);
	print_r($colores);
	echo "<br>";
	//**buscar elementos (un valor) en un array
	$indice=array_search('rosa', $colores);
	print_r($colores);
	print_r($indice);
	echo "<br>";
	$indice=array_search('gris', $colores);
	print_r($colores);
	print_r($indice);
	echo "<br>";

	//comprobar si existe un elemento y devuelve true o false
	if (in_array('rosa',$colores)) {
		echo ('existe');
	} else  {
		echo ('no existe');
	}


	//extrae desde / num elementos
	$nuevo=array_slice($colores, 1,2);
	print_r($colores);
	echo "<br>";


	//buscar un elemento  y borrar
	$indice=array_search('rosa', $colores);
	unset($colores[$indice]);
	print_r($colores);
	echo "<br>";

	//buscar un elemento  y borrar pero no existe  // ojo ha de ser !==
	$indice=array_search('verde', $colores);
	if ($indice!==null) {
		unset($colores[$indice]);
	}
	print_r($colores);
	echo "<br>";


?>