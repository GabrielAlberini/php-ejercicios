<?php

class Persona{

    // - Otra forma de ejecutar referencias (objetos). Es a través de una función estática.
    // - Los métodos estáticos pueden llamarse sin necesitar de una instancia (creación de un objeto).
    // - Los métodos tradicionales se declaran con una public function, esta vez es igual pero con la palabra reservada static en medio.
    public static function presentacion(){
        echo "Hola! Haz usado un método estático! :) <br>";
    }

}

//Manera tradicional.
// - Se instancia el objeto.
// - Se llama al método.
$objInstanciado = new Persona();
$objInstanciado->presentacion();

//Nueva forma a través de método estático.
// - Primer el nombre de la clase en minúscula, luego doble dos puntos y por ultimo la llamada al método.
persona::presentacion(); 

?>