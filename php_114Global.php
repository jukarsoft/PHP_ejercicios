<?php 
	//verVariables variables globales y locales
	$a=1;  
	verVariables(); 
	echo $a."<br>"; //¿qué valor se visualizará fuera de la función? 

	//vriable static
	 verVariable();	//en pantalla obtenemos 1 verVariable();
	 verVariable(); //en pantalla obtenemos 2 
	 verVariable(); //en pantalla obtenemos 3 
	 
	 //variable por referencia
	 $v = 5; 
	 echo $v."<br>";
	 sumaVariable($v);

	 function verVariables() { 
		global $a;	//hacemos que la variable global $a pueda usarse dentro de la función 
		echo $a."<br>"; 	//se visualizará 1 ya que php busca la variable global $a 
		$a = 3; 	//modificamos la variable global $a y le asignamos un nuevo valor
		echo $a."<br>";
	 } 

	 function verVariable() { 
	 	static $var = 0; 
	 	$var++; 
	 	echo $var."<br>";
	}

	  function sumaVariable(&$v) {
	  //pasamos la dirección de memoria de $var $
	  	$v++; //sumamos 1 a la variable
	  } 
	  echo $v."<br>"; //en pantalla se mostrará 6 
  
?>