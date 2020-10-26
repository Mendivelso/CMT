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
    <link rel="stylesheet" type="text/css" href="../front/css/style.css">
    <link rel="stylesheet" type="text/css" href="../front/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../front/css/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="../front/css/alertify.default.css">
    <link href="../front/css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">
    <link href="../front/css/tinycarousel.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">


    <?php nav('2'); ?>




    <div class="container-fluid">
      <div class="row pdd">
        <div class="col-md-12">
          <a href="../"><img src="../front/img/logo-236x80.jpg" class="logoazul2" alt="logo azul"></a>
        </div>
      </div>

    </div>


    <div class="container">
      <div class="row PddBtn">

        <h1 class="title-contacto">Contáctenos</h1>

      </div>

    </div>



    <div class="container-fluid" id="Contacto">

      <div class="row paddTop">

      </div>

      <div class="row paddTop">
        <div class="col-xs-12 col-sm-5 col-md-5 text-center">
            <div class="triangle-isosceles">
              <img src="../front/img/telefono.png">
              <h3>TELÉFONOS FIJOS </h3>
              <p>
                3904571 - 3907372 - 3904547
              </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-4 text-center">
          <div class="triangle-isosceles" id="numerodos">
            <img src="../front/img/email.png">
            <h3>E-MAIL</h3>
            <p>
              gerencia@cmtespecialistas.com
            </p>
          </div>
        </div>
      </div>


      <div class="row espaciocont">

      </div>


      <div class="row">
        <div class="col-sm-6 col-md-offset-1 col-md-6 text-center">
            <div class="triangle-isosceles4">
              <img src="../front/img/ubicacion.png">
              <h3>E-MAIL</h3>
              <p>
                AV CARRERA 45 # 137-48
              </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 text-center">
          <div class="triangle-isosceles3" id="cuatro">
            <img src="../front/img/horario.png">
            <h3>HORARIO</h3>
            <p>
              lunes a viernes de 8 am a 4 pm
            </p>
          </div>
        </div>
      </div>

    </div>






    <div class="container-fluid bg-b p-30 ">
      <div class="row">
        <div class="col-sm-7 col-md-7">

            <form action="#">


              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Nombre Completo:</label>
                  <input type="text" class="form-control campo" id="email" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pwd">Email:</label>
                  <input type="email" class="form-control campo" id="pwd" required="">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Mensaje:</label>
                  <textarea name="" id="" rows="6" class="form-control campo" required=""></textarea>
                </div>
              </div>

              <div class="col-md-12 PddBtn">
                <button type="submit" class="btn_contacto btn btn-default">ENVIAR</button>
              </div>



            </form>




        </div>
        <div class="col-sm-5 col-md-5 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4728.61759263792!2d-74.05261168916314!3d4.7217733221277225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85e754d03265%3A0x6a014d843c0f6cd!2sIPS%20CMT%20CENTRO%20MEDICO%20DE%20ESPECIALISTAS%20SAS!5e0!3m2!1ses!2sco!4v1595534712101!5m2!1ses!2sco" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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