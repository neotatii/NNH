<?php
    include_once("config.php");
    include_once("login.php");

  if($_POST['registrar']){

    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $prj = $_GET['edit'];
    echo $prj;
    
    $error = "¡¡Se ha añadido la descripción correctamente!!";
    
    //      VALIDAR CLIENTE
    $validar_ds =  $connec->query("SELECT count(*) FROM practica.descripciones WHERE nombre = '$descripcion'");
    $validar_ds = $validar_ds->fetch();

    if(!$validar_ds){  // NO existe en la base de datos
        //echo "  No existe cliente en la base de datos</p>";
        $prep = $connec->prepare("INSERT INTO practica.descripciones VALUES(:nombre)");

        $prep->bindParam(":nombre",$descripcion);
        $prep->execute();
        
    }
    else{   //existe en la base de datos
        $pres =  $connec->query("SELECT id_prosupuesto FROM practica.prosupuestos WHERE proyecto  = '$prj'");
        $pres = $pres->fetch();
        $pres = $pres['id_prosupuesto'];


        $prep = $connec->prepare("INSERT INTO practica.precios VALUES(:presupuesto ,:nombre ,:precio)");
    
        $prep->bindParam(":presupuesto ",$pres);
        $prep->bindParam(":nombre",$nombre);
        $prep->bindParam(":precio",$precio);
        $prep->execute();
        
    }

    echo "<script language=javascript> alert(\"'$error'\");</script>";

    
  }
?>