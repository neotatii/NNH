<?php
    
    include_once("config.php");
    include_once("login.php");
    //session_start();

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
        $validar_update = $psql->fetch();
        

        if($validar_update['count'] != 0){
            
            $prep = $connec->prepare("UPDATE practica.clientes SET sexo = ? WHERE dni = ?");
            $prep->execute([$sexo,$dni]);

            $psql = $connec->query("SELECT count(*) FROM practica.clientes WHERE sexo = '" . $sexo . "' AND dni = '" . $dni . "' ;"); 
            $validar_update2 = $psql->fetch();
            if($validar_update2['count'] != 0){
                $error = "¡¡Se ha modificado correctamente el cliente $nombre !!";
            }
            else{
                $error = "¡¡No se ha modificado correctamente el cliente $nombre !! VUELVE A INTENTARLO";
            }
        }
        else{
            $error = "¡¡No se ha modificado correctamente el cliente $nombre !! VUELVE A INTENTARLO";
        }
        echo "<script language=javascript> alert(\"'$error'\");</script>";
        header("location: clients.php");
    }
    


?>