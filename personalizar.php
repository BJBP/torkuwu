<?php
    include('conexion.php');

    $numOpciones = $conexion->query("SELECT COUNT(*) total FROM opciones WHERE 1");
    $totalOpciones = $numOpciones->fetchColumn();

    $listaOpciones = $conexion->query("SELECT * FROM opciones WHERE 1");
?>

<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon"  href="./assets/icons/torkuwulogoweb.jpg">
    <title>TORKUWU</title>
    <meta name="description"
        content="Grupo JLB Dedicado a desarrollar productos y servicios en las industrias de empaques, diversión, turismo, servicios financieros y servicios contables." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="./assets/css/personalizado.css?v=3" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="position-relative" data-bs-spy="scroll" data-bs-offset="150" data-bs-target="#navbar-main">
    <header class="linea-etica-section-2">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-black px-5">
            <div class="container-fluid header-conjunto-2">
                <a href="/">
                    <img style="width: 200px;" class="img-fluid" src="./assets/icons/torkuwu logo.png" alt="logo">
                </a>
                <p class="fw-bold fs-2 pe-lg-5 me-lg-5 formasDeInvertir mt-2 ">Personaliza tu prenda!
                </p>
                <a href="./index.html">
                    <img style="width: 70px;" class="" src="./assets/icons/atras.png" alt="regresar">
                </a>
            </div>
        </nav>
    </header>

    <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
            <?php
                $EsPrimeraParte = true;
                for ($i = 0; $i < $totalOpciones/2; $i++) {
                    if($EsPrimeraParte){
                        echo '<li class="active"></li>';
                        $EsPrimeraParte = false;
                        continue;
                    }
                    echo '<li></li>';
                }
            ?>
            <!-- <li class="active">Tipo de Inversión</li>
            <li>Datos de la Transferencia</li>
            <li>Evidencia de Transferencia</li>
            <li>Acerca de tu Inversión</li>
            <li>Cantidad de Riesgo</li> -->
        </ul>
        
        <?php
            $EsPrimeraPestaña = true;
            $contadorOpciones = 0;
            $contadorPestañas = 0;
            while($OpcionFila = $listaOpciones->fetch(PDO::FETCH_ASSOC))
            {
                $opcionesporFila = explode(",", $OpcionFila['ListaOpciones']);
                $tamaño = count($opcionesporFila);
                if($contadorOpciones%2==0){
                    $contadorPestañas++;
                    echo '<fieldset>
                    <div class="row justify-content-center">';
                }

                echo '<div class="col col-lg-6 mt-1 text-center">
                    <h3 style="color:#000000; font-size:25px;"><b><br>'.$OpcionFila['NombreOpcion'].'</b></h3>
                    <div class="row justify-content-center">
                        <div class="col col-lg-6 mt-1 text-center">
                            <select name="'.$OpcionFila['NombreOpcion'].'">';
                        for ($i = 0; $i <= $tamaño; $i++) {
                            echo '<option value="'.$opcionesporFila[$i].'">'.$opcionesporFila[$i].'</option>';
                        }
                        echo'</select>
                        </div>
                        <div class="col col-lg-6 mt-1 text-left">
                            <img src="data:image/png;base64, '.base64_encode($OpcionFila['imagen']).'" class="img-fluid" style="width: 100px;" alt="metas">
                        </div>
                    </div>
                    <p style="color:#000000; text-align: center; font-size: 16px;">'.$OpcionFila['descripcion'].'</p>              
                </div>';

                if($contadorOpciones%2==1 || $contadorOpciones==$totalOpciones-1){
                    echo '</div>';
                    if($EsPrimeraPestaña){
                        echo '<input type="button" name="next" class="next action-button" value="Siguiente"/>';
                        $EsPrimeraPestaña = false;
                    }
                    elseif($contadorPestañas==ceil($totalOpciones/2)){
                        echo '<input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="submit" name="submit" class="submit action-button" value="Terminar" />';
                    }
                    else{
                        echo '<input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Siguiente" />';
                    }
                    echo '</fieldset>';
                }
                $contadorOpciones++;
            }

        ?>

        <!-- fieldsets -->
        <!-- <fieldset>
            <h1 class="fs-title fw-bold">¿Cómo quieres empezar a invertir?</h1>
            <h3 class="fs-subtitle">Selecciona como quieres iniciar tu inversión</h3>
            <div class="row justify-content-center">
                <div class="col mt-4 text-center">
                    <img src="./assets/icons/hucha.png" class="img-fluid" style="width: 100px;" alt="metas">
                    <h3 style="color:#00293A; font-size:25px;"><b><br>Invertir con metas:</b></h3>
                    <p style="color:#7D7D7D; text-align: center; font-size: 16px;">Tengo metas y quiero invertir en ello.</p>      
                    <button class="btn btn-primary" type="submit">VAMOS POR ELLO!</button>             
                </div>
                <div class="col mt-4 text-center">
                    <img src="./assets/icons/target.png" class="img-fluid" style="width: 100px;" alt="fondo">
                    <h3 style="color:#00293A; font-size:25px;"><b><br>Invertir en fondos:</b></h3>
                    <p style="color:#7D7D7D; text-align: center; font-size: 16px;">Conozco de fondos mutuos y quiero elegir mi inversión.</p>   
                    <button class="btn btn-primary" type="submit">VAMOS POR ELLO!</button>                    
                </div>
            </div>
            <input type="button" name="next" class="next action-button" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title fw-bold">Datos para iniciar la transferencia</h2>
            <h3 class="fs-subtitle">(obligatorio)</h3>
            <div class="row text-start">
                <div class="col-12 col-md-6 mb-4">
                    <label for="nombreInvolucrado" class="form-label"><b>Cuánto vas a invertir?</b></label>
                    <input type="text" class="form-control" id="nombreInvolucrado" name="nombre"
                        placeholder="Ingrese cantidad a invertir">
                    <label for="nombreInvolucrado" id="errorNombreInvolucrado" class="invalid-feedback"
                        style="display: none;">Debe ingresar la cantidad que deseas invertir</label>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <label for="tipoDenuncia" class="form-label">En qué meta vas a invertir</label>
                    <select for="disabledTextInput" id="tipoDenuncia" class="form-select"
                        name="denuncia" placeholder="Selecciona tipo de denuncia">
                        <option value="" selected hidden disabled>Seleccione una opción</option>
                        <option value="vivienda">Compra de inmueble</option>
                        <option value="auto">Para mi jubilación</option>
                        <option value="auto">Para mi propio negocio</option>
                        <option value="auto">No estoy seguro</option>
                    </select>
                    <label for="tipoDenuncia" id="errorTipoDenuncia" class="invalid-feedback"
                        style="display: none;">Por favor seleccione la meta que vas a invertir
                    </label>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-lg-6 col-12 mb-5">
                    <label for="disabledSelect" class="form-label">En qué fondo?</label>
                    <select for="disabledTextInput" id="Empresa" class="form-select" name="empresa"
                        placeholder="Selecciona la empresa">
                        <datalist id="datalistOptions2">
                            <option value="" selected hidden disabled>Seleccione el fondo</option>
                            <option value="Low">UpInvest Low</option>
                            <option value="Mid">UpInvest Mid</option>
                            <option value="High">UpInvest High</option>
                        </datalist>
                    </select>
                    <label for="tipoDenuncia" id="errorEmpresa" class="invalid-feedback"
                        style="display: none;">Por favor seleccione el fondo</label>
                </div>
                <div class="col-lg-6 col-12 mb-5">
                    <label for="disabledSelect" class="form-label">Desde qué banco realizarás la transferencia?</label>
                    <select for="disabledTextInput" id="Empresa" class="form-select" name="empresa"
                        placeholder="Selecciona un banco">
                        <datalist id="datalistOptions2">
                            <option value="" selected hidden disabled>Seleccionar un banco</option>
                            <option value="Bcp">Banco de Crédito</option>
                            <option value="Interbank">Interbank</option>
                            <option value="Scotiabank">Scotiabank</option>
                            <option value="Bbva">BBVA</option>
                            <option value="Otros bancos">Otros bancos</option>
                        </datalist>
                    </select>
                    <label for="tipoDenuncia" id="errorEmpresa" class="invalid-feedback"
                        style="display: none;">Por favor seleccione el fondo</label>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-lg-6 col-12 mb-5">
                    <label for="nombreInvolucrado" class="form-label">Si tienes un código promocional, ingresalo aquí</label>
                    <input type="text" class="form-control" id="nombreInvolucrado" name="nombre"
                    placeholder="Ingrese código promocional">
                    <label for="nombreInvolucrado" id="errorNombreInvolucrado" class="invalid-feedback"
                    style="display: none;">Debe ingresar el código promocional</label>
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Anterior" />
            <input type="button" name="next" class="next action-button" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title fw-bold mb-4">Transfiere y danos el código de operación</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-start">
                    <label for="nombreInvolucrado" class="form-label fw-bold">1. Los datos que necesitas para hacer la transferencia</label>
                    <div class="col text-center"style="background-color:#F6F6F6; height: 100px;">
                        datos
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-start">
                <label for="nombreInvolucrado" class="form-label fw-bold">2.La evidencia de la transferencia</label>
                <p>Ingresa el número de la operación</p>
                    <input type="text" class="form-control" id="nombreInvolucrado" name="nombre"
                        placeholder="Ingresa el número de la operación">
                    <label for="nombreInvolucrado" id="errorNombreInvolucrado" class="invalid-feedback"
                        style="display: none;">Ingresa el número de la operación
                    </label>
                <p>o si quieres sube la foto o screenshot de la operación (Máx. 20MB)</p>
                <div class="col-lg-7 col-11">
                    <div style="font-size: 14px" class="mt-1 mb-2">Subir la foto nítida y que sea visible el código de operación</div>                              
                    <input type="file" class="filepond" name="filepond"/>
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Anterior" />
            <input type="button" name="next" class="next action-button" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title fw-bold">Cuéntanos más de tu inversión</h2>
            <h3 class="fs-subtitle">Podrás cambiar estos datos más adelante. (Obligatorio)</h3>
            <div class="row justify-content-center text-start">
                <div class="col mb-4">
                    <label for="relacionInvolucrado" class="form-label fw-bolder">¿Cuál es tu meta de inversión?</label>
                    <select id="relacionInvolucrado" class="form-select" name="relacion">
                        <datalist id="datalistOptions2">
                            <option value="" selected disabled hidden>Selecciona la meta de inversión
                            </option>
                            <option value="ahorros">Maximizar ahorros</option>
                            <option value="Proveedor">Compra de inmueble</option>
                            <option value="Cliente">Ahorrar para mis estudios</option>
                            <option value="Otros">Fondo de emergencia</option>
                            <option value="Otros">Para mi jubilación</option>
                        </datalist>
                    </select>
                    <label for="relacionInvolucrado" id="errorRelacionInvolucrado"
                        class="invalid-feedback" style="display: none;">Debe seleccionar la meta de inversión</label>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for="nombreInvolucrado" class="form-label"><b>¿Cuánto es el monto al que quieres llegar?</b></label>
                    <input type="text" class="form-control" id="nombreInvolucrado" name="nombre"
                        placeholder="Ingrese cantidad a invertir">
                    <label for="nombreInvolucrado" id="errorNombreInvolucrado" class="invalid-feedback"
                        style="display: none;">Debe ingresar el monto que deseas invertir</label>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-12 col-md-6 mb-4">
                    <label for="nombreInvolucrado" class="form-label"><b>¿Cuánto es el monto de tu inversión inicial?</b></label>
                    <input type="text" class="form-control" id="nombreInvolucrado" name="nombre"
                        placeholder="Ingrese cantidad a invertir">
                    <label for="nombreInvolucrado" id="errorNombreInvolucrado" class="invalid-feedback"
                        style="display: none;">Debe ingresar el monto que deseas invertir</label>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for="nombreInvolucrado" class="form-label"><b>¿En cuántos años planeas disponer de tus fondos?</b></label>
                    <br>
                    <div class="bl-relative bl-flex bl-items-center bl-mb-3"><input type="range" min="1" max="30" aria-label="input range" data-testid="input-year" name="year" class="sc-kDvujY gUEzpi" value="5"></div>
                    <div class="bl-flex bl-justify-between"><span>1 año</span><span> - 5 años</span></div>
                </div>
            </div>
            <div class="row text-start">
                <div>
                    <span class="bl-font-bold bl-text-neutral-dark-10"><b>Incluir aportes futuros</b></span>
                    <button type="button" id="btnAgregarInvolucrado"
                        class="btn btn-outline-primary fw-bold botonDescarga px-4">
                        Incluir
                    </button>
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Anterior" />
            <input type="button" name="next" class="next action-button" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title fw-bold">¿Cuánto riesgo estás preparado a tomar con esta inversión?</h2>
            <h3 class="fs-subtitle">Debe seleccionar al menos uno</h3>
            <div class="form-group mt-4 text-start">
                <div class="radio mb-3">
                    <label><input class="me-2" type="checkbox" id="chkEvidencia1"
                            name="chkEvidencia1">Ninguno. No estoy dispuesto a aceptar pérdidas de valor temporales.
                    </label>
                </div>
                <div class="radio mb-3">
                    <label><input class="me-2" type="checkbox" id="chkEvidencia2"
                            name="chkEvidencia2">Poco: Aceptaría pérdidas temporales pequeñas a cambio de un retorno mayor a depósitos.
                    </label>
                </div>
                <div class="radio mb-3">
                    <label><input class="me-2" type="checkbox" id="chkEvidencia3"
                            name="chkEvidencia3">Moderado: Puedo aceptar pérdidas temporales importantes a cambio de retornos superiores.
                    </label>
                </div>
                <div class="radio mb-3">
                    <label><input class="me-2" type="checkbox" id="chkEvidencia4"
                            name="chkEvidencia4">Mucho: No me importa el nivel de pérdidas temporales, solo el resultado de largo plazo.
                    </label>
                </div>
            </div> 
            <input type="button" name="previous" class="previous action-button" value="Anterior" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset> -->
    </form>

    <!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <script src="./views/js/form 2.js?v=4"></script>
</body>

</html>