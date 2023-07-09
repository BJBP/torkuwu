<!-- <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Mi Tienda</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">
                      <?php if(isset($_SESSION['carrito'])){ 
                        echo count($_SESSION['carrito' ]); 
                      }else{ 
                        echo 0; 
                      }
                      ?>
                      </span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index.php">Home</a>
            
            </li>
            <li>
              <a href="about.php">About</a>
            
            </li>
          
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>
    <img src="images/header.png" alt="Image placeholder" class="img-fluid" width="1366" height="100"> -->
    <header class="site-navbar" role="banner">
    <!-- <header class="main-header"> -->
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand nav-link active" aria-current="page" onclick="Inicio()" style="cursor:pointer;"><img src="/assets/image/LOGOT.png" alt="" width="180px"></a>
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


                  </li> 
                  <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">
                      <?php if(isset($_SESSION['carrito'])){ 
                        echo count($_SESSION['carrito' ]); 
                      }else{ 
                        echo 0; 
                      }
                      ?>
                      </span>
                    </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar -->
  
</header>