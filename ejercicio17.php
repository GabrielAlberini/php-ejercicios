<?php

if($_POST) {
    $valueInput = $_POST['valueNombre'];
    $string = "El valor es: ";

    //Funciones en php
    function imprimirMiNombre($nombre){
        //Rutinas
        echo "Hola {$nombre}! <br>";
    }

    //Valida de que el valor que se pasa por el input no este vacio.
    if($valueInput != null) {
        imprimirMiNombre($valueInput);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
</head>
<body>
    
    <form action="ejercicio17.php" method="post">

    <input 
        type="text" 
        name="valueNombre" 
        placeholder="Ingrese su nombre" 
        name="valueNombre"
        id=""
    >
    <input 
        type="submit" 
        value="Enviar"  
    >


    </form>

</body>
</html>