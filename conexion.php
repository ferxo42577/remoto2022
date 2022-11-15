<?php

function conectar(){

    
    
    $DB_HOST = "containers-us-west-108.railway.app";
    $DB_USER = $_ENV['DB_USER']; 
    $DB_PASSWORD = $_ENV['DB_PASSWORD'];
    $DB_NAME = $_ENV['DB_NAME'];
    $DB_PORT = "7036";
    //$DB_PORT = $_ENV['DB_PORT']; 
    // puerto server: 7036

    /*
    $user = "root"; 
    $pass = "";
    $server = "localhost";
    $db = "saboresdeliz";
     
    */ 

    $enlace = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME,$DB_PORT);    
    //$enlace = mysqli_connect($server,$user,$pass,$db);  
    
    if (!$enlace){
        die ("No pudo conectarse a la base de datos");
    }

    echo "<center>Conexion exitosa ok</center><br/>";

    return $enlace;

}

?>