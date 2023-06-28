<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TORKUWU</title>
    <link rel="shortcut icon" type="image" href="./assets/image/TORKUWU.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- SweetAlert 2 -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
</head>

<!--=====================================fixed
CUERPO DOCUMENTO
======================================-->
<body class="body-temp">
    <?php 
    /*=============================================
    HEADER
    =============================================*/
    include 'views/layouts/header.php';
    // if (
    // isset($_SESSION['iniciarSesion']) &&
    // $_SESSION['iniciarSesion'] == 'ok'
    // ) {

    // echo '<div class="wrapper">';
    
    /*=============================================
    MENU
    =============================================*/
    // include 'views/layouts/menu.php';

    /*=============================================
    CONTENIDO
    =============================================*/
    
    if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 'Administrador') {
        
    } else {
        if (isset($_GET['ruta'])) {
            if (
                $_GET['ruta'] == 'inicio' ||
                $_GET['ruta'] == 'login' ||
                $_GET['ruta'] == 'registrar' ||
                $_GET['ruta'] == 'usuarios' ||
                $_GET['ruta'] == 'recuperar-contraseña' ||
                $_GET['ruta'] == 'nueva-contraseña' ||
                $_GET['ruta'] == 'configuracion' ||
                $_GET['ruta'] == 'coleccion' ||
                $_GET['ruta'] == 'diseñar' ||
                $_GET['ruta'] == 'admin-diseñar-opciones' ||
                $_GET['ruta'] == 'admin-diseñar-pedidos' ||
                $_GET['ruta'] == 'salir'
            ) {
                include 'views/pages/' . $_GET['ruta'] . '.php';
            } else {
                include 'views/pages/404.php';
            }
        } else {
            include 'views/pages/inicio.php';
        }
    }
    
    // echo '</div>';


    /*=============================================
    FOOTER
    =============================================*/
    include 'views/layouts/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="views/js/plantilla.js"></script>

    <!-- <script src="views/js/usuarios.js"></script> -->
    <script src="views/js/recuperar-contraseña.js"></script>
    <script src="views/js/configuracion.js"></script>
</body>

</html>