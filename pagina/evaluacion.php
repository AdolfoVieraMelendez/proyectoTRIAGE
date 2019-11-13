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
                    <div class="formulario animated slideInLeft">
                        <form action="resultado.php" method="POST" role="form">
                           <div class="encabezado animated slideInLeft anim1">
                                Ingrese los datos solicitados
                            </div> 

                            <div class="cuerpo animated slideInLeft anim2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Nombre del paciente</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nombre completo" autofocus required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Edad</label>
                                            <input type="number" name="edad" class="form-control" placeholder="Ej. 15" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Género</label>
                                            <br>
                                            <div class="form-control">
                                                <label>Hombre</label> <input type="radio" name="gen" value="Hombre"> 
                                                <label>Mujer</label> <input type="radio" name="gen" value="Mujer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Domicilio</label>
                                            <input type="text" name="dom" class="form-control" placeholder="Calle #Número Colonia" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Tiempo con la molestia</label>
                                            <input type="text" name="tiempoMOL" class="form-control" placeholder="Días, semanas meses..." required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Alergia a algún medicamento</label>
                                            <input type="text" name="alergia" class="form-control" placeholder=" Sí, especifique / No" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Familiares/Acompañantes</label>
                                            <br>
                                            <div class="form-control">
                                                <label>Sí</label> <input type="radio" name="famACO" value="Si"> 
                                                <label>No</label> <input type="radio" name="famACO" value="No"> 
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Diabético</label>
                                            <br>
                                            <div class="form-control">
                                                <label>Sí</label> <input type="radio" name="diabetes" value="Si"> 
                                                <label>No</label> <input type="radio" name="diabetes" value="No">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="encabezado animated slideInLeft anim3">
                                Signos Vitales y Síntomas
                            </div>

                            <div class="cuerpo animated slideInLeft anim4">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Situación Extrema Presente</label>
                                            <select name="SEP" class="form-control select2">
                                                <option value="0">Ninguna</option>
                                                <option value="60">Pérdida de miembro u órgano</option>
                                                <option value="60">Embarazada en labor de parto</option>
                                                <option value="60">Paro cardiaco</option>
                                                <option value="60">Asma crítico</option>
                                                <option value="60">Pérdida de la conciencia</option>
                                                <option value="60">Convulsiones sin parar</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Presión Arterial Sintática</label>
                                            <select name="presionAS" class="form-control select2">
                                                <?php
                                                    $v=1;
                                                    $n=80;
                                                    $m=119;
                                                    for($i=1; $i <= 5; $i=$i+1){
                                                        ?>
                                                        <?php
                                                        
                                                        ?>
                                                        <option value="<?php echo $v?>"><?php echo $n." - ".$m?></option>
                                                        <?php
                                                        $v=$v+1;
                                                        
                                                        $m=$m+20;
                                                        if($n >= 120){
                                                            $n=$n+20;
                                                        }else{
                                                            $n=$n+40;
                                                        } 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Presión Arterial Diastólica</label>
                                            <select name="presionAD" class="form-control select2">
                                                <?php
                                                    $v=1;
                                                    $n=60;
                                                    $m=79;
                                                    $i=1;
                                                    while($i <= 5){
                                                        ?>
                                                        <?php
                                                        
                                                        ?>
                                                        <option value="<?php echo $v?>"><?php echo $n." - ".$m?></option>
                                                        <?php
                                                        $v=$v+1;
                                                        $n=$n+10;
                                                        $m=$m+10;
                                                        $i=$i+1;
                                                         
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Frecuencia Cardiaca</label>
                                            <select name="frecuenciaCAR" class="form-control select2">
                                                <option value="1">50 - 59</option>
                                                <option value="2">60 - 69</option>
                                                <option value="3">70 - 79</option>
                                                <option value="4">80 - 89</option>
                                                <option value="5">-40 / +100</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Temperatura Axilar</label>
                                            <select name="tempAXI" class="form-control select2">
                                                <option value="1">35 - 35.5</option>
                                                <option value="2">35.6 - 36.5</option>
                                                <option value="3">36.6 - 37.5</option>
                                                <option value="4">37.6 - 38.5</option>
                                                <option value="5">+38.6</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Condición actual</label>
                                            <select name="condicionACT" class="form-control select2">
                                                <option value="2">No compromete el estado general del paciente</option>
                                                <option value="3">Puede progresar a emergencia</option>
                                                <option value="4">Riesgo potencial de amenaza</option>
                                                <option value="5">Amenaza la vida</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Dolor de cabeza</label>
                                            <select name="dolorCAB" class="form-control select2">
                                                <option value="1">Ausente</option>
                                                <option value="2">Poco Dolor</option>
                                                <option value="3">Moderado</option>
                                                <option value="4">Dolor Fuerte</option>
                                                <option value="5">Intenso</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Hemorragia</label>
                                            <select name="hemo" class="form-control select2">
                                                <option value="2">Ausente</option>
                                                <option value="3">Sangrado Leve Moderado</option>
                                                <option value="4">Sangrado Moderado</option>
                                                <option value="5">Masiva</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Cefálea</label>
                                            <select name="cefalea" class="form-control select2">
                                                <option value="1">Estrés Emocional</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Normal</option>
                                                <option value="4">Severo</option>
                                                <option value="5">Muy Intenso</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Dolor Abdominal</label>
                                            <select name="dolorABD" class="form-control select2">
                                                <option value="1">Ausente</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Moderado</option>
                                                <option value="4">Severo</option>
                                                <option value="5">Intenso</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Frecuencia Respiratoria</label>
                                            <select name="frecRES" class="form-control select2">
                                                <option value="1">10 Resp/min</option>
                                                <option value="2">11 - 19 Resp/min</option>
                                                <option value="3">20 - 24 Resp/min</option>
                                                <option value="4">25 - 29 Resp/min</option>
                                                <option value="5">+30 Resp/min</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Vomito y Diarrea</label>
                                            <select name="VOyDI" class="form-control select2">
                                                <option value="1">Normal</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Moderado</option>
                                                <option value="4">Severo</option>
                                                <option value="5">Deshidratación</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Tos</label>
                                            <select name="tos" class="form-control select2">
                                                <option value="1">Ausente</option>
                                                <option value="2">Solo a la aspiración</option>
                                                <option value="3">Débil</option>
                                                <option value="4">Persistente</option>
                                                <option value="5">Fuerte y Espotánea</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Inflamación</label>
                                            <select name="inflamacion" class="form-control select2">
                                                <option value="1">Ausente</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Aguda</option>
                                                <option value="4">Severa</option>
                                                <option value="5">Crónica</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Intoxicación</label>
                                            <select name="intoxic" class="form-control select2">
                                                <option value="1">Ausente</option>
                                                <option value="2">Por medicamento</option>
                                                <option value="3">Por Veneno</option>
                                                <option value="4">Por Hongo</option>
                                                <option value="5">Picadura de Serpiente / Alacrán</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pie animated slideInLeft anim5" style="padding-bottom: 10px;">
                                    <button type="submit" class="btn btn-form">Enviar datos</button>
                                    <button type="reset" class="btn btn-form pull-left">Reiniciar datos</button>
                            </div>
                        </form>
                            
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