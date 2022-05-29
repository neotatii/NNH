<?php
    include_once("config.php");
    include_once("login.php");

    session_start();

    if(isset($_GET['delete'])){
        $cliente = $_GET['delete'];
        $connec->query("DELETE FROM practica.clientes WHERE dni = '$cliente'");
        
        $_SESSION['message'] = "Se ha borrado el Cliente $cliente !";
        $_SESSION['msg_type'] = "eliminado";

        header("location: clients.php");

    }
?>