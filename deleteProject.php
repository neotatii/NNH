<?php
    include_once("config.php");
    include_once("login.php");

    session_start();
    if(isset($_GET['delete'])){
        $proyecto = $_GET['delete'];
        $connec->query("DELETE FROM practica.proyectos WHERE id_proyecto = '$proyecto'");
        
        $_SESSION['message'] = "Se ha borrado el Proyecto $proyecto !";
        $_SESSION['msg_type'] = "eliminado";

        header("location: projects.php");

    }
?>