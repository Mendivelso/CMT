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
      <div class="row pdd">
        <div class="col-sm-6 col-md-6">
          <div class="row">
            <img src="../front/img/logo-236x80.jpg" class="logoazul" alt="logo azul">
          </div>

          <div class="row text-center">
            <img src="../front/img/servicios/icon-domiciliaria.png" class="icon" alt="vascular">
          </div>
          <div class="row text-center">
            <h1 class="h1">
              Atención <br> Domiciliaria

            </h1>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 del">
          <img src="../front/img/servicios/atencion-domiciliaria.png" class="servicio-img" alt="logo azul">
        </div>
      </div>
    </div>



    <div class="container pddTop">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <img src="../front/img/servicios/Cardio.jpg" class="ser" alt="ser">
        </div>
        <div class="col-sm-6 col-md-6">
          <img src="../front/img/servicios/Dig-Cardio-1024x876.jpg" class="ser" alt="ser">
        </div>
      </div>
    </div>

    <div class="container-fluid" id="espacioSer"></div>


    <div class="container-fluid pddTop fd " id="proce">

      <div class="row">
        <h3 class="h3">Disponemos para su beneficio  los siguientes procedimientos:</h3>
      </div>

      <div class="row">
        <div class="col-sm-6  col-md-offset-1  col-md-5">

          <ul class="procedimientos" type="square">
            <li>- Electrocardiograma</li>
            <li>- Ecocardiograma TransToracic</li>
            <li>- Ecocardiograma TransEsofagico</li>
            <li>- Ecocardiograma con estrés farmacológico o estrés en ejercici</li>
            <li>- Monitoria Holter EKG de 24 hora</li>
            <li>- Monitoria Ambulatoria de Presión Arterial (MAPA)</li>
            <li>- Prueba de Esfuerzo</li>
          </ul>

        </div>
        <div class="col-sm-6  col-md-offset-1 col-md-5"><br><br>
          <ul class="procedimientos" type="square">
            <li>- Ecocardiograma transtorácico Doppler color pediátrico</li>
            <li>- Electrocardiograma Pediátrico</li>
            <li>- Monitoria Holter EKG de 24 horas Pediátrico</li>
            <li>- Prueba de Esfuerzo Pediátrico</li>
          </ul>
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