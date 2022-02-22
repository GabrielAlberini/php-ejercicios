<?php

    //En php existen los array asociativos, donde podemos nombrar el índice de cada elemento como querramos. Ya no tiene indice nativo: $frutasIndiceDescripto[0] no funcionaría
    $frutasIndiceDescripto = array(
        "fruta-1" => "Banana",
        "fruta-2" => "Manzana",
        "fruta-3" => "Frutilla",
        "fruta-4" => "Naranja",
        "fruta-5" => "Melón"
    );

    //Array con índice nativo.
    $frutasIndexNativo = ["Banana", "Manzana", "Frutilla", "Naranja", "Melón"];

    echo "Lectura de array asociativos: <b>{$frutasIndiceDescripto["fruta-3"]}</b> <br>";
    echo "Lectura de fruta en array con indice nativo: <b>{$frutasIndexNativo[1]}</b> <br><br>";

    //Utilizando for para recorrer array.
    echo "Imprimiento elementos por ciclo <b>for</b> <br>";
    for($i=0; $i<=4;$i++){
        echo $frutasIndexNativo[$i]."<br>";
    }
    
    //foreach es una función que itera un array. En este caso devuelve en cada iteración, el elemento que se encuentra en dicha posición.
    echo "Imprimiento elementos por ciclo <b>foreach</b> en array común. <br>";
    foreach($frutasIndexNativo as $elemento){
        echo "{$elemento} es un elemento del array común.<br>";
    };

    //Utilizando for para recorrer array asociativos. No sirve en arrays de indice nativo.
    //Primero va el array al que queremos recorrer, despues el indice y despues el valor. Tal como se declara en el array.
    echo "Imprimiento elementos por ciclo <b>foreach</b> en array asociativo. <br>";
    foreach($frutasIndiceDescripto as $index =>&$valor){
        echo "El indice {$index} es para el elemento {$valor}.<br>";
    };

?> 