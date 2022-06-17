<?php
    
    include_once("config.php");
    include_once("login.php");
    session_start();

    if($_POST['update']){

        $dni = $_GET['edit'];
        $nombre = $_POST['nombre'];
        //$dni = $_POST['dni'];
        $email = $_POST['email'];
        $telefono = $_POST['phone'];
        $sexo = $_POST['sexo'];

        $error = "¡¡Se ha modificado correctamente el cliente $nombre !!";

        $prep = $connec->prepare("UPDATE practica.personas SET nombre = ?, phone = ?, email = ? WHERE dni = ?");

     
        $prep->execute([$nombre, $telefono, $email,$dni]);

        $prep = $connec->prepare("UPDATE practica.personas SET sexo = ? WHERE dni = ?");
        $prep->execute([$sexo,$dni]);
        
        header("location: clients.php");
    }


?>