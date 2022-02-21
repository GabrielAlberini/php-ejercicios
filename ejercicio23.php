<?php

    $frutas = array("Pera", "Manzana", "Banana");

    array_push($frutas, "Uva", "Limón");

    foreach($frutas as $i=>&$valor) {
        echo $valor."<br>";
    }

?>