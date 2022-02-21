<?php

    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        //Operador relacional
        if($valorA < $valorB) {
            print("El valor A es menor que el el valor B, A es: ". $valorA." y B es ".$valorB);
        } else {
            print("El valor A debe ser menor que el valor B.");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador relacional</title>
</head>
<body>
    
    <form action="ejercicio9.php" method="post">
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