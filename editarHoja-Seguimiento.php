<?php
    
    include_once("config.php");
    include_once("login.php");
    session_start();

    

        
    $nombre = $_POST['nombre'];
    $preu = $_POST['precio'];

    echo $nombre;
    echo $preu;
        
    


?>