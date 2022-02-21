<?php

    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        //Se pueden realizar operaciones aritméticas
        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $division = $valorA / $valorB;
        $multiplicacion = $valorA * $valorB;
        
        echo "La suma da como resultado: ".$suma."<br>";
        echo "La resta da como resultado: ".$resta."<br>";
        echo "La división da como resultado: ".$division."<br>";
        echo "La multiplicación da como resultado: ".$multiplicacion."<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        <label>
            Valor A:
            <input type="text" name="valorA">
        </label>
        <br>
        <label>
            Valor B:
            <input type="text" name="valorB">
        </label>
        <button type="submit" value="Enviar">Enviar</button>
    </form>

</body>
</html>