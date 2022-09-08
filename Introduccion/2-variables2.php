<?php
#Metodo var_dump y variables

#Variable Numerica
$numero=5;
echo "Esto es una variable numerica: $numero <br>";
var_dump($numero);
echo "<br><br>";

#Variable texto
$string="hola soy un string";
echo "Esto es una variable de texto: $string <br>";
var_dump($string);
echo "<br><br>";

#Variable Booelan
$boolean=TRUE;
echo "Esto es un boolean true: $boolean <br>";
var_dump($boolean);
echo "<br><br>";

#Variable Booelan y actualizar la vairalbe boolean
$boolean=FALSE;
echo "Esto es un boolean false: $boolean<br>";
var_dump($boolean);
echo "<br><br>";

#Variable array
$colores = array (rojo,amarillo);
echo "Esto es una variable arreglo:$colores[1]<br>";
var_dump($colores);
echo "<br><br>";

#Variable array con propiedades
$verduras = array ("verdura1"=>"lechuga","verdura2"=>"tomate");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1] <br>";
var_dump($verduras);
echo "<br><br>";

#Variable array con propiedades
$frutas = (object) ["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1 <br>";
var_dump($frutas);
echo "<br><br>";

?>