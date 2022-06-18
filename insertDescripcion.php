<?php

  include_once("config.php");
  date_default_timezone_set('Europe/London');

  if($_POST['registrar']){
    
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $prj = $_GET['edit'];

    $psql = $connec->query("SELECT count(*)  FROM practica.prosupuestos WHERE proyecto  = '" . $prj . "';"); 
    $prosup = $psql->fetch();
    if($prosup['count'] == 0){
        $fecha = date('Y-m-d H:i:s');
        $min=1;
        $max=10**9;
        $id_prosupuesto = rand($min,$max);

        $prep = $connec->prepare("INSERT INTO practica.prosupuestos VALUES(:id_prosupuesto, :fecha, :proyecto)");

        $prep->bindParam(":id_prosupuesto",$id_prosupuesto);
        $prep->bindParam(":fecha",$fecha);
        $prep->bindParam(":proyecto",$prj);
        $prep->execute();
    }
    
    $error = "¡¡Se ha añadido la descripción correctamente!!";
    
    //      VALIDAR CLIENTE
    $validar_ds =  $connec->query("SELECT count(*) FROM practica.descripciones WHERE nombre = '$descripcion'");
    $validar_ds = $validar_ds->fetch();

    if($validar_ds['count'] == 0){  // NO existe en la base de datos
        //echo "  No existe validar_ds en la base de datos";
        $prep = $connec->prepare("INSERT INTO practica.descripciones VALUES(:nombre)");

        $prep->bindParam(":nombre",$descripcion);
        $prep->execute();

        $pres =  $connec->query("SELECT id_prosupuesto FROM practica.prosupuestos WHERE proyecto  = '$prj'");
        $pres = $pres->fetch();
        $pres = $pres['id_prosupuesto'];
        //echo 'presupuesto = '.$pres.'';

        $prep = $connec->prepare("INSERT INTO practica.precios VALUES(:presupuesto ,:nombre ,:precio)");
    
        $prep->bindParam(":presupuesto",$pres);
        $prep->bindParam(":nombre",$descripcion);
        $prep->bindParam(":precio",$precio);
        $prep->execute();
        
    }
    else{   //existe en la base de datos
        //echo "  SI existe validar_ds en la base de datos";
        $pres =  $connec->query("SELECT id_prosupuesto FROM practica.prosupuestos WHERE proyecto  = '$prj'");
        $pres = $pres->fetch();
        $pres = $pres['id_prosupuesto'];


        $prep = $connec->prepare("INSERT INTO practica.precios VALUES(:presupuesto ,:nombre ,:precio)");
    
        $prep->bindParam(":presupuesto",$pres);
        $prep->bindParam(":nombre",$descripcion);
        $prep->bindParam(":precio",$precio);
        $prep->execute();
        
    }

    echo "<script language=javascript> alert(\"'$error'\");</script>";
    
    
  }
  header('Location:Hoja-Seguimiento.php');
  
?>