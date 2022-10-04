<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
    
           


   @extends('adminlte::master')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
     <link rel="stylesheet" href="/css/admin_custom.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	   <link rel="stylesheet" href="css/estilos3.css">
     <link rel="stylesheet" href="/css/admin_custom.css">
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
@stop

@section('content_header')
@stop


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Elisur | Catalogo</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">

       <style>
		/* Make the image fully responsive */
		.carousel-inner img {
			width: 100%;
			height: 500px;
		}
	</style>


	<style>
		.all-browsers {
			margin: 0;
			padding: 5px;
			background-color: lightgray;
		}

		.all-browsers>h1,
		.browser {
			margin: 10px;
			padding: 5px;
		}

		.browser {
			background: white;
		}

		.browser>h2,
		p {
			margin: 4px;
			font-size: 90%;
		}

		footer {
			text-align: center;
			padding: 3px;
			background-color: rgb(0, 0, 0);
			color: rgb(255, 255, 255);
		}


		h1 {
			font-family: 'Times New Roman', Times, serif;
			font-size: 46px;
		}

		p {
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			font-size: 20px;
		}

		h3 {
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		}

		/* Rounded border */
		hr.rounded {
			border-top: 7px solid #bbb;
			border-radius: 2px;
		}
	</style>




</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed "   >

 <div class="relative flex items-top justify-center " >
    <div class="wrapper">
        <!-- Navbar -->
        <nav class=" navbar navbar-expand navbar-danger navbar-light">
            <!-- Left navbar links -->
           <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Servicios</a>
                </li>
                
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Redes sociales</a>
                </li>
               
		
					<li class="nav-item d-none d-sm-inline-block">
					<a href="#contacto" class="nav-link">Contacto</a>
					
				</li>

			
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>

