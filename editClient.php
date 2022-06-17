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

        

        $prep = $connec->prepare("UPDATE practica.personas SET nombre = ?, phone = ?, email = ? WHERE dni = ?");

     
        $prep->execute([$nombre, $telefono, $email,$dni]);

        $psql = $connec->query("SELECT count(*) FROM practica.personas WHERE nombre = '" . $nombre . "' AND phone = '" . $telefono . "' AND email = '" . $email . "' AND dni = '" . $dni . "' ;"); 
        $total_p = $psql->fetch();
        

        if($total_p['count'] != 0){
            $prep = $connec->prepare("UPDATE practica.personas SET sexo = ? WHERE dni = ?");
            $prep->execute([$sexo,$dni]);

            $psql = $connec->query("SELECT count(*) FROM practica.personas WHERE sexo = '" . $sexo . "' AND dni = '" . $dni . "' ;"); 
            $total_p = $psql->fetch();
            if($total_p['count'] != 0){
                $error = "¡¡Se ha modificado correctamente el cliente $nombre !!";
            }
            else{
                $error = "¡¡No se ha modificado correctamente el cliente $nombre !! VUELVE A INTENTARLO";
            }
        }
        else{
            $error = "¡¡No se ha modificado correctamente el cliente $nombre !! VUELVE A INTENTARLO";
        }

        
        
        header("location: clients.php");
    }


?>