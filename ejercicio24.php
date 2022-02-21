<?php

//Una clase es un modélo o una plantilla.
class persona {

    //Propiedades. Por ejemplo una persona tiene un nombre.
    //Instanciadas como public, todos pueden acceder y modificar.
    public $nombre = "Anónimo";
    //Solo se puede acceder dentro del entorno de la clase o mostrar a traves de un método que retorne su valor.
    private $edad;
    //Se puede acceder al valor mediante la misma clase y por las clases heredadas
    protected $altura = 1.5;

    //Método. Medio por el cuál cada instancia de "persona" puede designar su nombre.
    public function asignarNombre($newNombre){
        //Se utiliza la palabra reservada this para hacer referencia a el entorno de la clase.
        $this->nombre=$newNombre;
    }
    //Función que retorna el valor de edad. Variable privada.
    public function mostrarEdad(){
        //Las propiedades privadas solo se pueden alterar dentro de la clase.
        $this->edad = 12;
        //El método tiene que devolver el dato.
        return $this->edad;
    }

}

//Se instancia un objeto. Hereda todas las propiedades y métodos de su clase (su molde). Clase  es el molde, objeto es "hijo" creado a través del molde.
$newAlumno = new persona;
//De este modo podemos asignarle un nombre, medíante de su metodo asignarNombre.
$newAlumno->asignarNombre("Juan");

//Para acceder a una propiedad se realiza de esta manera.
echo $newAlumno->nombre;
//Mostrando edad. Variable privada.
echo $newAlumno->mostrarEdad();

?> 