<?php
  include_once("config.php"); 

  if($_POST['registrar']){

    $proyecto = $_POST['tipo_proyecto'];
    $cliente = $_POST['dni_cliente'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $pais = $_POST['pais'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $plantas = $_POST['plantas'];
    $arquitecto = '13325412N';

    $error = 1;
    
    //      VALIDAR CLIENTE
    $validar_cl =  $connec->query("SELECT dni FROM practica.clientes WHERE dni = '$cliente'");
    $validar_cl = $validar_cl->fetch();

    if(!$validar_cl){  // NO existe en la base de datos
        //echo "  No existe cliente en la base de datos</p>";
        $error = "No existe cliente en la base de datos. Dalo de alta y vuelve a intentarlo.";
    }
    else{   //existe en la base de datos

        //      VALIDAR Arquitecto
        $validar_arq =  $connec->query("SELECT dni FROM practica.arquitectos WHERE dni = '$arquitecto'");
        $validar_arq = $validar_arq->fetch();

        if(!$validar_arq){  // NO existe en la base de datos
            //echo "  No existe arquitecto en la base de datos</p>";
            $error = "No existe arquitecto en la base de datos. Dalo de alta y vuelve a intentarlo.";
        }
        else{   //existe en la base de datos
            $insert = "INSER INTO "
        }
    }

    
    
  }
?>