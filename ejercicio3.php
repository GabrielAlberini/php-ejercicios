<?php

    if($_GET){
        
        //En este archivo se reciben los datos a través del método GET. O sea, de manera visible a través del URL.
        $nombre = $_GET["nombre"];

        echo "Hola ".$nombre;

    }

?>