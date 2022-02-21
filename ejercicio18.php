<?php

    $min = 1;
    $max = 10;
    $array = ["hola", "chau", "adiós"];
    $lowerString = "antes yo era un texto en minúscula :(";

    //Numero random en php. Este lenguaje ya tiene una función para eso, solo te pide un número mínimo y un número máximo.
    $numRandom = rand($min, $max);

    //Implode. Función de php que une los elementos de un array según el separador que le indiques en el primer parametro.
    $arrayString = implode("-", $array);

    //Convertir un array a mayusculas.
    $upperString = strtoupper($lowerString);
        
    echo "El numero random es: {$numRandom} <br>";
    echo "La cadena quedaría así: {$arrayString} <br>";
    echo "La cadena transformada a mayúscula quedaría así: {$upperString} <br>";

?>