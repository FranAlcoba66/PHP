<?php
#Metodo Print
print "Mi primer codigo PHP utilizando print";
print "<br><br>";

#Metodo Echo
echo "Mi segundo codigo PHP utilizando echo";
echo "<br><br>";

#Variable Numerica
$numero=5;
echo "Esto es una variable numerica: $numero";
echo "<br><br>";

#Variable texto
$string="hola soy un string";
echo "Esto es una variable de texto: $string";
echo "<br><br>";

#Variable Booelan
$boolean=TRUE;
echo "Esto es un boolean true: $boolean";
echo "<br><br>";

#Variable Booelan y actualizar la vairalbe boolean
$boolean=FALSE;
echo "Esto es un boolean false: $boolean";
echo "<br><br>";

#Variable array
$colores = array (rojo,amarillo);
echo "Esto es una variable arreglo:$colores[1]";

#Variable array con propiedades
$verduras = array ("verdura1"=>"lechuga","verdura2"=>"tomate");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1] ";

#Variable array con propiedades
$frutas = (object) ["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1";

?>

