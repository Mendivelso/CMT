<?php


	function footer($Id=""){

		$footer = "";

		if ($Id==1) {

			$footer = '


				<div class="container-fluid EspacioLibre">

				</div>

				<footer class="container-fluid text-center">

				  <div class="row text-center">
				    <img src="front/img/logopie.png" class="logoPie">
				  </div>
				  <div class="row">
				    <ul>
				      <li><a href="nosotros/">NOSOTROS</a></li>
				      <li><a href="servicios/">SERVICIOS</a></li>
				      <li><a href="contacto/">CONTACTENOS</a></li>
				      <li><a href="articulos/">CLIENTES</a></li>
				    </ul>
				  </div>

				</footer>



			';
		}elseif ($Id == 2 ) {
			$footer = '


				<div class="container-fluid EspacioLibre">

				</div>

				<footer class="container-fluid text-center">

				  <div class="row text-center">
				    <a href="../"><img src="../front/img/logopie.png" class="logoPie"></a>
				  </div>
				  <div class="row">
				    <ul>
				      <li><a href="../nosotros/">NOSOTROS</a></li>
				      <li><a href="../servicios/">SERVICIOS</a></li>
				      <li><a href="../contacto/">CONTACTENOS</a></li>
				      <li><a href="../articulos/">CLIENTES</a></li>
				    </ul>
				  </div>

				</footer>



			';
		}

		echo $footer;


	}



 ?>