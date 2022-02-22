<?php

// Para establecer conexión con la base de datos primero necesitamos declarar las credenciales de la misma. Ahora mismo es en local, estos datos cambiarían al cambiar de base de datos.
$server = "localhost"; // 127.0.0.1
$user = "root";
$pass = "";

// Luego se inicia un try/catch, es un condicional que maneja los errores. El error es absorvido por el catch.
try{
    
    // Declaración de la conexión.
    // Es una nueva instancia de una clase (PDO) que me permite conectar a la base de datos.
    // - Lleva tres parametros: 
    // 1 - La base de datos, que lleva el host (declarado anteriormente) y el nombre de la base de datos que querramos utilizar allí adentro.
    // 2 - El usuario (declarado anteriormente)
    // 3 - La contraseña (declarado anteriormente)
    

    //PDO es una libreria que está instalada con XAMPP que permite conectarnos facilmente con la base de datos.
    $conexion = new PDO("mysql:host=$server; dbname=album", $user, $pass);
    //Accedemos a un método que nos dan manejos a errores. Las propiedades llamadas dentro son los mismos que necesita setAttribute para mostrarlos.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada con éxito.";

    //El catch necesita de PDOexception para mostrar cuál es el error.
} catch(PDOException $error) { 
    echo "Conexión fallida. {$error}";
}

?>