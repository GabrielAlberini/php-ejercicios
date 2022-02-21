<?php

//Una clase es un modélo o una plantilla.
class persona {
    public $nombre = "<b>Anónimo</b>";
    private $edad;
    protected $altura;

    public function asignarNombre($newNombre){
        $this->nombre = $newNombre;
    }

    public function mostrarEdad(){
        $this->edad = 44;
        return $this->edad;
    }
}

//Con la palabra reservada extends se heredan todas las propiedades y métodos de la clase a la cual hace alusión.
class trabajador extends persona {
    public $puesto = "<b>aún no tengo puesto</b>";

    public function definirPuesto($newPuesto) {
        $this->puesto = $newPuesto;
    }

    public function mostrarPuesto(){
        echo $this->puesto;
    }

    public function presentarse(){
        if($this->puesto == "<b>aún no tengo puesto</b>") {
            echo "Hola, mi nombre es {$this->nombre}, tengo {$this->mostrarEdad()} años y {$this->puesto} en esta empresa. <br>";
        } else {
            echo "Hola, mi nombre es {$this->nombre}, tengo {$this->mostrarEdad()} años y voy a cumplir el rol de {$this->puesto} en esta empresa. <br>";
        }
    }
}

$newTrabajador = new trabajador;
$newTrabajador->definirPuesto("Obrero");
$newTrabajador->asignarNombre("Rodrigo");
$newTrabajador->presentarse();


//Médodo de mostrar edad heradado de la class persona.
echo "Tengo, {$newTrabajador->mostrarEdad()} años";

?> 