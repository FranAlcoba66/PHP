<?php
#clase matriz o molde que se una para representar objeto, que comparten un mismo comportamiento , estado , e identidad

class Automovil{

#PROPIEDADES
#Son las caracteristicas que puede un tener objeto.  
public $marca;
public $modelo;

#METODO 
#Es el algoritmo asociado a un objeto que indica la capcidad de lo que este puede hacer.
#La dif entre metodo y funcion , es que llamamos metodo a las funciones de una clase en POO
#mientras sque llamamos funciones, a los algoritmo de la programacion estructurada.

public function mostrar(){    

    echo "<p>Soy un auto $this->marca,modelo $this->modelo</p>";

}

}

#Objeto
#Una entidad provista de metodos o mensajes a los cuales responde 
# propiedades con valores concretos

$a = new Automovil();
$a -> marca ="Toyota";
$a -> modelo="Corola";
$a -> mostrar();

$b = new Automovil();
$b -> marca ="Hyundai";
$b -> modelo="Accent Vision";
$b -> mostrar();

#Principios de la POO que se cumplen en este ejemplo

#ABSTRACCION:Nuevos tipos de datos (el que tu quieras, tu lo creas).
#ENCAPSULAMIENTO:Organizar el codigo en grupos lógicos.
#OCULTAMIENTO:Ocultar detalles  de implementacion  
#y exponer solo los detalles que sean necesarios para el resto del sistma




?>