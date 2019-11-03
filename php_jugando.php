<?php 

//sacar el valor de 50 en hezadecimal
$number = 50;
printf("%x", $number);
 
//sacando decimales
$cifra = 50.40;
printf("Sacando 1 decimal: %1\$.1f", $cifra);
printf("Sacando 2 decimales: %1\$.2f", $cifra);

//Sacar el valor de una variable
$numero = 6.3;
print_r ($numero);




//sacar el valor de cadenas de texto de forma básica
print("Frase 1"); //Con parentesis
print "Frase 2 sin parentesis";
print "Con saltos de línea \n esta es otra línea";
print "Escapar carateres especiales como las comillas dobles \" y simples \'.";
 
//Sacar el valor de variables
$variable1 = "valor1";
$variable2 = "valor2";
print "El valor de la variable1 es $variable1";
print "El valor de la variable1 es" . $variable1; //concatenando la variable a la cadena de texto
print $variable1;
 
// También se pueden usar arrays
$array = array("portero" => "Neuer");
print "El portero es" . $array["portero"] ; // Esto es foo !
 
// Ojo al usar las comillas simples, sacarán el nombre de la variable en vez de su valor
print '$variable1';

echo "<br>";
//dividir en otros arrays de 2 elementos de longitud
$colores = array("rojo", "azul", "amarillo", "verde", "negro", "blanco");
echo "Array original";
var_export ($colores);
echo "Arrays resultantes";
print_r(array_chunk($colores, 2));



echo "<br>";

$frase = "Esta frase la vamos a dividir teniendo en cuenta los espacios en blanco";
$palabras = preg_split('/\s/', $frase, null, PREG_SPLIT_OFFSET_CAPTURE);
print_r($palabras);

echo "<br>";echo "<br>";echo "<br>";
$colores = array("rojo", "azul", "amarillo", "verde", "negro", "blanco");
echo "Array original";
var_export ($colores);
echo "Valor aleatorio: ". $colores[array_rand($colores)];

echo "<br>";echo "<br>";echo "<br>";

$colores = array("rojo", "azul", "amarillo", "verde", "negro", "blanco");
echo "Array original";
var_export ($colores);
$seleccion = array_rand($colores,3);
echo "Valor aleatorio1: ". $seleccion[0];
echo "Valor aleatorio2: ". $seleccion[1];
echo "Valor aleatorio3: ". $seleccion[2];
?>