<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="Hoja-Seguiment.css" />

    <!-- ICONSCOUT CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- FONTAWESOME CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
      integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="feather feather-search"
              viewBox="0 0 24 24"
            >
              <defs></defs>
              <circle cx="11" cy="11" r="8"></circle>
              <path d="M21 21l-4.35-4.35"></path>
            </svg>
          </div>
        </div>
        <div class="app-header-right">
          <button class="mode-switch" title="Switch Theme">
            <svg
              class="moon"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
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
                  $psql = $connec->query("SELECT nombre FROM practica.personas WHERE dni = '" . $id_contratista . "';"); 
                  $total_p = $psql->fetch();
                  echo $total_p['nombre'];
                ?>
            </span>
          </button>
        </div>
        <button class="messages-btn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-message-circle"
          >
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
            />
          </svg>
        </button>
      </div>
      <div class="app-content">
        <div class="app-sidebar">
          <a href="" class="app-sidebar-link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-home"
            >
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
          </a>
          <a href="" class="app-sidebar-link active">
            <svg
              class="link-icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="feather feather-pie-chart"
              viewBox="0 0 24 24"
            >
              <defs />
              <path
                d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z"
              />
            </svg>
          </a>
          <a href="" class="app-sidebar-link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-calendar"
            >
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
              <line x1="16" y1="2" x2="16" y2="6" />
              <line x1="8" y1="2" x2="8" y2="6" />
              <line x1="3" y1="10" x2="21" y2="10" />
            </svg>
          </a>
          <a href="" class="app-sidebar-link">
            <svg
              class="link-icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="feather feather-settings"
              viewBox="0 0 24 24"
            >
              <defs />
              <circle cx="12" cy="12" r="3" />
              <path
                d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"
              />
            </svg>
          </a>
        </div>

        <!--Projects section-->
        <div class="projects-section">
          <div class="projects-section-header">
            <?php
                $prj = $_GET['edit'];
                echo '<p><span>#'.$prj.'</span></p>
            
          </div>
          <!--Start of Project boxes-->
          <div class="project-box-wrapper">
            <div class="project-box" style="background-color: #64a6a6">
              <div class="project-box-header">
                <span>
                ';
                    $psql = $connec->query("SELECT fecha_inicio  FROM practica.proyectos WHERE id_proyecto  = '" . $prj . "';"); 
                    $total_p = $psql->fetch();
                    echo 'Started in '.$total_p['fecha_inicio'].'';
                echo'

                </span>
            
                <div class="days-left" style="color: #344e41">
                  <div class="participants">
                    <img
                      src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                      alt="participant"
                    />
                    <a
                      href="/CLIENT PAGE/Client-page.html"
                      style="text-decoration: none; outline: none; color: black"
                    >
                      &nbsp; &nbsp;';
                        $psql = $connec->query("SELECT cliente FROM practica.proyectos WHERE id_proyecto  = '" . $prj . "';"); 
                        $dni_cliente = $psql->fetch();

                        $psql = $connec->query("SELECT nombre FROM practica.personas WHERE dni  = '" . $dni_cliente['cliente'] . "';"); 
                        $nomre_cliente = $psql->fetch();

                        echo $nomre_cliente['nombre'];
                        
                      echo'</a
                    >
                  </div>';echo $dni_cliente['cliente'];
                  echo'
                </div>
              </div>
              <div class="project-box-content-header">
                <p class="box-content-header">';
                    $psql = $connec->query("SELECT tipo  FROM practica.proyectos WHERE id_proyecto  = '" . $prj . "';"); 
                    $tipo_proy = $psql->fetch();
                echo'
                    '.$tipo_proy['tipo'].'
                </p>
                <p class="box-content-subheader">';
                    $psql = $connec->query("SELECT calle FROM practica.proyectos WHERE id_proyecto ='".$prj."';"); 
                    $calle_proy = $psql->fetch();
                    $psql = $connec->query("SELECT ciudad  FROM practica.proyectos WHERE id_proyecto ='".$prj."';"); 
                    $ciudad_proy = $psql->fetch();

                echo'
                    '.$calle_proy['calle'].', '.$ciudad_proy['ciudad'].'
                </p>
              </div>
              <div class="content-container">
                <div class="content">
                  <div class="modal-header">
                    <!--Modal Header-->
                    <div class="title">Hoja de Seguimiento</div>
                    <button
                      data-modal-target="#modal"
                      id="show-login"
                      class="add-btn"
                      title="Add New Project"
                    >
                      <svg
                        class="btn-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus"
                      >
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                      </svg>
                    </button>
                    <!--Start of Modal-->
                    <div class="modal" id="modal">
                      <div class="modal-header">
                        <!--Modal Header-->
                        <div class="title">New Project</div>
                        <button data-close-button class="close-button">
                          &times;
                        </button>
                      </div>

                      <div class="modal-body">
                        <!--Modal Body-->
                        <form action="#">
                          <div class="user-details">
                            <div class="input-box">
                              <span class="details">Descripción</span>
                              <input
                                class="input-box"
                                placeholder="Descripcion"
                                list="type"
                                name="descripcion"
                                required
                              />
                              <datalist id="type">';
                              
                                include_once("config.php");
                                $psql = "SELECT nombre FROM practica.descripciones;";
                                foreach($connec->query($psql) as $row){
                                    echo'<option>'.$row['nombre'].'</option>';
                                }
                              echo'
    
                              </datalist>
                            </div>

                            <div class="input-box">
                              <span class="details">Precio</span>
                              <input
                                type="number"
                                step="0.01"
                                name="precio"
                                placeholder="0.00 €"
                                required
                              />
                            </div>
                          </div>

                          <div class="button">
                            <input type="submit" value="Save" name="registrar"/>
                          </div>
                        </form>';
                        include_once("insertDescripcion.php");
                        echo'

                      </div>
                    </div>
                    <div id="overlay"></div>
                    <!--End of Modal-->
                  </div>
                  
                  <form action="#">
                    <div class="user-details">
                      
                    ';
                        $psql = $connec->query("SELECT id_prosupuesto  FROM practica.prosupuestos WHERE proyecto  = '" . $prj . "';"); 
                        $prosup = $psql->fetch();
                        //echo'
                          //  '.$tipo_proy['tipo'].'

                        $psql = "SELECT nombre, precio FROM practica.precios WHERE presupuesto = ".$prosup['id_prosupuesto'].";"; //
                        foreach($connec->query($psql) as $row){
                        echo'
                        <div class="input-box">
                        <span class="details">Description
                        
                        </span>
                        <input type="text" placeholder="Fondation" value="'.$row['nombre'].'" required />
                      </div>
                      <div class="input-box">
                        <span class="details">Price</span>
                        <input type="number" placeholder="0.00 MAD" value="'.$row['precio'].'" required />
                      </div>

                    ';
                        }
                    echo'
                      <div class="input-box">
                        <input class="total" type="submit" value="TOTAL" />
                      </div>
                      <div class="input-box">
                        <input placeholder="0.00 MAD"value="';
                            $psql = $connec->query("SELECT SUM(precio) FROM practica.precios WHERE presupuesto = '".$prosup['id_prosupuesto']."';"); 
                            $suma = $psql->fetch();
                        echo''.$suma['sum'].'" required />
                      </div>'?>
                    </div>
                    <div class="button">
                      <input type="submit" value="Save" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--End of Project boxes-->
        </div>
      </div>
    </div>

    <script src="/popup.js"></script>
    <script src="/script.js"></script>
  </body>
</html>