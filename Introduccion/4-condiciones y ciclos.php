<?php
#Condiciones

# en este caso si lña condicion no se cumple no imprimira bnada por ´pantalla
$a =15; # por ejemplo si a fuera menor que b
$b =10;
if ($a > $b){
	echo "a es mayor b";
}

#en limpio
$a =10;
$b =10;

if ($a > $b){
	echo "a es mayor b";
}

else if($a == $b ){
	echo "a es igual b" ;	
}
else {
	echo "a es menor que b";# else no lleva condiciones
}


#Metodo Switch
echo "<br><br>";
$dia = "vi";

switch ($dia){
	case 'sabado':
    echo "voy a estudiar php";
    break;
    
    case 'viernes':
    echo "voy a tomar cerveza";
    break;
    
    case 'domingo':
    echo "voy a descansar";
    break;
    
    default: echo "Voy a trabjar";
}

#ciclo while
$n=1;

while($n <=5){
    #primero se debe acceder al metodo echo  y luego usar el $n++ de lo contrario da error
    echo $n;
	$n++;
    
}

#ciclo do while
$p=1;

do {
	echo $p;
    $p++;   
}
while($p <=5);
echo "<br><br>";
	
#ciclo for

for ($i=0; $i <=5;$i++){
echo $i;
}

?>