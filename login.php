<?php
    $id_contratista = '65529157H';

   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";
    $success = "";
    if(isset($_POST['login'])){
        if($email == "admin@admin.com"){
            if($password == "admin"){
                $error = "";
                $success = "Welcome Admin!!!";
            }
            else{
                $error = "Invalid Password";
                $success = "";
            }
        }
        else{
            $error = "Invalid Email";
            $success = "";
        }
    }
            
?>