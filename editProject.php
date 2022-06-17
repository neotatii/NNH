<?php
    
    include_once("config.php");

    if($_POST['update']){

        $id_proyecto = $_GET['edit'];

        $tipo = $_POST['tipo'];
        $descripcion = $_POST['descripcion'];
        $calle = $_POST['calle'];
        $ciudad = $_POST['ciudad'];
        $cp = $_POST['cp'];
        $pais = $_POST['pais'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $num_plantas = $_POST['num_plantas'];
        

        $prep = $connec->prepare("UPDATE practica.proyectos SET tipo = ?, descripcion = ?, calle = ?, ciudad = ?, cp = ?, pais = ?, fecha_inicio = ?, num_plantas = ? WHERE id_proyecto = ?");

        $prep->execute([$tipo,$descripcion,$calle,$ciudad,$cp,$pais,$fecha_inicio,$num_plantas,$id_proyecto]);
        
        $psql = $connec->query("SELECT * FROM practica.proyectos WHERE id_proyecto = '" . $id_proyecto . "' ;"); 
        $vl = $psql->fetch();

        if($vl['tipo'] == $tipo && $vl['descripcion'] == $descripcion && $vl['calle'] == $calle && $vl['ciudad'] == $ciudad && $vl['cp'] == $cp && $vl['pais'] == $pais && $vl['fecha_inicio'] == $fecha_inicio && $vl['num_plantas'] == $num_plantas ){
            $error = "¡¡Se ha modificado correctamente el proyeccto $id_proyecto !!";
            header("location: /projects.php");
            echo "<script language=javascript> alert(\"'$error'\");</script>";
            
            
        }
        else{
            $error = "¡¡No se ha modificado correctamente el proyeccto $id_proyecto !! VUELVE A INTENTARLO";
            echo "<script language=javascript> alert(\"'$error'\");</script>";
            header("location: projects.php");
        }
    }

        
        


?>