<?php
#Funciones sin parametros

function saludo() {
echo "Hola <br>";
}

saludo();


#Funciones con parametros

function despedida($adios){
echo $adios."<br>";
}
    
despedida("hasta la vista baby");
despedida("ciao");
    
#Funciones conn retorno  
#para llamar a estas funciones debe usarse el metodo echo a diferencia de las anteriores

function retornar($retornar){

	return $retornar;

}

echo retornar("lo que quiero que me retorne")



?>