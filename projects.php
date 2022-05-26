<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/Projects-style.css" />
    <script src="projects-app.js"></script>
  </head>

  <div class="app-container">
    <div class="app-header">
      <div class="app-header-left">
        <span class="app-icon"></span>
        <p class="app-name">Portfolio</p>
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
        <a href="" class="app-sidebar-link active">
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
            class="feather feather-pie-chart"
            viewBox="0 0 24 24"
          >
            <defs />
            <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
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
      <div class="projects-section">
        <div class="projects-section-header">
          <p> Projects </p>
          <div class="add-project-container">
           <!--- <button type="submit" class="btn-add" onclick="openPopup()"> Añadir nuevo proyecto </button>-->
            <button class="add-btn" title="Add New Project" onclick="openPopup()">
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

            <div class = "popup" id = "popup">
              <h2> Enter information </h2>
              <label for="type">Type</label><br />
              <h2 >Tipo
                <input
                  class="input-box"
                  placeholder="Tipo de proyecto"
                  list="type"
                  name="tipo_proyecto"
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
              </h2>

              <label for="calle">Calle</label>
              <input type="text" name="calle" placeholder="Calle.." required/>
              
              <br/>
              <label for="ciudad">Ciudad</label>
              <input type="text" name="ciudad" placeholder="Ciudad.." required/>
              <br/>
              <label for="cp">Codigo Postal</label>
              <input type="number" name="cp" placeholder="Codigo Postal.." required/>

              <label for="pais">Pais</label>
              <input type="nombre" name="pais" placeholder="Pais.." required/>

              <label for="fecha_inicio">Fecha Inicio</label>
              <input type="date"" name="fecha_inicio" placeholder="Fecha Inicio (aaaa-mm-dd).." required/>

              <label for="plantas">Numero Plantas</label>
              <input type="number" name="plantas" placeholder="Numero Plantas.." required/>
              
              <label for="cliente">DNI Cliente</label>
              <input type="text" name="dni_cliente" placeholder="DNI Cliente.." required/>

              <br/>
              
            <button type="button" name="guardar" onclick="closePopup()"> Guradrar </button>
              <!--<?php
                if(isset( $_POST['guardar'] )){
                  if(strlen($_POST['tipo_proyecto']) <= 2){
                      echo '<h3 class = "bad"> ¡Por favor, introduce una tipo_proyecto válida! </h3>';
                  }
                  else{
                    echo "<script> closePopup(); </script>";
                  }
                }
              ?>--->
              
            </div>
          </div>
        </div>
        
        <div class="projects-section-line">
          <div class="projects-status">
            <div class="item-status">
              <span class="status-number">X</span>
              <span class="status-type">In Progress</span>
            </div>
            <div class="item-status">
              <span class="status-number">X</span>
              <span class="status-type">Upcoming</span>
            </div>
            <div class="item-status">
              <span class="status-number">X</span>
              <span class="status-type">Total Projects</span>
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
            $psql = "SELECT * FROM practica.proyectos WHERE contratista = '" . $id_contratista . "';";
            foreach($connec->query($psql) as $row){

                echo '<div class="project-box-wrapper">
                        <div class="project-box" style="background-color: #fee4cb">
                          <div class="project-box-header">
                            <span>'.$row['fecha_inicio'].'</span>
                            <div class="more-wrapper">
                               <button class="project-btn-more">
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
                                  class="feather feather-more-vertical"
                                >
                                  <circle cx="12" cy="12" r="1" />
                                  <circle cx="12" cy="5" r="1" />
                                  <circle cx="12" cy="19" r="1" />
                                </svg>
                              </button>
                            </div>
                          </div>
                          <div class="project-box-content-header">
                            <p class="box-content-header">'.$row['tipo'].'</p>
                            <p class="box-content-subheader">'.$row['calle'].', '.$row['ciudad'].' </p>
                          </div>
                          <!---<div class="box-progress-wrapper">
                            <p class="box-progress-header">Progress</p>
                            <div class="box-progress-bar">
                              <span
                                class="box-progress"
                                style="width: 60%; background-color: #ff942e"
                              ></span>
                            </div>
                            <p class="box-progress-percentage">60%</p>
                          </div> --->
                          <div class="project-box-footer">
                            <div class="participants">
                              <img
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                                alt="participant"
                              />';
                              
                $fila =  $connec->query("SELECT * FROM practica.clientes WHERE dni = '".$row['cliente']."';");
                $id_cliente = $fila->fetch();

                echo'  
                              <p> '.$id_cliente['nombre'].' </p>
                              
                            </div>
                            <div class="days-left" style="color: #ff942e">'.$row['id_proyecto'].'</div>
                          </div>
                        </div>
                      </div> 
                ';

            }        
            
          ?>
        
        </div>
      </div>
    </div>
  </div>
  <script>
    let popup = document.getElementById("popup");

    function openPopup(){
        popup.classList.add("open-popup"); //Hacer que aparezca el popup
    }

    function closePopup(){
        popup.classList.remove("open-popup"); //Hacer que aparezca el popup
    }
  </script>
</html>
