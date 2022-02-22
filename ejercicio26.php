<?php

//Una clase es un modélo o una plantilla.
class persona {

    public $nombre = "Anónimo";
    public $apellido;
    private $edad;
    protected $altura;

    // - El contructor comienza como la declaración de una función.
    // - La palabra reservada es contruct, antes deben ir dos guión bajos. Esto le indica a php que necesita todos los datos que se encuntran dentro de forma inicial.
    // - La función constructora es un método que permite iniciar objetos a partir de datos iniciales.
    // - Todo lo que esté dentro del constructor sera obligatorio. De caso contrario el navegador mostrará un error.
    function __construct($newNombre, $newApellido, $newAltura){
        //El dato se ingresa en la inicialización del objeto y le designa el valor a la variable que se encuentra dentro de la clase.
        $this->nombre=$newNombre;
        $this->apellido=$newApellido;
        $this->altura=$newAltura;
    }

    public function asignarNombre($newNombre){
        $this->nombre=$newNombre;
    }

    public function mostrarEdad(){
        $this->edad = 12;
        return $this->edad;
    }

    public function imprimirNombre() {
        echo "Hola soy {$this->nombre} {$this->apellido}. <br>";
    }

    public function mostrarAltura() {
        return $this->altura;
    }

}


$newAlumno = new persona("Gabriel", "Alberini", 2.0);
$newAlumno2 = new persona("Pepe", "Ramos", 1.9);

// $newAlumno->asignarNombre("Juan");

$newAlumno->imprimirNombre();
$newAlumno2->imprimirNombre();
echo "Mi altura es: {$newAlumno->mostrarAltura()}mts. <br>";
echo "Mi altura es: {$newAlumno2->mostrarAltura()}mts.<br>";
?> 