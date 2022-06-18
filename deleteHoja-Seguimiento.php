<?php
    include_once("config.php");
    include_once("login.php");

    session_start();
    if(isset($_GET['delete'])){
        $proyecto = $_GET['delete'];
        
        $connec->query("DELETE FROM practica.prosupuestos WHERE proyecto = '$proyecto'");
        
        $_SESSION['message'] = "Se ha borrado la Hoja de Seguimiento de $proyecto !";
        $_SESSION['msg_type'] = "eliminado";
    }
?>