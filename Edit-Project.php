<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="Edit-client.css" />

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/projects-app.js"></script>
</head>

<body>
    <div class="app-container">
        <div class="app-header">
            <div class="app-header-left">
                <img class="app-icon" src="/img/LOGO-NNH.png" alt="" />
                <p class="app-name">NNH CONSTRUCTION</p>
                <div class="search-wrapper">
                    <input class="search-input" type="text" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search"
                        viewBox="0 0 24 24">
                        <defs></defs>
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                </div>
            </div>
            <div class="app-header-right">
                <button class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>

                <button class="profile-btn">
                    <img src="https://assets.codepen.io/3306515/IMG_2025.jpg" />
                    <span>
                        <?php
                            include_once("config.php");
                            include_once("login.php");
                            session_start();
                            $id_contratista = $_SESSION['id_contratista'];
                            $psql = $connec->query("SELECT nombre FROM practica.personas WHERE dni = '" . $id_contratista . "';"); 
                            $total_p = $psql->fetch();
                            echo $total_p['nombre'];
                        ?>
                    </span>
                </button>
            </div>
            <button class="messages-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-message-circle">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
            </button>
        </div>
        <div class="app-content">
            <div class="app-sidebar">
                <a href="/projects.php" class="app-sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </a>
                <a href="/clients.php" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-pie-chart" viewBox="0 0 24 24">
                        <defs />
                        <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
                    </svg>
                </a>
                <a href="" class="app-sidebar-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                        <line x1="16" y1="2" x2="16" y2="6" />
                        <line x1="8" y1="2" x2="8" y2="6" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-settings" viewBox="0 0 24 24">
                        <defs />
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                    </svg>
                </a>
            </div>

            <!--Projects section-->
            <div class="projects-section">
                <div class="projects-section-header">
                    <p>
                        <?php
                            include_once("config.php");
                            

                            $client = $_GET['edit'];
                            $psql = $connec->query("SELECT cliente FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                            $dni = $psql->fetch();
                            $dni = $dni['cliente'];

                            $psql = $connec->query("SELECT nombre FROM practica.personas WHERE dni = '" . $dni . "';"); 
                            $cl = $psql->fetch();
                            $cl = $cl['nombre'];

                            echo 'Editar proyecto: #'.$client;
                            echo "<br>";
                            echo 'Cliente: '.$cl;

                            
                            if(isset($_SESSION['message'])):
                                echo '<div class="alert alert-'.$_SESSION['msg_type'].'">';
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);                    
                            endif;
                            echo'
                        
                    </p>
                </div>

                <div class="content">
                    <form action="#" method="POST">
                        <div class="user-details">
                            
                            <div class="input-box">
                                <span class="details">Tipo</span>
                                <input class="input-box" value="';
                                $psql = $connec->query("SELECT tipo FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                $nombre = $psql->fetch();
                                echo $nombre['tipo'];
                            echo'" type="text" name="tipo" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Calle</span>
                                <input type="text" name="calle" value="';
                                    $psql = $connec->query("SELECT calle FROM practica.proyectos WHERE id_proyecto = '" . $client . "';");
                                    $phone = $psql->fetch();
                                    echo $phone['calle'];
                                echo'"  required />
                            </div>
                            <div class="input-box">
                                <span class="details">Ciudad</span>
                                <input type="text" name="ciudad" value="';
                                    $psql = $connec->query("SELECT ciudad FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $sexo = $psql->fetch();
                                    echo $sexo['ciudad'];
                                echo'"  required />
                                
                            </div>

                            <div class="input-box">
                                <span class="details">Codigo Postal</span>
                                <input type="text" name="cp" value="';
                                    $psql = $connec->query("SELECT cp FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $email = $psql->fetch();
                                    echo $email['cp'];
                                echo'" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Pais</span>
                                <input type="text" name="pais" value="';
                                    $psql = $connec->query("SELECT pais FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $email = $psql->fetch();
                                    echo $email['pais'];
                                echo'" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Fecha Inicio</span>
                                <input type="date" name="fecha_inicio" value="';
                                    $psql = $connec->query("SELECT fecha_inicio FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $email = $psql->fetch();
                                    echo $email['fecha_inicio'];
                                echo'" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Numero Plantas</span>
                                <input type="number" name="num_plantas" value="';
                                    $psql = $connec->query("SELECT num_plantas FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $email = $psql->fetch();
                                    echo $email['num_plantas'];
                                echo'" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Descripcion</span>
                                <textarea rows="4" cols="73" required name="descripcion" >';
                                    $psql = $connec->query("SELECT descripcion FROM practica.proyectos WHERE id_proyecto = '" . $client . "';"); 
                                    $email = $psql->fetch();
                                    echo $email['descripcion'];
                                echo' </textarea>
                            </div>

                        </div>

                        <div class="button">
                            <a href="/clients.php">
                                <input type="submit" value="Update" name="update"/>
                            </a>
                        </div>
                        
                    </form>
                </div>';
                include_once("editProject.php");
                if($_POST['update']){
                    header("location: projects.php");
                }
                echo'
                

                <!--End of Project boxes-->
            </div>';
            
            ?>
            
        </div>
    </div>

    <script src="/popup.js"></script>
    <script src="/script.js"></script>
</body>

</html>