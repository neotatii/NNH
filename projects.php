<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/Projects-style.css" />

    <!-- ICONSCOUT CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- FONTAWESOME CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="/projects-app.js"></script>
  </head>

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
                  session_start();
                  $id_contratista = $_SESSION['id_contratista'];
                  $psql = $connec->query("SELECT nombre FROM practica.personas WHERE dni = '" . $id_contratista . "';"); 
                  $total_p = $psql->fetch();
                  echo $total_p['nombre'];
            ?>
          </span>
        </button>
      </div>
      
    </div>
    <div class="app-content">
      <div class="app-sidebar">
        <a href="/projects.php" class="app-sidebar-link active">
          <i class="fa-solid fa-diagram-project"></i>
        </a>
        <a href="/clients.php" class="app-sidebar-link">
          <i class="fa-solid fa-user-group"></i>
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
          <p>Projects</p>

          <button
              data-modal-target="#modal"
              id="show-login"
              class="add-btn"
              title="Añadir nuevo Proyectos"
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
              <div class="title">Nuevo Proyecto</div>
              <button data-close-button class="close-button">&times;</button>
            </div>

            <div class="modal-body">
              <!--Modal Body-->
              <form action="#" method="POST">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tipo</span>
                    <input
                      class="input-box"
                      placeholder="Tipo de proyecto"
                      list="type"
                      name="tipo_proyecto"
                      required
                    />
                    <datalist id="type">
                      <?php
                        include_once("config.php");
                        $psql = "SELECT tipo FROM practica.proyectos GROUP BY tipo;";
                        foreach($connec->query($psql) as $row){
                            echo'<option>'.$row['tipo'].'</option>';
                        }
                      ?>
                    </datalist>
                  </div>

                  <div class="input-box">
                    <span class="details">DNI Cliente</span>
                    <input
                      type="text/number"
                      name="dni_cliente"
                      placeholder="DNI Cliente.."
                      required
                    />
                    
                  </div>

                  <div class="input-box">
                    <span class="details">Calle</span>
                    <input
                      type="text"
                      name="calle"
                      placeholder="Calle.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Ciudad</span>
                    <input
                      type="text"
                      name="ciudad"
                      placeholder="Ciudad.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Codigo Postal</span>
                    <input
                      type="number"
                      name="cp"
                      placeholder="Codigo Postal.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Pais</span>
                    <input
                      type="nombre"
                      name="pais"
                      placeholder="Pais.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Fecha Inicio</span>
                    <input
                      type="date"
                      name="fecha_inicio"
                      placeholder="Fecha Inicio (aaaa-mm-dd).."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">DNI Arquitecto</span>
                    <input
                      type="text/number"
                      name="arquitecto"
                      placeholder="DNI Arquitecto.."
                      required
                    />
                  </div>
                  
                  <div class="input-box">
                    <span class="details">Superficie</span>
                    <input
                      type="number"
                      name="superficie"
                      placeholder="Superficie.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Numero Plantas</span>
                    <input
                      type="number"
                      name="plantas"
                      placeholder="Numero Plantas.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Descripcion</span>
                    <textarea rows="4" cols="88" required name="descripcion"></textarea>
                  </div>
                </div>
                
                <div class="button">
                  <input type="submit" value="Save" name="registrar"/>
                </div>

              </form>
            
            </div>
          </div>
          <div id="overlay"></div>
          <?php
            include_once("insertProject.php"); ?>
          <!--End of Modal-->
        </div>

        <!--Start of Project boxes-->
         <div class="projects-section-line">
          <div class="projects-status">
            <div class="item-status">
              <span class="status-number">
                <?php
                  include_once("config.php");
                  include_once("login.php");
                  session_start();
                  $id_contratista = $_SESSION['id_contratista'];
                  $psql = $connec->query("SELECT count(*) FROM practica.proyectos WHERE contratista = '" . $id_contratista . "';"); //
                  $total_p = $psql->fetch();
                  echo $total_p['count'];
                ?>
                
              </span>
              <span class="status-type">Total Proyectos</span>
            </div>
          </div>
          <div class="view-actions">
            <button class="view-btn list-view" title="List View">
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
                class="feather feather-list"
              >
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
                <line x1="3" y1="6" x2="3.01" y2="6" />
                <line x1="3" y1="12" x2="3.01" y2="12" />
                <line x1="3" y1="18" x2="3.01" y2="18" />
              </svg>
            </button>
            <button class="view-btn grid-view active" title="Grid View">
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
                class="feather feather-grid"
              >
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
              </svg>
            </button>
          </div>
        </div>

        <!--Start of PROJECT boxes-->
        <div class="project-boxes jsGridView">
          
          <?php 
            
            include_once("config.php"); 
            include_once("login.php");
            include_once("deleteProject.php");
            
            if(isset($_SESSION['message'])):
              echo '<div class="alert alert-'.$_SESSION['msg_type'].'">';
              echo $_SESSION['message'];
              unset($_SESSION['message']);

              echo'</div>';

              
            endif;

            session_start();
            $id_contratista = $_SESSION['id_contratista'];
            
            $psql = "SELECT * FROM practica.proyectos WHERE contratista = '" . $id_contratista . "' ORDER BY fecha_inicio DESC;;";
            
            foreach($connec->query($psql) as $row){
                $fila =  $connec->query("SELECT * FROM practica.personas WHERE dni = '".$row['cliente']."';");
                $id_cliente = $fila->fetch();
                echo '
                      
                      
                        <div class="project-box-wrapper">
                          
                          <div class="project-box" style="background-color: #fee4cb">

                            <div class="project-box-header">

                              <span>'.$row['fecha_inicio'].'</span>

                              <div class="more-wrapper">
                                <div class="more-wrapper">
                                  <a class="edit" href="Edit-Project.php?edit='; echo $row['id_proyecto']; echo' ">
                                    <button id="show-login" class="project-btn-delete add-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                  </a>
                                </div>
                              </div>

                              <div class="more-wrapper">
                                <div class="more-wrapper">
                                  <a class="delete" href="deleteProject.php?delete='; echo $row['id_proyecto']; echo'"> 
                                    <button type="submit" class="project-btn-delete" name="delete">
                                      <i class="fas fa-trash"></i>
                                    </button> 
                                  </a>
                                </div>
                              </div>';
                              echo'
                            </div>
                            <a class="full segiment" href="Hoja-Seguiment.php?edit='; echo $row['id_proyecto']; echo' ">
                              <div class="project-box-content-header">
                                <p class="box-content-header">'.$row['tipo'].'</p>
                                <p class="box-content-subheader">'.$row['calle'].', '.$row['ciudad'].' </p>
                              </div>

                              <div class="project-box-footer">
                                <div class="participants">
                                  <img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                                    alt="participant"
                                  />

                                  <a href="/" style="text-decoration: none">
                                    &nbsp; &nbsp;'.$id_cliente['nombre'].'
                                  </a>  
                                  
                                </div>
                                <div class="days-left" style="color: #ff942e">'.$row['id_proyecto'].'</div>
                              </div>
                            </a>
                          </div>
                           
                        </div>
                      
                ';

            }     
           
          ?>
        
        </div>
      </div>
    </div>
  </div>
  <script src="/popup.js"></script>
  <script src="/script.js"></script>
</html>
