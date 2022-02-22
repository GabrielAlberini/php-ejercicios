<?php

    if($_POST) {

        $valueButton = $_POST['valueButton'];

        //El switch evalua que valor tiene la variable $valueButton. Ésta dependerá del boton presionado en el HTML.
        switch($valueButton) {
            case 1:
                echo "<p class='titulo'>Haz presionado el botón <b>1</b></p>";
            break;
            case 2: 
                echo "<p class='titulo'>Haz presionado el botón <b>2</b></p>";
            break;
            case 3:
                echo "<p class='titulo'>Haz presionado el botón <b>3</b></p>";
            default: $valueButton;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        * {
            font-family: sans serif;
            text-align: center; 
        }

        input {
            width: 70%;
            display: block;
            padding: .3rem;
            margin: 1rem auto;
            background: #ccc;
            border: 2px solid transparent;
            outline: 2px solid transparent;
            transition: .3s ease;
        }
        input:hover {
            outline: 2px solid #cc1;
        }
        .titulo b {
            color: red;
        }
    </style>

    <form action="ejercicio13.php" method="post">
        <input type="submit" name="valueButton" value="1">
        <input type="submit" name="valueButton" value="2">
        <input type="submit" name="valueButton" value="3">
        <input type="submit" name="valueButton" value="Limpiar">
    </form>
</body>
</html>