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
            <img src="../front/img/icon3.png" class="icon" alt="vascular">
          </div>
          <div class="row text-center">
            <h1 class="h1">
              Diagnóstico  <br> Cardio-Vascular

            </h1>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 del">
          <img src="../front/img/servicios/vascular.png" class="servicio-img" alt="logo azul">
        </div>
      </div>
    </div>



    <div class="container pddTop">
      <div class="row">
        <div class="col-sm-6 col-md-6">
        	<a download="../documentos/cardiologia.pdf" href="../documentos/cardiologia.pdf" title=" Clic para descargar documento">
          		<img src="../front/img/servicios/Cardio.jpg" class="ser" alt="ser">
          	</a>
        </div>
        <div class="col-sm-6 col-md-6">
          <img src="../front/img/servicios/Dig-Cardio-1024x876.jpg" class="ser" alt="ser">
        </div>
      </div>
    </div>

    <div class="container-fluid" id="espacioSer"></div>
      
      <div class="proce text-center">
      <h3 class="h3 h3-ser ">Disponemos para su beneficio  los siguientes procedimientos:</h3>
      </div>

    <div class="container-fluid pddTop " id="proce">
      <div class="row">
        <div class="col-sm-6 col-md-4 proce">
          
          <ul class="procedimientos" type="square">
            <li id="l1" class="active">- <a >Electrocardiograma</a></li>
            <li id="l2" class="">- <a >Ecocardiograma transesofágico</a></li>
            <li id="l3" class="">- Ecocardiograma transtorácico</li>
            <li id="l4" class="">- Prueba de Esfuerzo</li>
            <li id="l5" class="">- Monitoria Holter EKG de 24 hora</li>
            
          </ul>

        </div>
        <div class="col-sm-6  col-md-8">

          <!-- Informacion Electrocardiograma -->
          <div id="electrocardiograma" class="cuadro">
            <h3>¿Qué es?</h3>

            <p> Es una prueba diagnóstica, en la que se registra la actividad eléctrica del corazón, permite valorar el ritmo cardiaco, crecimiento de cavidades, isquemia coronaria, infarto agudo, infarto antiguo del miocardio, entre otros.</p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - El paciente debe rasurar el área del pecho en caso necesario, no debe aplicar ningún tipo de loción, gel, crema, perfume ni talco en el tórax. 
                </li>
                <li>
                  - Asistir con ropa cómoda.
                </li>
                <li>
                  - No requiere ayuno para este examen.
                </li>
                <li>
                  - Conocer el nombre de los medicamentos que está tomando y si es posible presentar la fórmula actualizada. 
                </li>
              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Este examen es indoloro. 
                    </li>
                    <li>
                      - Con el paciente acostado, se fijan sobre la piel electrodos a cada brazo, a cada pierna y al tórax, para lo cual es a veces necesario limpiar el área o rasurar. Los electrodos se utilizan para captar los impulsos eléctricos del corazón. Los impulsos se registran, proporcionándoles a los médicos una representación gráfica de la actividad eléctrica del corazón. 
                    </li>
                    <li>
                      - El paciente debe permanecer quieto y contener la respiración por períodos cortos de tiempo durante el procedimiento
                    </li>
                    <li>
                      - Ocasionalmente puede haber una reacción de la piel incómoda a los electrodos pegajosos. 
                    </li>
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <p>
                  Podrá incorporarse a sus tareas laborales o domésticas diarias con normalidad.
                  </p>
              </div>

          </div>



           <!-- Informacion Electrocardiograma -->
          <div id="proce2" class="cuadro">
            <h3>¿Qué es?</h3>

            <p>
            Es una prueba diagnóstica, consiste en visualizar el corazón por medio de un transductor acoplado a una sonda o tubo que se meterá a través de la boca y llegará hasta el esófago, desde donde ya se podrán captar imágenes del corazón. Por tanto, es una técnica invasiva. Generalmente es un estudio complementario al ecocardiograma transtorácico, que aporta información similar pero más detallada de ciertas estructuras, como son las válvulas cardiacas. Además, ayuda a descartar la presencia de trombos (coágulos), tumores o alteraciones congénitas del corazón que no se pueden ver de forma completa con un ecocardiograma transtorácico.
            </p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - Es necesario no haber ingerido alimentos sólidos ni líquidos (ayuno completo) en las 6 horas previas a la prueba debido a que se debe introducir una sonda por el esófago. 
                </li>
                <li>
                  - Tampoco se debe haber tomado ninguna medicación oral en ese periodo de tiempo.
                </li>
                <li>
                  - El paciente debe acudir acompañado por un familiar o acudiente puesto que en ocasiones es necesario administrar un sedante para llevar a cabo la prueba. 
                </li>
                <li>
                  - Si tiene dentadura postiza deberá quitársela en el momento de realizar la prueba. 
                </li>

                <li>
                  -	La duración de la prueba es de 45-60 minutos.
                </li>
              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - En la sala de procedimiento, la enfermera le aplicara al paciente un spray anestésico para la garganta. 
                    </li>
                    <li>
                      - Una vez acostado sobre la camilla, con el pecho descubierto, le colocarán unos electrodos en el pecho para visualizar el electrocardiograma durante el estudio. Es posible que, además, la enfermera le inyecte una medicación con efecto sedante en una vena de los brazos. 
                    </li>
                    <li>
                      - A continuación, el cardiólogo colocará la sonda dentro de la boca del paciente y le pedirá que trague para introducirla en el esófago, lo que puede provocar algunas náuseas que desaparecerán una vez que la sonda esté dentro. 
                    </li>
                    <li>
                      - Posteriormente, se realizará el estudio, durante el cual, si se ha administrado el sedante, el paciente estará tan relajado que puede llegar incluso a dormirse. Al levantarse, puede sentir cierta sensación de mareo.
                    </li>
                    <li>
                      - El anestésico de la garganta puede producir tos y el spray resultar algo amargo. Al extraer la sonda es conveniente toser para sacar las flemas que se hayan podido retener.
                    </li>
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <ul class="general">
                    <li>
                      - No se debe tomar ningún alimento hasta pasadas unas 2 horas después de la exploración. 
                    </li>
                    <li>
                      - No es aconsejable conducir en las siguientes 2-4 horas del estudio si se ha recibido el sedante por vena. 
                    </li>
                    <li>
                      - Las personas de edad avanzada deben estar acompañadas durante las siguientes 2-4 horas. 
                    </li>
                    <li></li>
                  </ul>
              </div>

          </div>

          
                     <!-- Informacion Electrocardiograma -->
          <div id="proce2" class="cuadro">
            <h3>¿Qué es?</h3>

            <p>
            Es una prueba diagnóstica, consiste en visualizar el corazón por medio de un transductor acoplado a una sonda o tubo que se meterá a través de la boca y llegará hasta el esófago, desde donde ya se podrán captar imágenes del corazón. Por tanto, es una técnica invasiva. Generalmente es un estudio complementario al ecocardiograma transtorácico, que aporta información similar pero más detallada de ciertas estructuras, como son las válvulas cardiacas. Además, ayuda a descartar la presencia de trombos (coágulos), tumores o alteraciones congénitas del corazón que no se pueden ver de forma completa con un ecocardiograma transtorácico.
            </p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - Es necesario no haber ingerido alimentos sólidos ni líquidos (ayuno completo) en las 6 horas previas a la prueba debido a que se debe introducir una sonda por el esófago. 
                </li>
                <li>
                  - Tampoco se debe haber tomado ninguna medicación oral en ese periodo de tiempo.
                </li>
                <li>
                  - El paciente debe acudir acompañado por un familiar o acudiente puesto que en ocasiones es necesario administrar un sedante para llevar a cabo la prueba. 
                </li>
                <li>
                  - Si tiene dentadura postiza deberá quitársela en el momento de realizar la prueba. 
                </li>

                <li>
                  -	La duración de la prueba es de 45-60 minutos.
                </li>
              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - En la sala de procedimiento, la enfermera le aplicara al paciente un spray anestésico para la garganta. 
                    </li>
                    <li>
                      - Una vez acostado sobre la camilla, con el pecho descubierto, le colocarán unos electrodos en el pecho para visualizar el electrocardiograma durante el estudio. Es posible que, además, la enfermera le inyecte una medicación con efecto sedante en una vena de los brazos. 
                    </li>
                    <li>
                      - A continuación, el cardiólogo colocará la sonda dentro de la boca del paciente y le pedirá que trague para introducirla en el esófago, lo que puede provocar algunas náuseas que desaparecerán una vez que la sonda esté dentro. 
                    </li>
                    <li>
                      - Posteriormente, se realizará el estudio, durante el cual, si se ha administrado el sedante, el paciente estará tan relajado que puede llegar incluso a dormirse. Al levantarse, puede sentir cierta sensación de mareo.
                    </li>
                    <li>
                      - El anestésico de la garganta puede producir tos y el spray resultar algo amargo. Al extraer la sonda es conveniente toser para sacar las flemas que se hayan podido retener.
                    </li>
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <ul class="general">
                    <li>
                      - No se debe tomar ningún alimento hasta pasadas unas 2 horas después de la exploración. 
                    </li>
                    <li>
                      - No es aconsejable conducir en las siguientes 2-4 horas del estudio si se ha recibido el sedante por vena. 
                    </li>
                    <li>
                      - Las personas de edad avanzada deben estar acompañadas durante las siguientes 2-4 horas. 
                    </li>
                    <li></li>
                  </ul>
              </div>

          </div>



          <!-- Informacion Electrocardiograma -->
          <div id="proce3" class="cuadro">
            <h3>¿Qué es?</h3>

            <p>
            Es una prueba diagnóstica que ofrece una imagen en movimiento del corazón mediante ultrasonidos, aportando información acerca de la forma, tamaño, función, fuerza del corazón, movimiento y grosor de sus paredes y el funcionamiento de sus válvulas. Además, puede aportar información de la circulación pulmonar y sus presiones, la porción inicial de la aorta y ver si existe líquido alrededor del corazón (derrame pericárdico).
            </p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - No se requiere ninguna preparación especial para un ecocardiograma transtorácico estándar. 
                </li>
                <li>
                  - Puede comer, beber y tomar medicamentos como lo haría normalmente.
                </li>
                
              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Se aplica un gel conductor bien sobre el pecho desnudo del paciente o directamente sobre el transductor. Se coloca el transductor sobre el pecho del paciente, generalmente sobre el lado izquierdo del mismo. El cardiólogo moverá el transductor por el pecho del paciente para ir obteniendo diferentes imágenes.  
                    </li>
                    <li>
                      - La prueba suele durar entre 15 y 30 minutos, aunque en ocasiones puede prolongarse.
                    </li>
                    <li>
                      - El ecocardiograma no es doloroso (puede sentir una ligera presión por el transductor) ni produce ningún efecto secundario. 
                    </li>
                    <li>
                      - Puede realizarse a mujeres embarazadas sin ningún perjuicio para el bebé, ya que es una prueba que no emite radiación. 
                    </li>
                    <li>
                      - Durante el estudio es posible que se escuche algún ruido que corresponda a la velocidad de la sangre dentro del corazón.
                    </li>
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Podrá incorporarse a sus tareas laborales o domésticas diarias con normalidad. 
                    </li>
                    
                    <li></li>
                  </ul>
              </div>

          </div>



          <div id="proce4" class="cuadro">
            <h3>¿Qué es?</h3>

            <p>
            Es una prueba diagnóstica para evaluar la capacidad de oxigenación del corazón ante la actividad física del paciente. Se realiza un registro en computador de la actividad eléctrica cardiaca mientras el paciente camina sobre una cinta sin fin. Una prueba de esfuerzo se realiza para determinar las causas de dolor en la región del tórax anterior, la capacidad de ejercicio del corazón, los niveles de ejercicio apropiados en aquellos que inician un programa de ejercicios y para identificar los trastornos del ritmo cardiaco durante el mismo.
            </p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - El paciente no debe consumir alimentos, fumar, tomar cafeína, ni bebidas alcohólicas cuatro horas antes del examen, tampoco deberá llevar a cabo actividad física intensa o ejercicio inhabitual en las 12 horas previas.
                <li>
                  - Debe asistir con un acompañante.
                </li>
                <li>
                  - Usar ropa para realizar ejercicio. 
                </li>
                <li>
                  - El personal médico le informara si es necesario o no suspender la medicación antes de la prueba.
                </li>

              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - La auxiliar de enfermería le limpiará con alcohol las zonas de la piel donde se le colocarán los electrodos, los cuales se conectan a un electrocardiógrafo que registra la actividad eléctrica del corazón. Además, le pondrán un manguito de presión alrededor del brazo para monitorearle la presión arterial durante la prueba. 
                    </li>
                    <li>
                      - El médico cardiólogo registrará su presión arterial y su pulso. También registrará la actividad eléctrica del corazón antes de que comience a hacer ejercicio.  
                    </li>
                    <li>
                      - Llevará puestos los electrodos durante el ejercicio y durante unos 10 minutos después del ejercicio.
                    </li>
                    <li>
                      - Durante la prueba, le pedirán que camine sobre una cinta sin fin. Cada 2 o 3 minutos, el médico aumentará la velocidad y la pendiente de la cinta sin fin, para simular la sensación de caminar cuesta arriba. El médico tratará de detectar cambios en el trazado del electrocardiograma y en los niveles de presión arterial, lo cual podría indicar que el corazón no está recibiendo suficiente oxígeno. 
                    </li>
                    <li>
                      - Si durante el procedimiento el paciente experimenta dolor en el pecho, falta de aire, mareo, palidez, sudoración fría o náuseas debe decírselo urgentemente al médico.
                    </li>
                    <li>
                     - Al finalizar la prueba, el médico le indicará una fase de relajación durante la cual le pedirá que se siente y descanse. 
                    </li>
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Podrá incorporarse a sus tareas laborales o domésticas diarias con normalidad.
                    </li>
                    
                    <li></li>
                  </ul>
              </div>

          </div>



          
          <div id="proce5" class="cuadro">
            <h3>¿Qué es?</h3>

            <p>
            Es una prueba diagnóstica, realizada con un dispositivo que registra los ritmos cardíacos en forma continua. Se lleva puesto de 24 a 48 horas durante la actividad normal.
            </p>

            <h3>Cómo prepararse</h3>
              <ul class="general">
                <li>
                  - Ducharse antes de colocar el equipo, ya que no podrá bañarse mientras tenga el equipo.
                <li>
                  - El paciente debe rasurar el área del pecho en caso necesario, no debe aplicar ningún tipo de loción, gel, crema, perfume ni talco en el tórax.
                </li>
                <li>
                  - Asistir con ropa cómoda (la blusa o camisa debe ser amplia).
                </li>
                <li>
                  - No requiere ayuno para este examen.
                </li>
                <li>
                  - Conocer el nombre de los medicamentos que está tomando y si es posible presentar la fórmula actualizada.
                </li>

              </ul>

              <div class=""><br><br>
                  <h3>Durante el procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Este examen es indoloro. Sin embargo, es posible que algunas personas deban rasurarse el vello del tórax para que los electrodos se puedan pegar.
                    </li>
                    <li>
                      - El monitor de registro se tiene que mantener cerca al cuerpo. Esto puede dificultarle conciliar el sueño. 
                    </li>
                    <li>
                      - Ocasionalmente puede haber una reacción de la piel incómoda a los electrodos pegajosos. 
                    </li>
                    
                  </ul>
              </div>


              <div class=""><br><br>
                  <h3>Después del procedimiento</h3>
                  <ul class="general">
                    <li>
                      - Podrá incorporarse a sus tareas laborales o domésticas diarias con normalidad.
                    </li>
                    
                    <li></li>
                  </ul>
              </div>

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




          $('.procedimientos').on('click', 'li', function() {

            

          
                $('.procedimientos li.active').removeClass('active');
                $(this).addClass('active');

                var Id =  this.getAttribute("id");

                if(Id == 'l1'){
                  
                  $('#proce2').hide('fast');
                  $('#proce3').hide('fast');
                  $('#proce4').hide('fast');
                  $('#proce5').hide('fast');

                  $('#electrocardiograma').show('fast');
                  

                }else if(Id == 'l2'){
                  
                  $('#electrocardiograma').hide('fast');
                  $('#proce3').hide('fast');
                  $('#proce4').hide('fast');
                  $('#proce5').hide('fast');

                  $('#proce2').show('fast');

                }else if(Id == 'l3'){
                  
                  $('#electrocardiograma').hide('fast');
                  $('#proce2').hide('fast');
                  $('#proce4').hide('fast');
                  $('#proce5').hide('fast');

                  $('#proce3').show('fast');

                }else if(Id == 'l4'){
                  
                  $('#electrocardiograma').hide('fast');
                  $('#proce2').hide('fast');
                  $('#proce3').hide('fast');
                  $('#proce5').hide('fast');

                  $('#proce4').show('fast');

                }else if(Id == 'l5'){
                  
                  $('#electrocardiograma').hide('fast');
                  $('#proce2').hide('fast');
                  $('#proce3').hide('fast');
                  $('#proce4').hide('fast');

                  $('#proce5').show('fast');

                }





               
          });


          




        });
    </script>
</body>
</html>