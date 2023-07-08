<?php
session_start();
if(!isset($_SESSION['carrito'])){
header('Location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
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
  
  <div class="site-wrap"><div class="site-mobile-menu"><div class="site-mobile-menu-header"><div class="site-mobile-menu-logo"></div><div class="site-mobile-menu-close "><span class="ion-ios-close js-menu-toggle"></span></div></div><div class="site-mobile-menu-body"></div></div>
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
                      <span class="count">2</span>
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
    </div> -->
    <!-- <img src="images/header.png" alt="Marcador de posición de imagen" class="img-fluid" width="1366" height="100"> -->
 

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              ¿Soy Cliente? </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Haga clic aquí</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> para iniciar sesión
            </font></font></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Detalles de facturación</font></font></h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">País </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                <select id="c_country" class="form-control">
                  <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione un país</font></font></option>    
                  <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bangladesh</font></font></option>    
                  <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Argelia</font></font></option>    
                  <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afganistán</font></font></option>    
                  <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghana</font></font></option>    
                  <option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Albania</font></font></option>    
                  <option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Baréin</font></font></option>    
                  <option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colombia</font></font></option>    
                  <option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">República Dominicana</font></font></option>    
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nombre de empresa</font></font></label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Dirección">
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartamento, suite, unidad, etc. (opcional)">
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado / País </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo postal / Código postal </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Número de teléfono">
                </div>
              </div>

              <div class="form-group">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Crea una cuenta?</font></font></label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cree una cuenta ingresando la información a continuación. </font><font style="vertical-align: inherit;">Si es un cliente que regresa, inicie sesión en la parte superior de la página.</font></font></p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña de la cuenta</font></font></label>
                      <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Envia a una direccion diferente?</font></font></label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">

                    <div class="form-group">
                      <label for="c_diff_country" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">País </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                      <select id="c_diff_country" class="form-control">
                        <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione un país</font></font></option>    
                        <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bangladesh</font></font></option>    
                        <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Argelia</font></font></option>    
                        <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afganistán</font></font></option>    
                        <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghana</font></font></option>    
                        <option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Albania</font></font></option>    
                        <option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Baréin</font></font></option>    
                        <option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colombia</font></font></option>    
                        <option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">República Dominicana</font></font></option>    
                      </select>
                    </div>


                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_fname" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre </font></font><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                        <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_companyname" class="text-black">Company Name </label>
                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                      </div>
                    </div>

                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pedidos</font></font></label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe tus notas aquí..."></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Código promocional</font></font></h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ingrese su código de cupón si tiene uno</font></font></label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Código promocional" aria-label="Código promocional" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aplicar</font></font></button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Su pedido</font></font></h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <tr><th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total</font></font></th>
                    </tr></thead>
                    <tbody>
                    <?php
                    $total = 0;
                    for ($i=0;$i<count($arreglo); $i++){
                    $total =$total+ ($arreglo[$i][ 'Precio' ]*$arreglo[$i]['Cantidad']);?>
                    <tr>
                    <td><?php echo $arreglo[$i]['Nombre']; ?> </td> 
                    <td>$<?php echo number_format($arreglo[$i]['Precio'], 2, '.', ''); ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    <tr>
                    <td>Order Total</td>
                    <td>$<?php echo number_format($total, 2, '.','');?></td>
                    </tr>
                      <!-- <tr>
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Camiseta de recarga </font></font><strong class="mx-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">x</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 1</font></font></td>
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$250.00</font></font></td>
                      </tr>
                      <tr>
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">   1 </font></font><strong class="mx-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">camiseta</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> polo.</font></font></td>
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$100.00</font></font></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subtotal del carrito</font></font></strong></td>
                        <td class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$350.00</font></font></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total del pedido</font></font></strong></td>
                        <td class="text-black font-weight-bold"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$350.00</font></font></strong></td>
                      </tr> -->
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transferencia bancaria directa</font></font></a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cheque Pago</font></font></a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PayPal</font></font></a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Realizar pedido</font></font></button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

    <!-- <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navegaciones</font></font></h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vender en línea</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carro de la compra</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Constructor de tiendas</font></font></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comercio movil</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envío directo</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desarrollo de sitios web</font></font></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Punto de venta</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hardware</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Software</font></font></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promoción</font></font></h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Marcador de posición de imagen" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encontrar tus zapatos perfectos</font></font></h3>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promoción del 15 al 25 de enero de 2019</font></font></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos de contacto</font></font></h3>
              <ul class="list-unstyled">
                <li class="address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">203 Fake St. Mountain View, San Francisco, California, EE. UU.</font></font></li>
                <li class="phone"><a href="tel://23923929210"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+2 392 3929 210</font></font></a></li>
                <li class="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dirección de correo electrónico@dominio.com</font></font></li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suscribir</font></font></label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Correo electrónico">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="btn btn-sm btn-primary" value="Enviar"></font></font>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
         
            Copyright ©
             </font></font><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>document.write(new Date().getFullYear());</script><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2023 Todos los derechos reservados | </font><font style="vertical-align: inherit;">GrijalvaRomero Tiendita</font></font><i class="icon-heart" aria-hidden="true"></i>
        
            </p>
          </div>
          
        </div>
      </div>
    </footer>  -->
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