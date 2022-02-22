<?php 

    if($_POST) {

        //Se pueden capturar multiples valores cuando un formulario se envia.
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];

        //En php los datos se concatenan mediante el el punto "."
        echo "Hola ".$nombre." ".$apellido;
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
    <form action="ejercicio5.php" method="post">
        <label>
            Nombre
            <input type="text" name="txtNombre" id="nombre">
        </label>
        <br>
        <label>
            Apellido
            <input 
                type="text" 
                name="txtApellido" 
                id="apellido"
            >
        </label>
        <br>
        <button 
            type="submit" 
            value="Enviar"
        >
            Enviar
        </button>
    </form>
</body>
</html>