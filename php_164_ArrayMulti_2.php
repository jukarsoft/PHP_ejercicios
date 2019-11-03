<?php 
	//array multidimensional
	//$personajes = array('400000f', "sheldon", "Cooper",  "malvavisco,54", "pasadena");
	$personajes[0]= array('400000f', "sheldon", "Cooper", "malvavisco,54", "pasadena");
	$personajes[1]= array('400000f', "sheldon", "Cooper", "malvavisco,54", "pasadena");
	
	//array escalar y asociativo
	$personajes[0]= array('nif'=>'400000f',"nombre"=>"sheldon","apellidos"=>"Cooper", "direccion"=>"malvavisco,54","poblacion"=>"pasadena");

	//array multidimensional y array asociativo
	$personajes['40000000E'] = array('nombre' => 'Amy', 'apellidos' => 'Farrah Fowler', 'direccion' => 'malvavisco, 54', 'poblacion' => 'Pasadena');								
	$personajes['40000002C'] = array('nombre' => 'Bernadette', 'apellidos' => 'Rostenkowsky', 'direccion' => 'malvavisco, 36', 'poblacion' => 'Pasadena');								
	print_r($personajes);
	echo "<br>";
	foreach ($personajes as $k => $v) {
		echo "<br>";
		echo $k;	
		echo "<br>";
		print_r($v);
		echo "<br>";
		foreach ($v as $i => $v2) {
			echo "$i --> $v2 <br>";
		}									
	}									
?>