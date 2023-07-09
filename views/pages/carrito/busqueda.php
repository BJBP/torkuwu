<?php
session_start();
include('./php/conexion.php');
if(!isset($_GET['texto'])){
header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
    <!-- <img src="images/header.png" alt="Image placeholder" class="img-fluid" width="1366" height="100"> -->
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Resultados para <?php echo $_GET['texto'];?></h2></div>
                <!-- <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="row mb-5">
            <?php 
            $limite = 10; //productos por pagina
            $totalQuery = $conexion->query('select count(*) from productos' ) or die($conexion->error);
            $totalProductos =mysqli_fetch_row($totalQuery);
            $totalBotones = round($totalProductos[0] /$limite);
            $resultado = $conexion ->query("select productos.*, categorias.nombre as categoria from productos 
             inner join categorias on productos.id_categoria = categorias.id 
            where 
            productos.nombre like '%".$_GET['texto']."%' or
            productos.descripcion like '%".$_GET['texto']."%' or
            productos.talla like '%".$_GET['texto']."%' or
            categorias.nombre like '%".$_GET['texto']."%' or
            productos.color like '%".$_GET['texto']."%'
            
            order by id DESC limit 10") or die($conexion -> error); 
            if(mysqli_num_rows($resultado) > 0){
            while($fila = mysqli_fetch_array($resultado)){
            ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?id=<?php echo $fila['id'];?>"><img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3>
                    <p class="mb-0"><?php echo $fila['descripcion'];?></p>
                    <p class="text-primary font-weight-bold">S/<?php echo $fila['precio'];?></p>
                  </div>
                </div>
              </div>
              <?php } }else{
                echo '<h2>Sin resultados</h2>';
              }?>


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                  <?php
                  if(isset($_GET['limite'])){
                  if($_GET['limite']>0){ echo ' <li><a href="index.php?limite='.($_GET['limite']-10). '">&lt;</a></li>';
                  }
                  }
                  for ($k=0;$k<$totalBotones; $k++){
                  echo '<li><a href="index.php?limite='. ($k*10) . '">' . ($k+1).'</a></li>';
                  }
                  if(isset($_GET['limite'])){
                  if($_GET['limite']+10 < $totalBotones*10){
                  echo '<li><a href="index.php?limite='.($_GET['limite']+10). '">&gt;</a></li>';
                  }
                  }else{
                  echo '<li><a href="index.php?limite=10">&gt;</a></li>';
                  }
                  ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
              <?php
              $re= $conexion->query("select * from categorias "); 
              while($f= mysqli_fetch_array($re)){
                ?>
              <li class="mb-1">
              <a href="./busqueda.php?texto=<?php echo $f['nombre']?>" class="d-flex"> 
              <span><?php echo $f['nombre']; ?></span>
              <span class="text-black ml-auto">
              <?php
              $re2 = $conexion->query("select count(*) from productos where id_categoria = ".$f['id']);
              $fila = mysqli_fetch_row($re2);
              echo $fila[0];
              ?>
              </span>
              </a></li>
              <?php } ?>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <!-- <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrar por precio</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div> -->

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Tamaño</h3>
                <label for="s_sm" class="d-flex">
                  <a href="./busqueda.php?texto=XL">
                    <!-- <input type="checkbox" id="s_sm" class="mr-2 mt-1"> --> <span class="text-black">XL</span>
                  </a>
                </label>
                <!-- <label for="s_md" class="d-flex"> -->
                  <a href="./busqueda.php?texto=25">
                    <!-- <input type="checkbox" id="s_md" class="mr-2 mt-1"> --> <span class="text-black">25</span>
                  </a>
                <!-- </label> -->
                <!-- <label for="s_lg" class="d-flex">
                  <a href="./busqueda.php?texto=XL">
                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Largo (1,392)</span>
                  </a> -->
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <?php
                $re = $conexion->query("SELECT * from colore") or die($conexion -> error); ;
                while($f=mysqli_fetch_array($re)){
                ?>
                <a href="./busqueda.php?texto=<?php echo $f['color']; ?>" class="d-flex color-item align-items-center">
                <span style="background-color:<?php echo $f['codigo']; ?>" class=" color d-inline-block rounded-circle mr-2"></span> <span class="text-black"><?php echo $f['color']; ?></span>
                </a>
                <?php } ?>
              </div>

            </div>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categorias</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/women.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Colleciones</span>
                        <h3>Mujer</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/children.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Colleciones</span>
                        <h3>Niños</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/men.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Colleciones</span>
                        <h3>Hombre</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div> -->
        
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>