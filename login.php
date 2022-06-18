<?php
    include_once("config.php");
    session_start();

   
    if($_POST['registrar']){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $error = "";
        $success = "";

        $psql = $connec->query("SELECT count(*) FROM practica.personas WHERE email = '" . $email . "' AND dni IN (SELECT dni FROM practica.contratistas);"); //
        $validar_email = $psql->fetch();
        
        if($validar_email['count'] != 0){
            
            $psql = $connec->query("SELECT count(*) FROM practica.contratistas WHERE contraseña = '".$password."' AND dni = (SELECT dni FROM practica.personas WHERE email = '" . $email . "');"); //
            $validar_pass = $psql->fetch();
            
            if($validar_pass['count'] != 0){
                $psql = $connec->query("SELECT dni FROM practica.contratistas WHERE contraseña = '".$password."';"); //
                $get_dni = $psql->fetch();
                $id_contratista = $get_dni['dni'];
                
                $_SESSION['id_contratista'] = $id_contratista;

                header("location: projects.php");
            }
            else{
                $error = "Contraseña Invalida";
                $success = "";
            }
        }
        else{
            $error = "Email Invalido";
            $success = "";
        }
    }
            
?>