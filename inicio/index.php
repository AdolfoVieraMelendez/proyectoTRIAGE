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
                <li class="active animated wobble">Escala de Gravedad</li>
                <li><a href="../pagina/evaluacion.php">Evaluación del Paciente</a></li>
            </ol>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <!-- <img class="imgContainer" draggable="false" src="../imagenes/niveles.png" alt="Niveles de Triage"> -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls rojo animated slideInLeft">
                            <i class="fas fa-ambulance"></i>
                            <p>REANIMACIÓN</p>
                            <p>ATENCIÓN INMEDIATA</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls naranja animated slideInRight">
                            <i class="fas fa-exclamation-circle"></i>
                            <p>EMERGENCIA</p>
                            <p>HASTA 15 MINUTOS DE ESPERA</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls amarillo animated slideInLeft">
                            <i class="fas fa-book-medical"></i>
                            <p>URGENCIA</p>
                            <p>HASTA 30 MINUTOS DE ESPERA</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls verde animated slideInRight">
                            <i class="fas fa-hands-helping"></i>
                            <p>PRIORITARIO</p>
                            <p>HASTA 60 MINUTOS DE ESPERA</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cajaLvls azul animated slideInLeft">
                            <i class="fas fa-heartbeat"></i>
                            <p>NO URGENTE</p>
                            <p>HASTA 120 MINUTOS DE ESPERA</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <footer class="animated fadeInLeft">
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