<!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                                       
                      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                      <i class="far fa fa-user-circle "></i>  <a href="{{ route('login') }}" class="text-sm text-gray-900 dark:text-gray-900 "><FONT COLOR="black">Login</FONT></a>

                        
                    @endauth
                </div>
            @endif
                </li>
            </ul>

                 </nav>
        <!-- /.navbar -->


       


       
	


			

		<main role="main">
			<!-- Content Wrapper. Contains page content -->
			<div class="content">

				<div id="myCarousel" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://tucandesign.net/wp-content/uploads/2021/05/servicios-de-mantenimiento-para-mi-paginas-web.jpg"
								alt="" width="1100" height="500">
							<div class="carousel-caption">
								<FONT COLOR="#8D2F49">
									<h2><b>Elisur</b></h2>
								</FONT>

							</div>
						</div>
						<div class="carousel-item">
							<img src="https://blog.unex.net/sites/default/files/2020-06/portada-clima-2000px_0.jpg"
								alt="" width="1100" height="500">
							<div class="carousel-caption">
								<FONT COLOR="#8D2F49">
									<h2><b>Aire Acondicionado</b></h2>
								</FONT>
								<div class="card-body">
									<a href="{{url('solicitud_pres')}}" class="btn btn-dark btn-lg">Solicitar Presupuesto</a>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="https://www.nivianhome.com/wp-content/uploads/2017/10/Camaras.jpg" alt=""
								width="1100" height="500">
							<div class="carousel-caption">
								<FONT COLOR="#28979D">
									<h2><b>Sistema de Seguridad</b></h2>
								</FONT>
								<div class="card-body">
									<a href="{{url('solicitud_pres')}}" class="btn btn-dark btn-lg">Solicitar Presupuesto</a>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<img src="https://www.problemitelefonia.it/wp-content/uploads/2019/02/Sospensione-linea-telefonica-e1606903270548.jpg"
								alt="New York" width="1100" height="500">
							<div class="carousel-caption">
								<FONT COLOR="#712F2F">
									<h2><b>Línea Telefonica</b></h2>
								</FONT>
								<div class="card-body">
									<a href="{{url('solicitud_pres')}}" class="btn btn-dark btn-lg">Solicitar Presupuesto</a>
								</div>

							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>

				<!-- /END THE FEATURETTES -->

			</div><!-- /.container -->

			<style>
				.icon-bar {
					width: 100%;
					background-color: rgb(158, 34, 34);
					overflow: auto;
				}

				.icon-bar a {
					float: left;
					width: 33.3%;
					text-align: center;
					padding: 12px 0;
					transition: all 0.3s ease;
					color: white;
					font-size: 36px;
				}

				.icon-bar a:hover {
					background-color: rgb(219, 114, 114);
				}

				.active {
					background-color: rgb(158, 34, 34);
				}
			</style>

			<body>

				<div class="icon-bar">
					<a class="active" href="#servicios"><i class="fas fa-tools"></i>
						<h5 class="text-center whitecolor fwbold">SERVICIOS</h5>
					</a>

					<a href="#proyectos"><i class="fas fa-toolbox"></i>
						<h5 class="text-center whitecolor fwbold">PROYECTOS</h5>
					</a>
					<a href="#infoServ"><i class="far fa-file-alt"></i>
						<h5 class="text-center whitecolor fwbold">INFORMACIÓN SERVICIOS</h5>
					</a>

				</div>

	</div>

	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:65px;">
	</div>

	<div class="text-center">
		<h1 id="servicios"> SERVICIOS</h1>
		<p>ELISUR ofrece una variedad de servicios a su disposición con productos de calidad y un equipo
			altamente calificado. </p>
	</div>

	<h1></h1>
	<style>
		* {
			box-sizing: border-box;
		}

		.overlay {
			position: absolute;
			bottom: 0;
			background: rgb(0, 0, 0);
			background: rgba(0, 0, 0, 0.5);
			/* Black see-through */
			color: #a85b5b;
			width: 100%;
			transition: .5s ease;
			opacity: 0;
			color: rgb(95, 46, 46);
			font-size: 22px;
			padding: 20px;
			text-align: center;
			font-family: Merriweather, serif;
		}

		.card:hover .overlay {
			opacity: 1;
		}
	</style>
	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:50px;">
	</div>

	<div class="card-group">
		<div class="card">
			<img src="https://www.tecnoseguro.com/media/k2/items/cache/210438cfc59c1719a9deba5dc66d5c69_XL.jpg"
				width="100" height="300" class="card-img-top" alt="Avatar">
			<div class="overlay">SISTEMA DE SEGURIDAD</div>

		</div>
		<div class="card">
			<img src="https://seiprot.com/wp-content/uploads/2020/06/cctv.jpg" width="100" height="300"
				class="card-img-top" alt="...">
			<div class="overlay">MONITOREO CCTV</div>
		</div>
		<div class="card">
			<img src="https://www.fastnetworkhn.com/wp-content/uploads/PLANTA-TELEFONICA-IP-GRANDSTREAM-UCM6204.jpg"
				width="100" height="300" class="card-img-top" alt="...">
			<div class="overlay">PLANTA TELEFÓNICA</div>
		</div>
		<div class="card">
			<img src="https://homesolution.net/blog/wp-content/uploads/2019/02/carga-de-gas-para-split-aire-acondicionado-D_NQ_NP_916847-MLA26619046313_012018-F.jpeg"
				width="100" height="300" class="card-img-top" alt="...">
			<div class="overlay">AIRE ACONDICIONADO</div>
		</div>
		<div class="card">
			<img src="https://distribuidoramariscal.com.gt/wp-content/uploads/2021/06/tablayeso-f.jpg" width="100"
				height="300" class="card-img-top" alt="...">
			<div class="overlay">TABLA YESO</div>
		</div>
		<div class="card">
			<img src="https://www.reformadisimo.es/wp-content/uploads/2019/11/pintar-las-paredes-de-casa.jpg"
				width="100" height="300" class="card-img-top" alt="...">
			<div class="overlay">PINTURA</div>
		</div>
		<div class="card">
			<img src="https://www.asep.gob.pa/wp-content/uploads/2018/03/01-2-3300x2100_ELEC.jpg" width="100"
				height="300" class="card-img-top" alt="...">
			<div class="overlay">ELECTRICIDAD</div>
		</div>
	</div>


	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:100px;">
	</div>

	<div class="text-center">
		<h1 id="proyectos"> PROYECTOS</h1>
		<p>ELISUR ofrece una variedad de servicios a su disposición con productos de calidad y un equipo
			altamente calificado. </p>
	</div>

	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:50px;">
	</div>


	<style>
		body {
			font-family: 'Times New Roman', Times, serif;

		}

		* {
			box-sizing: border-box;
		}



		/* Position the image container (needed to position the left and right arrows) */
		.container {
			position: relative;
		}

		/* Hide the images by default */
		.mySlides {
			display: none;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
			cursor: pointer;
		}

		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 40%;
			width: auto;
			padding: 16px;
			margin-top: -50px;
			color: white;
			font-weight: bold;
			font-size: 30px;
			border-radius: 0 3px 3px 0;
			user-select: none;
			-webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
			background-color: rgb(247, 241, 241);
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 20px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* Container for image text */
		.caption-container {
			text-align: center;
			background-color: rgb(117, 17, 17);
			padding: 2px 16px;
			color: white;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Six columns side by side */
		.column {
			float: left;
			width: 14.2%;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
			opacity: 0.6;
		}

		.active,
		.demo:hover {
			opacity: 1;
		}
	</style>

	<body>


		<div class="container">
			<div class="mySlides">
				<div class="numbertext">1 / 7</div>
				<img src="https://www.tecnoseguro.com/media/k2/items/cache/210438cfc59c1719a9deba5dc66d5c69_XL.jpg"
					width="100%" height="400px">
			</div>

			<div class="mySlides">
				<div class="numbertext">2 / 7</div>
				<img src="https://seiprot.com/wp-content/uploads/2020/06/cctv.jpg" width="100%" height="400px">
			</div>

			<div class="mySlides">
				<div class="numbertext">3 / 7</div>
				<img src="https://www.fastnetworkhn.com/wp-content/uploads/PLANTA-TELEFONICA-IP-GRANDSTREAM-UCM6204.jpg"
					width="100%" height="400px">
			</div>

			<div class="mySlides">
				<div class="numbertext">4 / 7</div>
				<img src="https://homesolution.net/blog/wp-content/uploads/2019/02/carga-de-gas-para-split-aire-acondicionado-D_NQ_NP_916847-MLA26619046313_012018-F.jpeg"
					width="100%" height="400px"">
            </div>

            <div class=" mySlides">
				<div class="numbertext">5 / 7</div>
				<img src="https://distribuidoramariscal.com.gt/wp-content/uploads/2021/06/tablayeso-f.jpg" width="100%"
					height="400px">
			</div>

			<div class="mySlides">
				<div class="numbertext">6 / 7</div>
				<img src="https://www.reformadisimo.es/wp-content/uploads/2019/11/pintar-las-paredes-de-casa.jpg"
					width="100%" height="400px">
			</div>

			<div class="mySlides">
				<div class="numbertext">7 / 7</div>
				<img src="https://www.asep.gob.pa/wp-content/uploads/2018/03/01-2-3300x2100_ELEC.jpg" width="100%"
					height="400px">
			</div>

			<a class="prev" onclick="plusSlides(-1)">❮</a>
			<a class="next" onclick="plusSlides(1)">❯</a>

			<div class="caption-container">
				<p id="caption"></p>
			</div>

			<div class="row">
				<div class="column">
					<img class="demo cursor"
						src="https://www.tecnoseguro.com/media/k2/items/cache/210438cfc59c1719a9deba5dc66d5c69_XL.jpg"
						width="100%" height="200px" onclick="currentSlide(1)" alt="Sistema de Seguridad">
				</div>
				<div class="column">
					<img class="demo cursor" src="https://seiprot.com/wp-content/uploads/2020/06/cctv.jpg" width="100%"
						height="200px" onclick="currentSlide(2)" alt="Monitoreo CCTV">
				</div>
				<div class="column">
					<img class="demo cursor"
						src="https://www.fastnetworkhn.com/wp-content/uploads/PLANTA-TELEFONICA-IP-GRANDSTREAM-UCM6204.jpg"
						width="100%" height="200px" onclick="currentSlide(3)" alt="Planta telefónica">
				</div>
				<div class="column">
					<img class="demo cursor"
						src="https://homesolution.net/blog/wp-content/uploads/2019/02/carga-de-gas-para-split-aire-acondicionado-D_NQ_NP_916847-MLA26619046313_012018-F.jpeg"
						width="100%" height="200px" onclick="currentSlide(4)" alt="Aire Acondicionado">
				</div>
				<div class="column">
					<img class="demo cursor"
						src="https://distribuidoramariscal.com.gt/wp-content/uploads/2021/06/tablayeso-f.jpg"
						width="100%" height="200px" onclick="currentSlide(5)" alt="Tabla Yeso">
				</div>
				<div class="column">
					<img class="demo cursor"
						src="https://www.reformadisimo.es/wp-content/uploads/2019/11/pintar-las-paredes-de-casa.jpg"
						width="100%" height="200px" onclick="currentSlide(6)" alt="Pintura">
				</div>
				<div class="column">
					<img class="demo cursor"
						src="https://www.asep.gob.pa/wp-content/uploads/2018/03/01-2-3300x2100_ELEC.jpg" width="100%"
						height="200px" onclick="currentSlide(7)" alt="Electricidad">
				</div>
			</div>
		</div>

		<script>
			let slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				let i;
				let slides = document.getElementsByClassName("mySlides");
				let dots = document.getElementsByClassName("demo");
				let captionText = document.getElementById("caption");
				if (n > slides.length) { slideIndex = 1 }
				if (n < 1) { slideIndex = slides.length }
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				captionText.innerHTML = dots[slideIndex - 1].alt;
			}
		</script>

	</body>

	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:100px;">
	</div>
	<div class="text-center">
		<h1 id="infoServ">INFORMACIÓN DE SERVICIOS</h1>
		
		<p>ELISUR ofrece una variedad de servicios a su disposición con productos de calidad y un equipo
			altamente calificado. </p>
	</div>


	<style>
		* {
			box-sizing: border-box
		}

		/* Style the tab */
		.tab {
			float: left;
			border: 1px solid #ccc;
			background-color: rgb(158, 34, 34);
			width: 27%;
			height: 488px;
		}

		/* Style the buttons inside the tab */
		.tab button {
			display: block;
			background-color: inherit;
			color: rgb(252, 248, 248);
			padding: 17.5px 16px;
			width: 100%;
			border: none;
			outline: none;
			text-align: left;
			cursor: pointer;
			font-size: 20px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current "tab button" class */
		.tab button.active {
			background-color: rgb(219, 114, 114);
		}

		/* Style the tab content */
		.tabcontent {
			float: left;
			padding: 0px 12px;
			border: 1px solid rgb(98, 82, 82);
			width: 70%;
			border-left: none;
			height: 488px;
			display: none;
		}

		/* Clear floats after the tab */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
	</style>

	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:50px;">
	</div>

	<div class="tab">
		<button class="tablinks" onmouseover="openCity(event, 'Sistema de Seguridad')">Sistema de Seguridad</button>
		<button class="tablinks" onmouseover="openCity(event, 'Monitoreo CCTV')">Monitoreo
			CCTV</button>
		<button class="tablinks" onmouseover="openCity(event, 'Planta Telefónica')">Planta
			Telefónica</button>
		<button class="tablinks" onmouseover="openCity(event, 'Aire Acondicionado')">Aire
			Acondicionado</button>
		<button class="tablinks" onmouseover="openCity(event, 'Tabla Yeso')">Tabla Yeso</button>
		<button class="tablinks" onmouseover="openCity(event, 'Pintura')">Pintura</button>
		<button class="tablinks" onmouseover="openCity(event, 'Electricidad')">Electricidad</button>

	</div>

	<div id="Sistema de Seguridad" class="tabcontent">
		<div class="text-center">
		<h3><b>Sistema de Seguridad</b></h3>
		</div>
		<p>Los sistemas de seguridad son grupos de elementos instalados e intercomunicados entre sí que previenen,
			detectan o actúan ante intrusiones, intentos de robos y otros eventos como incendios.</p>
	</div>

	<div id="Monitoreo CCTV" class="tabcontent">
		<div class="text-center">
		<h3><b>Monitoreo CCTV</b></h3>
		</div>
		<p>Un sistema CCTV o Circuito Cerrado de Televisión funciona tras la instalación de un sistema de cámaras de
			seguridad que permiten comprobar desde otra ubicación (en forma remota), el funcionamiento o el estado
			de un lugar..</p>
	</div>

	<div id="Planta Telefónica" class="tabcontent">
		<div class="text-center">
			<h3><b>Planta Telefónica</b></h3>
			</div>
		<p>Las Plantas Telefónicas, también conocidas como Centrales, son equipos de comunicaciones que permiten
			interconectar diferentes grupos de teléfonos, también conocidos como Extensiones, dentro de su oficina,
			casa o empresa..</p>
	</div>

	<div id="Aire Acondicionado" class="tabcontent">
		<div class="text-center">
		<h3><b>Aire Acondicionado</b></h3>
		</div>
		<p>Una de las formas más eficaces de disminuir la temperatura al interior, y probablemente la más popular,
			es con un aparato de aire acondicionado.

			Como su nombre lo indica, el aire acondicionado es un mecanismo eléctrico que acondiciona el aire de una
			habitación..</p>
	</div>

	<div id="Tabla Yeso" class="tabcontent">
		<div class="text-center">
		<h3><b>Tabla Yeso</b></h3>
		</div>
		<p>Es el principal material utilizado en paredes divisorias o tabicaciones, su variedad permiten la
			realización de diseños que posiblemente con un sistema tradicional serían imposibles o económicamente
			muy costosos..</p>
	</div>

	<div id="Pintura" class="tabcontent">
		<div class="text-center">
		<h3><b>Pintura</b></h3>
		</div>
		<p>Haz combinaciones de color como la desees.</p>
	</div>

	<div id="Electricidad" class="tabcontent">
		<div class="text-center">
			<h3><b>Electricidad</b></h3>
		</div>

		<p>La electricidad es el conjunto de fenómenos físicos relacionados con la presencia y flujo de cargas
			eléctricas. Se manifiesta en una gran variedad de fenómenos como los rayos, la electricidad estática, la
			inducción electromagnética o el flujo de corriente eléctrica..</p>
	</div>


	<div class="clearfix"></div>

	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>


	<nav class="navbar navbar-expand navbar-white navbar-light">

		<ul class="navbar-nav ml-auto">
			<div class="justify-content-end">
				<a href="{{url('solicitud_pres')}}" class="btn btn-outline-danger btn-lg">Solicitar Presupuesto</a>
			</div>
			
		</ul>
	</nav>

	<div class="container-fluid" style="background-color:#ffffff;color:rgb(255, 255, 255);height:50px;">
	</div>


	<style>
		body {
		  font-family: 'Times New Roman', Times, serif;
		  font-size: 17px;
		}
	
		#myBtn {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  font-size: 18px;
		  border: none;
		  outline: none;
		  background-color: rgb(158, 34, 34);
		  color: white;
		  cursor: pointer;
		  padding: 15px;
		  border-radius: 4px;
		}
	
		#myBtn:hover {
		  background-color: #555;
		}
	  </style>
	</head>
	
	<body>
	
	  <button onclick="topFunction()" id="myBtn" title="Go to top">Inicio</button>
	  <script>
		//Get the button
		var mybutton = document.getElementById("myBtn");
	
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () { scrollFunction() };
	
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
	
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	  </script>
	
	</body>










	<footer class="row row-cols-5 ">

		<div class="col">

		</div>

		<div class="col">
			<h5>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Servicios</font>

				</font>
			</h5>

			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Sistema de Seguridad</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Monitoreo CCTV</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Planta telefónica</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Aire Acondicionado</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Tabla Yeso</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Pintura</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Electricidad</font>
						</font>
					</a></li>
			</ul>
		</div>

		<div class="col">
			<h5>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Sobre Nosotros</font>
				</font>
			</h5>
			<ul class="nav flex-column">

				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Quienes somos</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a href="{{url('solicitud_pres')}}" class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Solicitud Presupuesto</font>
						</font>
					</a></li>
			</ul>
		</div>

		<div class="col">
			<h5>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Contáctenos</font>
				</font>
			</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a id="contacto" class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Harold Ordoñez</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">elisurhn@gmail.com</font>
						</font>
					</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Tel. 2234-8736</font>
						</font>
					</a></li>
			</ul>
		</div>
	</footer>

	</div>

	</main>


	<style>
		/* width */
		::-webkit-scrollbar {
		  width: 20px;
		}
		
		/* Track */
		::-webkit-scrollbar-track {
		  box-shadow: inset 0 0 5px grey; 
		  border-radius: 10px;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: rgb(97, 80, 80); 
		  border-radius: 10px;
		}
		
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: rgb(158, 34, 34);; 
		}
		</style>


	</div>
	<!-- /.col-md-6 -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	</div>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->


	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="plugins/moment/moment.min.js"></script>
	<script src="plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
</body>

</html>