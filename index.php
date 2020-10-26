<?php


include_once 'includes/nav.php';
include_once 'includes/footer.php';



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
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="front/css/style.css">
    <link rel="stylesheet" type="text/css" href="front/css/menu.css">

    <link rel="stylesheet" type="text/css" href="front/css/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="front/css/alertify.default.css">
    <link href="front/css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">
    <link href="front/css/tinycarousel.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">


    <?php nav('1'); ?>



    <div class="container-fluid" style="padding: 0px" id="slide">
      <div id="fixed_width_carousel" class="carousel fixed_width_carousel_fade animate_text" data-ride="carousel" data-interval="4000" data-pause="hover">
        <div class="carousel-inner inner1" role="listbox">
          <div class="row pdd" id="servicios">
            <div class="col-md-12">
              <!-- <img src="front/img/logo-236x80.jpg" class="logoazul" alt="logo azul"> -->
            </div>
            <div class="col-sm-12 col-md-12 espacio"></div>
            <div class="col-sm-6 col-md-5" id="rowNone">
              <div class="row">
                <h2 class="h2">Sobre Nuestra IPS</h2>
                <p class="p_cita">
                  Somos C.M.T Centro de Especialistas IPS, empresa del sector privado, con 4 años de experiencia, dedicados a la prestación de servicios de salud de usuarios con condiciones crónicas no transmisibles. Centro de especialistas en bogota  y municipios de Cundinamarca.
                </p>
              </div>
              <div class="row text-center">
                <button type="button" class="btn_con">Contáctenos</button>
              </div>
            </div>
          </div>
          <div class="item active carimages">
            <img src='front/img/fondo11.png' alt="slider 04" width="100%" class="imgs">
          </div>
          <div class="item carimages">
            <img src='front/img/fondo11.png' alt="slider 04" width="100%" class="imgs">
          </div>
        </div>
      </div>
    </div>


    <div class="container bg-b" id="contMovil">
        <div class="row">
          <h2 class="h2">Sobre Nuestra IPS</h2>
          <p class="p_cita">
            Somos C.M.T Centro de Especialistas IPS, empresa del sector privado, con 4 años de experiencia, dedicados a la prestación de servicios de salud de usuarios con condiciones crónicas no transmisibles. Centro de especialistas en bogota  y municipios de Cundinamarca.
          </p>
        </div>
        <div class="row text-center">
          <button type="button" class="btn_con">Contáctenos</button>
        </div>
    </div>



    <!-- Lsita productos -->
    <div class="container-fluid pdd pdtop bg-b">

      <div class="row" id="espacioT">

      </div>

      <div class="row text-center mb-5">
        <h2 class="h2">Nuestras Instalaciones </h2>
      </div>

      <div class="row">
        <div class="col-sm-4 col-md-4">
        <div class="contenedor-img ejemplo-1">
             <img src="front/img/p1.png" />

             <div class="mascara">
                <img src="holder.js/90x90?theme=white" class="img-circle" alt="">
                 <h2>Ejemplo 1</h2>
                 <p class="pn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                 <a href="#" class="link">ver más</a>
             </div>
        </div>
        </div>

        <div class="col-sm-4 col-md-4">
          <div class="contenedor-img ejemplo-1">
               <img src="front/img/p2.png" />

               <div class="mascara">
                    <img src="holder.js/90x90?theme=white" class="img-circle" alt="">
                   <h2>Ejemplo 1</h2>
                   <p class="pn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                   <a href="#" class="link">ver más</a>
               </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="contenedor-img ejemplo-1">
               <img src="front/img/p1.png" />

               <div class="mascara">
                  <img src="holder.js/90x90?theme=white" class="img-circle" alt="">
                   <h2>Ejemplo 1</h2>
                   <p class="pn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                   <a href="#" class="link">ver más</a>
               </div>
          </div>
        </div>



      </div>
      <div class="row text-center pdtop"><button class="btn_mas">ver todos</button></div><br><br>
    </div>




    <div class="container-fluid bg-b pb-10">

      <div class="row">
        <div class="col-sm-12 col-md-6">
          <!-- Imagen Doctor -->
          <img src="front/img/doctor-cmt.png" class="img-responsive doctor">
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="row">

            <h2 class="h2 text-center mb-5">Nuestros Servicios</h2>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators" id="indicadores">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" id="GaleriaServicios">
                <div class="item active">

                  <div class="row t1">
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser1.png" class="img-circle" alt="">
                          <p><strong>Diagnostico Cardio-Vascular</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser2.png" class="img-circle" alt="">
                          <p><strong>Gastroenterologia</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                  </div>

                  <div class="row t1">
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser3.png" class="img-circle" alt="">
                          <p><strong>Función Pulmonar</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser4.png" class="img-circle" alt="">
                          <p><strong>Oftalmología</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                  </div>


                  <div class="row t1">
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser6.png" class="img-circle" alt="">
                          <p><strong>Ultrasonido</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/ser1.png" class="img-circle" alt="">
                          <p><strong>Diagnostico Cardio-Vascular</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                  </div>


                </div>

                <div class="item">

                  <div class="row t1">
                    <div class="col-sm-6 col-md-6">
                        <div class="tarjeta text-center">
                          <img src="front/img/ser1.png" class="img-circle" alt="">
                          <p><strong>Diagnostico Cardio-Vascular</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="tarjeta text-center">
                          <img src="front/img/ser3.png" class="img-circle" alt="">
                          <p><strong>Función Pulmonar</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>

                  </div>


                  <div class="row t1">

                    <div class="col-sm-6 col-md-6">
                        <div class="tarjeta text-center">
                          <img src="front/img/ser4.png" class="img-circle" alt="">
                          <p><strong>Oftalmología</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="tarjeta text-center">
                          <img src="front/img/ser5.png" class="img-circle" alt="">
                          <p><strong>Consulta externa</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                  </div>



                  <div class="row t1">
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/servicios/icon-domiciliaria.png" class="img-circle" alt="">
                          <p><strong>Atención Domiciliaria</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="tarjeta text-center">
                          <img src="front/img/servicios/icon-electrodiagnostico.png" class="img-circle" alt="">
                          <p><strong>Electrodiágnostico</strong></p>
                          <p class="pn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid bg-b" id="ContServicios">

      <div class="row t1">
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser1.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser2.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
      </div>

      <div class="row t1">
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser3.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser4.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
      </div>


      <div class="row t1">
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser6.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
        <div class="col-sm-6 col-md-6">

            <div class="tarjeta text-center">
              <img src="front/img/ser1.png" class="img-circle" alt="">
              <p><strong>Diagnostico Cardio-Vascular</strong></p>
              <p class="pn">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>

        </div>
      </div>


    </div>





    <!-- Galeria -->
    <div class="container-fluid text-center bg-a pd-a">
      <div class="row">

        <div class="col-md-5">
          <h2 class="h2 text-center mb-5 mt-5 tc-b">Nuestros Clientes</h2>
          <p class="tc-b pn">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
        <div class="col-md-7">
            <div id="slider1">
              <a class="buttons prev" href="#"><img src="front/img/left-04.png" alt="anterior foto"></a>
              <div class="viewport">
                <ul class="overview">
                  <li><img src="holder.js/300x250?theme=lava" class="img-responsive"/></li>
                  <li><img src="holder.js/300x250?theme=lava" class="img-responsive"/></li>
                  <li><img src="holder.js/300x250?theme=lava" class="img-responsive"/></li>
                  <li><img src="holder.js/300x250?theme=lava" class="img-responsive"/></li>
                </ul>
              </div>
              <a class="buttons next" href="#"><img src="front/img/right-05.png" alt="siguiente foto"></a>
            </div>
        </div>




      </div>

    </div>


    <div class="container-fluid bg-b  ">
      <div class="row p-30">
        <h2 class="h2 text-center mb-5">Nuestro Equipo</h2>
      </div>

      <div class="row">
        <div class="col-sm-4 col-md-4 text-center">

          <div class="contEquipo">
            <img src="front/img/icon1.png" class="img-circle iconDoctor" alt="">
            <p class="f-r">Julian Parga</p>
            <h4>GASTROENTERÓLO</h4>
          </div>

        </div>
        <div class="col-sm-4 col-md-4 text-center">

          <div class="contEquipo">
            <img src="front/img/icon2.png" class="img-circle iconDoctor" alt="">
            <p class="f-r">Gary Andres Baquero</p>
            <h4>MEDICO INTERNISTA</h4>
          </div>




        </div>
        <div class="col-sm-4 col-md-4 text-center">
          <div class="contEquipo">
              <img src="front/img/icon3.png" class="img-circle iconDoctor" alt="">
              <p class="f-r">Luis Carlos Blanco</p>
              <h4>CARDIOLOGO</h4>
          </div>

        </div>
      </div>

    </div>


    <div class="container p-10 bg-b">
      <div class="row text-center">
        <img src="front/img/Group 3.png" class="fotoDoc">
      </div>
    </div>

    <div class="container p-10 bg-b">
      <div class="row text-center">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <video src="http://cmtespecialistas.com.previewc75.carrierzone.com/wp-content/uploads/2020/04/Tapabocas-casero.mp4" controls    width="100%">
            Tu navegador no implementa el elemento <code>video</code>.
          </video>
        </div>
        <div class="col-md-1"></div>

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

              <div class="col-md-12">
                <button type="submit" class="btn_contacto btn btn-default">ENVIAR</button>
              </div>



            </form>




        </div>
        <div class="col-sm-5 col-md-5 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4728.61759263792!2d-74.05261168916314!3d4.7217733221277225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85e754d03265%3A0x6a014d843c0f6cd!2sIPS%20CMT%20CENTRO%20MEDICO%20DE%20ESPECIALISTAS%20SAS!5e0!3m2!1ses!2sco!4v1595534712101!5m2!1ses!2sco" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>

   <?php footer('1'); ?>

    <!-- footer -->

    <!-- Scripts -->
    <script type="text/javascript" src="front/js/jquery.min.js"></script>
    <script type="text/javascript" src="front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="front/js/validacion.js"></script>
    <script type="text/javascript" src="front/js/alertify.min.js"></script>
    <script type="text/javascript" src="front/js/jquery.tinycarousel.js"></script>
    <script type="text/javascript" src="front/js/valid.js"></script>
    <script type="text/javascript" src="front/js/holder/holder.js"></script>
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