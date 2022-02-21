<?php

    //Con la función array podemos nombrar el indice para cada elemento. Ya no tiene indice nativo: $frutasIndiceDescripto[0] no funcionaría
    $frutasIndiceDescripto = array(
        "fruta-1" => "Banana",
        "fruta-2" => "Manzana",
        "fruta-3" => "Frutilla",
        "fruta-4" => "Naranja",
        "fruta-5" => "Melón"
    );

    //Array con índice nativo.
    $frutasIndexNativo = ["Banana", "Manzana", "Frutilla", "Naranja", "Melón"];

    echo "Lectura de fruta en Array con índice descripto: <b>{$frutasIndiceDescripto["fruta-3"]}</b> <br>";
    echo "Lectura de fruta en Array con indice nativo: <b>{$frutasIndexNativo[1]}</b> <br><br>";

    //Utilizando for para recorrer array.
    echo "Imprimiento elementos por ciclo <b>for</b> <br>";
    for($i=0; $i<=4;$i++){
        echo $frutasIndexNativo[$i]."<br>";
    }

    //Utilizando for para recorrer array asociativos. No sirve en arrays de indice nativo.
    //Primero va el array al que queremos recorrer, despues el indice y despues el valor.
    echo "Imprimiento elementos por ciclo <b>foreach</b> <br>";
    foreach($frutasIndiceDescripto as $i=>&$valor){
        echo "<b>{$i}</b> - {$valor} <br>";
    };

?> 