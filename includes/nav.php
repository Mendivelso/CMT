<?php


	function nav($Id=""){

		$nav = '';



		if ($Id == 1 ) {

			$nav= '

				<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"><img src="front/img/logo-236x80.jpg" class="logoazul" alt="logo azul"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">

				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="nosotros/">Nosotros</a></li>
				        <li><a href="servicios/">Servicios</a></li>
				        <li><a href="contacto/">Contáctenos</a></li>
				        <li><a href="articulos/">Artículos</a></li>
				        <li><a href="#">Nuestros Clientes</a></li>
				        <li>
				          <ul id="redes">
				            <li><a href=""><img src="front/img/logo_facebook-03-03.png"></a></li>
				            <li><a href=""><img src="front/img/logo_twitter-03.png"></a></li>
				            <li><a href=""><img src="front/img/logo_twitter-03.png"></a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>




			';




		}elseif ($Id == 2) {
			$nav= '

				<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="../"><img src="../front/img/logo-236x80.jpg" class="logoazul" alt="logo azul"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">

				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="../nosotros/">Nosotros</a></li>
				        <li><a href="../servicios/">Servicios</a></li>
				        <li><a href="../contacto/">Contáctenos</a></li>
				        <li><a href="../articulos/">Artículos</a></li>
				        <li><a href="#">Nuestros Clientes</a></li>
				        <li>
				          <ul id="redes">
				            <li><a href=""><img src="../front/img/logo_facebook-03-03.png"></a></li>
				            <li><a href=""><img src="../front/img/logo_twitter-03.png"></a></li>
				            <li><a href=""><img src="../front/img/logo_twitter-03.png"></a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>




			';
		}elseif ($Id == 3) {
			$nav= '

				<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"><img src="front/img/logo-236x80.jpg" class="logoazul" alt="logo azul"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">

				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="../nosotros/">Nosotros</a></li>
				        <li><a href="../servicios/">Servicios</a></li>
				        <li><a href="../contacto/">Contáctenos</a></li>
				        <li><a href="../articulos/">Articulos</a></li>
				        <li><a href="../clientes/">Nuestros Clientes</a></li>
				        <li>
				          <ul id="redes">
				            <li><a href=""><img src="front/img/logo_facebook-03-03.png"></a></li>
				            <li><a href=""><img src="front/img/logo_twitter-03.png"></a></li>
				            <li><a href=""><img src="front/img/logo_twitter-03.png"></a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>




			';
		}


		echo $nav;





	}






 ?>