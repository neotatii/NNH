<?php
    include_once("config.php");
    include_once("login.php");

  if($_POST['registrar']){

    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    
    $error = "¡¡Se ha añadido el cliente $nombre correctamente!!";
    $existe =  $connec->query("SELECT * FROM practica.clientes WHERE dni = '$dni';");
    $existe = $existe->fetch();
    if($existe['dni']){
        $error = "Ya existe '$existe' en la base de datos.";
    }
    else{
      $prep = $connec->prepare("INSERT INTO practica.clientes VALUES(:dni,:nombre,:phone,:email,:sexo)");

      $prep->bindParam(":dni",$dni);
      $prep->bindParam(":nombre",$nombre);
      $prep->bindParam(":phone",$telefono);
      $prep->bindParam(":email",$email);
      $prep->bindParam(":sexo",$sexo);
      $prep->execute();

      $fila =  $connec->query("SELECT * FROM practica.clientes WHERE dni = '$dni';");
      $id_cliente = $fila->fetch();
      if(!$id_cliente['dni']){
          $error = "Ha habido un problema. Vuelve a intentarlo.";
      }
    }
    echo "<script language=javascript> alert(\"'$error'\");</script>";

    
  }
?>