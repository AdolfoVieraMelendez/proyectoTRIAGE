<?php
    include'../funciones/funcionSumaPts.php';
    include'../funciones/funcionClasificacion.php';

    $nombre = $_POST["name"];
    $edad = $_POST["edad"];
    $sexo = $_POST["gen"];
    $domicilio = $_POST["dom"];
    $tMolestia = $_POST["tiempoMOL"];
    $alergia = $_POST["alergia"];
    $acompaniado = $_POST["famACO"];
    $diabetico = $_POST["diabetes"];

    $acompaniado2 = ($acompaniado == 'Si')?"El paciente viene acompañado/a":"El paciente no viene acompañado/a";
    $diabetico2 = ($diabetico == 'Si')?"El paciente padece de diabetes":"El paciente no padece de diabetes";

    $presionAS = $_POST["presionAS"];
    $presionAD = $_POST["presionAD"];
    $frecuenciaCAR = $_POST["frecuenciaCAR"];
    $tempAxila = $_POST["tempAXI"];
    $condActual = $_POST["condicionACT"];
    $dolorCabeza = $_POST["dolorCAB"];
    $hemorragia = $_POST["hemo"];
    $cefalea = $_POST["cefalea"];
    $dolorAbdominal = $_POST["dolorABD"];
    $frecRespiratoria = $_POST["frecRES"];
    $vomitoDiarrea = $_POST["VOyDI"];
    $tos = $_POST["tos"];
    $inflamacion = $_POST["inflamacion"];
    $toxic = $_POST["intoxic"];
    $extremo = $_POST["SEP"];

    $puntos = sumaPuntos($presionAS, $presionAD, $frecuenciaCAR, $tempAxila, $condActual, $dolorCabeza, $hemorragia, $cefalea, $dolorAbdominal, $frecRespiratoria, $vomitoDiarrea, $tos, $inflamacion, $toxic, $extremo);

    $clasificacion = clasificacion($puntos);

    switch($clasificacion){
        case 'REANIMACIÓN':
            $msg = "NECESITAS ATENCIÓN DE INMEDIATO";
            $color = "rojo";
            $icono = "fas fa-ambulance";
            break;
        case 'EMERGENCIA':
            $msg = "TE ATENDEREMOS EN UN LAPSO DE 15 MINUTOS";
            $color = "naranja";
            $icono = "fas fa-exclamation-circle";
            break;
        case 'URGENCIA':
            $msg = "TE ATENDEREMOS EN UN LAPSO DE 30 MINUTOS";
            $color = "amarillo";
            $icono = "fas fa-book-medical";
            break;
        case 'PRIORITARIO':
            $msg = "TE ATENDEREMOS EN UN LAPSO DE 45 MINUTOS";
            $color = "verde";
            $icono = "fas fa-hands-helping";
            break;
        case 'NO URGENTE':
            $msg = "TE ATENDEREMOS EN UN LAPSO DE 60 MINUTOS";
            $color = "azul";
            $icono = "fas fa-heartbeat";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto TRIAGE</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
    <link href="../plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
	<link href="../plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
	<!-- alertify -->
	<link href="../plugins/alertifyjs/css/alertify.css" rel="stylesheet">	
	<link href="../plugins/alertifyjs/css/themes/default.css" rel="stylesheet">	
	<!-- animate -->
    <link rel="stylesheet" href="../plugins/animate/animate.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <!-- Invocamos el navbar -->
        <?php
            include'../layout/navbar.php'
        ?>
    </header>

    <div class="container-fluid contenedor">
        <h1 class="animated bounceInLeft tri">TRIAGE</h1>
        <div class="contenedor-pan col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ol class="breadcrumb">
                <li class=""><a href="../inicio/index.php">Escala de Gravedad</a></li>
                <li class="active animated wobble">Evaluación del Paciente</li>
            </ol>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <!-- <img class="imgContainer" draggable="false" src="../imagenes/niveles.png" alt="Niveles de Triage"> -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls prueba <?php echo $color?> animated slideInLeft">
                            <i class="<?php echo $icono?>"></i>
                            <p class=""> <?php echo $clasificacion?> </p>
                            <p class=""> <?php echo $msg?> </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls <?php echo $color?> animated slideInRight" style="margin-bottom: 25px;">
                            <p class="info">Nombre del paciente: <?php echo $nombre?> </p>
                            <p class="info">Edad: <?php echo $edad?> </p>
                            <p class="info">Género: <?php echo $sexo?> </p>
                            <p class="info">Domicilio: <?php echo $domicilio?> </p>
                            <p class="info">Tiempo con molestias: <?php echo $tMolestia?> </p>
                            <p class="info">Alergias: <?php echo $alergia?> </p>
                            <p class="info"> <?php echo $diabetico2?> </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <footer class="animated fadeInLeft">
        <!-- Invocamos el footer -->
        <?php
            include'../layout/footer.php'
        ?>
    </footer>

    
    
    <!-- jquery -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- alertify -->
	<script src="../plugins/alertifyjs/alertify.js"></script>
	<!-- bootstrap -->
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
	<script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
	<!-- Scripts personalizados -->
	<script src="../js/menu.js"></script>
	<script src="../js/precarga.js"></script>
	<script src="../js/salir.js"></script>
</body>
</html>