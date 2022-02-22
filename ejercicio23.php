<?php

    $frutas = array("Pera", "Manzana", "Banana");

    //Los array como en todos los lenguajes de programación tienen métodos o funciones que los modifican. array_push es uno de ellos que añade un elemente al final del array. Seguidos se comas, se pueden agregar mas elementos.
    array_push($frutas, "Uva", "Limón");

    foreach($frutas as $index => &$valor) {
        echo ($index + 1)." - ".$valor."<br>";
    }

?>