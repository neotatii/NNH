<?php
    include_once("config.php");
    include_once("login.php");

    session_start();

    $dni = '';
    $nombre = '';
    $phone = '';
    $email = '';
    $sexo = '';

    if(isset($_GET['delete'])){
        $cliente = $_GET['delete'];
        $connec->query("DELETE FROM practica.clientes WHERE dni = '$cliente'");
        
        $_SESSION['message'] = "Se ha borrado el Cliente $cliente !";
        $_SESSION['msg_type'] = "eliminado";

        header("location: clients.php");

    }
    if(isset($_GET['edit'])){
        /*$cliente = $_GET['delete'];
        $connec->query("DELETE FROM practica.clientes WHERE dni = '$cliente'");
        
        $_SESSION['message'] = "Se ha borrado el Cliente $cliente !";
        $_SESSION['msg_type'] = "eliminado";

        header("location: clients.php");
*/
        $cliente = $_GET['edit'];
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
?>