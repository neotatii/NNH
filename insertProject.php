<?php
    include_once("config.php");
    include_once("login.php");

  if($_POST['registrar']){

    $tipo = $_POST['tipo_proyecto'];
    $cliente = $_POST['dni_cliente'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $pais = $_POST['pais'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $plantas = $_POST['plantas'];
    $decripcion = $_POST['descripcion'];
    $arquitecto = '13325412N';

    $error = "¡¡Se ha añadido el proyecto correctamente!!";
    
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
            $min=1;
            $max=10**8;
            $id_proj = rand($min,$max);

            $prep = $connec->prepare("INSERT INTO practica.proyectos VALUES(:id_proyecto,:tipo,:descripcion,:calle,:ciudad,:cp,:pais,:fecha_inicio,:num_plantas,:contratista,:cliente,:arquitecto)");

            $prep->bindParam(":id_proyecto",$id_proj);
            $prep->bindParam(":tipo",$tipo);
            $prep->bindParam(":descripcion",$decripcion);
            $prep->bindParam(":calle",$calle);
            $prep->bindParam(":ciudad",$ciudad);
            $prep->bindParam("cp",$cp);
            $prep->bindParam(":pais",$pais);
            $prep->bindParam(":fecha_inicio",$fecha_inicio);
            $prep->bindParam(":num_plantas",$plantas);
            $prep->bindParam(":contratista",$id_contratista);
            $prep->bindParam(":cliente",$cliente);
            $prep->bindParam(":arquitecto",$arquitecto);
            $prep->execute();
        }
    }

    echo "<script language=javascript> alert(\"'$error'\");</script>";

    
  }
?>