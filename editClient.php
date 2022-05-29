<?php
    include_once("config.php");
    include_once("login.php");

    session_start();

    $update = false;

    $dni = '';
    $nombre = '';
    $phone = '';
    $email = '';
    $sexo = '';
    $id=0;

    if(isset($_GET['edit'])){

        $cliente = $_GET['edit'];
        $update = true;

        $result = $connec->query("SELECT * FROM practica.clientes WHERE dni = '$cliente'");
        
        if(count($connec) ==1){
            $row = $result->fetch_array();
            $dni = $row['dni'];
            $nombre = $row['nombre'];
            $phone = $row['phone'];
            $email = $row['email'];
            $sexo = $row['sexo'];

        }
    }

    if(isset($_POST['update'])){

        $id = $_POST['id']; //ESTO ES EL DNI
        $update = true;

        
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];

        
        $connec->query("UPDATE practica.clientes SET nombre = '$nombre', phone = '$phone', email = '$email', sexo = '$sexo' WHERE dni = '$dni'");
        
        $_SESSION['message'] = "$nombre ha sido Actualizado!";
        $_SESSION['msg_type'] = "warning";
        
        header("location: clients.php");
    }


?>