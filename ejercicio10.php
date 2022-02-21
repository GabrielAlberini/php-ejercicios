<?php

    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        //Operador lógico - AND
        if($valorA < $valorB && $valorA != $valorB) {
            echo "El valor A es menor al valor B y también es diferente.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador lógico</title>
</head>
<body>
    
    <form action="ejercicio10.php" method="post">
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