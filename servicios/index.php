<?php

include_once '../includes/nav.php';
include_once '../includes/footer.php';



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Especialistas IPS en bogota | Consulta medica en Bogotá</title>
    <meta name="title" content="Centro de Especialistas IPS en bogota | Consulta medica en Bogotá"/>
     <meta name="description" content="">
     <meta name="keywords" content="">
     <META NAME="robots" content="index,follow">
     <META NAME="distribution" content="global">
    <link rel="stylesheet" type="text/css" href="../front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../front/css/servicios.css">
    <link rel="stylesheet" type="text/css" href="../front/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../front/css/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="../front/css/alertify.default.css">
    <link href="../front/css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php nav('2'); ?>

    <div class="container-fluid" id="">

      <div class="row espacioT">

      </div>

      <div class="row pdd">
        <div class="col-sm-12 col-md-12">
          <div class="row">
              <h1 class="h1-title">
                Nuestros Servicios
              </h1>
          </div>
          <div class="row">
            <div class="col-md-10">
                <p class="p2">
                  Contamos con instalaciones adecuadas para brindar un servicio de calidad, humanizado y seguro, con servicios habilitados con Resolución 3100 de 2019, para dar a nuestros pacientes la tranquilidad de ser atendido con personal altamente capacitado y con tecnología de punta.
                </p>
            </div>

          </div>
        </div>
      </div>
    </div>




    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/ojos.png');">
            <h3 class="BText">Oftalmología</h3>
            <a href="oftalmologia.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/pulmonar.png');">
            <h3 class="BText">Función Pulmonar</h3>
            <a href="laboratorio-funcion-pulmonar.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/ultrasonido.png');">
            <h3 class="BText">Ultrasonido</h3>
            <a href="ultrasonido.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/telemedicina.png');">
            <h3 class="BText">Telemedicina</h3>
            <a href="telemedicina.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/gastro.png');">
            <h3 class="BText">Gastroenterología</h3>
            <a href="gastroenterologia.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/electrodiagnostico.png');">
            <h3 class="BText">Electrodiagnostico</h3>
            <a href="electrodiagnostico.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/vascular.png');">
            <h3 class="BText">Cardio Vascular </h3>
            <a href="diagnostico-cardio-vascular.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/consulta-externa.png');">
            <h3 class="BText">Consulta Externa </h3>
            <a href="consulta-externa.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="serv" style="background-image: url('../front/img/servicios/atencion-domiciliaria.png');">
            <h3 class="BText">Atención Domiciliaria</h3>
            <a href="atencion-domiciliaria.php" class="btn btn-primary ver">ver más </a>
          </div>
        </div>

      </div>
    </div>


    <?php footer('2'); ?>

    <!-- footer -->

    <!-- Scripts -->
    <script type="text/javascript" src="../front/js/jquery.min.js"></script>
    <script type="text/javascript" src="../front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../front/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../front/js/validacion.js"></script>
    <script type="text/javascript" src="../front/js/alertify.min.js"></script>
    <script type="text/javascript" src="../front/js/jquery.tinycarousel.js"></script>
    <script type="text/javascript" src="../front/js/valid.js"></script>
    <script type="text/javascript" src="../front/js/holder/holder.js"></script>
    <script type="text/javascript">
    $(function(){
      $('#txtTel').validCampoFranz('0123456789');
    });
        $(document).ready(function()
        {
          $('#slider1').tinycarousel({ interval: true });
          interval = 5000;
        });
    </script>
</body>
</html>