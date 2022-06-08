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

        $prep = $connec->prepare("UPDATE practica.clientes SET nombre = ?, phone = ?, email = ?, sexo = ? WHERE dni = ?");

     
        $prep->execute([$nombre, $telefono, $email, $sexo,$dni]);
        
        header("location: clients.php");
    }


?>