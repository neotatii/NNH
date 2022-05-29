<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="clients-style.css" />

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
          <span>Fatine M.</span>
        </button>
      </div>
      
    </div>
    <div class="app-content">
      <div class="app-sidebar">
        <a href="/projects.php" class="app-sidebar-link">
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
        <a href="/clients.php" class="app-sidebar-link active">
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
            <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
          </svg>
        </a>
        <a href="/profile.php" class="app-sidebar-link">
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
        <a href="/signout.php" class="app-sidebar-link">
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
          <p>Clientes</p>

          <button
              data-modal-target="#modal"
              id="show-login"
              class="add-btn"
              title="Añadir nuevo Cliente"
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
              <button data-close-button class="close-button">&times;</button>
            </div>

            <div class="modal-body">
              <!--Modal Body-->
              <form action="#" method="POST">
                <div class="user-details">

                  <div class="input-box">
                    <span class="details">Nombre</span>
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre y Appelido.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">DNI</span>
                    <input
                      type="text/number"
                      name="dni"
                      placeholder="DNI Cliente.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Correo Electrónico</span>
                    <input
                      type="text"
                      name="email"
                      placeholder="email.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Telefono</span>
                    <input
                      type="number"
                      name="telefono"
                      placeholder="Telefono.."
                      required
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Sexo</span>
                    <input
                      type="nombre"
                      name="sexo"
                      placeholder="male/female.."
                      required
                    />
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
            include_once("insertCliente.php"); ?>
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
                  $psql = $connec->query("SELECT DISTINCT count( DISTINCT cliente) FROM practica.proyectos WHERE contratista = '" . $id_contratista . "';"); 
                  $total_p = $psql->fetch();
                  echo $total_p['count'];
                ?>
                
              </span>
              <span class="status-type">Total Clientes</span>
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
        <div class="project-boxes jsGridView">
          
          <?php 
            
            include_once("config.php"); 
            include_once("login.php");
            include_once("deleteClient.php");
            include_once("editClient.php");
            if(isset($_SESSION['message'])):
              echo '<div class="alert alert-'.$_SESSION['msg_type'].'">';
              echo $_SESSION['message'];
              unset($_SESSION['message']);

              echo'</div>';

              
            endif;
            
            
            $psql = "SELECT * FROM practica.clientes AS c WHERE dni = (SELECT cliente FROM practica.proyectos WHERE contratista = '" . $id_contratista . "' AND cliente = c.dni GROUP BY cliente);"; //
            
            foreach($connec->query($psql) as $row){

                echo '<div class="client-box-wrapper">
                        <div class="profile-box">
                          
                          <div class="project-box-header">
                            <div class="more-wrapper">
                              <div class="more-wrapper">
                                <form method="post">
                                  <button data-modal-target="#modal" id="show-login" class="project-btn-delete add-btn">
                                    <a href="editClient.php?edit=';echo $row['dni']; 
                                      echo' "><i class="fas fa-edit"></i></a>
                                  </button>
                                </form>
                                ';

                                if(isset($_GET['edit'])){
                                  echo'<p>ABIERTOOO</p>';
                                }
                                
                                echo'
                              </div>
                            </div>
                            <div class="more-wrapper">
                              <div class="more-wrapper">
                                <form method="post">
                                  <button type="submit" class="project-btn-delete" name="delete">
                                      <a class="delete" href="deleteClient.php?delete=';echo $row['dni']; 
                                      echo' " 
                                        > <i class="fas fa-trash"></i> </a>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        
                          <h3>'.$row['nombre'].'</h3>
                          <p >'.$row['email'].' </p>
                          <div class="social-media">
                            <p><i class="fas fa-phone"></i>  '.$row['phone'].'</p>
                          </div>
                          <div class="days-left" style="color: black"> '.$row['dni'].' </div>
                          
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
