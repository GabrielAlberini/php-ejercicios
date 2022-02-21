<?php

    //Variable
    $Edad = 32;

    echo $Edad."<br>";

    //La variable edad se puede redeclarar
    $Edad = 12;

    echo $Edad."<br>";

    //Iniciamos una variable de tipo constante. No se puede redeclarar.
    define("NOMBRE", "Pepito");

    echo NOMBRE;

?>