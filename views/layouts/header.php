<header class="main-header">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand nav-link active" aria-current="page" onclick="Inicio()" style="cursor:pointer;"><img src="./assets/image/LOGOT.png" alt="" width="180px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!-- Cuando estamos en modo administrador -->
            <?php
              if(!isset($_SESSION["iniciarSesion"]) || $_SESSION["id_tipo_usuario"] == 2){
                echo '<a class="nav-link" onclick="redirigir('."'coleccion'".')">Colección</a>';
              }
              else{
                echo '<a class="nav-link" onclick="redirigir('."'admin-coleccion'".')">Colección</a>';
              }
            ?>
          </li>
          <?php
            if(!isset($_SESSION["iniciarSesion"]) || $_SESSION["id_tipo_usuario"] == 2){
              echo '<li class="nav-item">
              <a class="nav-link" onclick="redirigir('."'coleccion'".')">Diseñar</a>
              </li>';
            }
            else{
              echo '<div class="dropdown">
              <a class="btn usuario-dropdown dropdown-toggle fw-bold" href="" role="button" data-bs-toggle="dropdown" style="padding: 8px 12px;">Diseñar</a>
              <ul class="dropdown-menu dropdown-menu2">
                <li class="ps-2" onclick="redirigir('."'admin-diseñar-opciones'".')">
                  Administrar Opciones
                </li>
                <li class="ps-2" onclick="redirigir('."'admin-diseñar-pedidos'".')">
                  Administrar Pedidos
                </li>
              </ul>
            </div>';
            }
          ?>   
          <!-- Cuando estamos en modo administrador -->
          <?php
            if(!isset($_SESSION["iniciarSesion"]) || $_SESSION["id_tipo_usuario"] == 2){
                echo '<li class="nav-item">
                  <a class="nav-link" href="about.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contáctanos</a>
                </li>';
            }
          ?>

        </ul>
        
        <div class="other-links">

          <!-- Cuando estamos en modo administrador -->
          <?php
            if(!isset($_SESSION["iniciarSesion"]) || $_SESSION["id_tipo_usuario"] == 2){
                echo '<div class="input-wrapper">
                <input type="search" class="input" placeholder="Búsqueda"/>
              
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="input-icon"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    />
                </svg>
    
              </div>';
            }
          ?>
          <?php
            if(isset($_SESSION["iniciarSesion"]) == 'ok'){
              echo '<div class="dropdown">
              <a class="btn usuario-dropdown dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">';
              if($_SESSION["id_tipo_usuario"] == 2){
                echo '<img src="./assets/icons/usuario.png" class="me-2" alt="" width="20px">';
              }
              else{
                echo '<img src="./assets/icons/admin.png" class="me-2" alt="" width="20px">';
              }
              echo $_SESSION["usu_nombre"].'
              </a>
  
              <ul class="dropdown-menu">
                <li class="text-center">
                  <p>'.$_SESSION["usu_nombre"].' '.$_SESSION["usu_apellido"].'
                    <br>
                    <small><strong>'.$_SESSION["perfil"].'</strong></small>
                  </p>
                  <a onclick = "redirigir('."'configuracion'".')" class="me-2">Configuración</a>
                  <a onclick = "redirigir('."'salir'".')">Salir</a>
                </li>
              </ul>
            </div>';
            }
            else{
              echo '<button id="btn-login" ';
              if(isset($_GET['ruta'])){
                if($_GET['ruta']=='login'){
                  echo 'class="activo"';
                }
              }
              echo 'onclick="redirigir('."'login'".')">Ingresar</button>';
            }
          ?>
          <!-- <button id="btn-signup"><a href="signup.html">Únete</a></button> -->
          
          <!-- Cuando estamos en modo administrador -->
          <?php
            if(!isset($_SESSION["iniciarSesion"]) || $_SESSION["id_tipo_usuario"] == 2){
                echo '<i class="fa-solid fa-cart-shopping"></i>';
            }
          ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar -->
  
</header>