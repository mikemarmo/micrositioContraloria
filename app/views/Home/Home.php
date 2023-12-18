<?php defined('BASEPATH') or exit('No se permite acceso directo'); ?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Inicio</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="Página de inicio">
	  <meta name="author" content="Departamento de planeación">
	  
	  <!-- Fuentes personalizadas para esta página -->
	  <link href="<?= PATH_CSS.'all.min.css' ?>" rel="stylesheet" type="text/css">
	  <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	  -->
	 
	  <!-- Hojas de estilo CSS para la pagina-->
	  <link href="<?= PATH_CSS.'freelancer.min.css' ?>" rel="stylesheet">
	  <!-- Icono pestaña de página-->
	  <link rel="shortcut icon" href="<?= PATH_IMAGES.'contraloria_icono.png' ?>"/>
	</head>
  
	<body id="page-top">
		<!-- Barra de Opciones -->
		<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
			<div> 
				<img src="<?= PATH_IMAGES.'uprr.JPG' ?>" width="90" height="50" alt="">
			</div>
			<div class="container">
				<!--<a class="navbar-brand js-scroll-trigger" href="#page-top">UPRR</a>-->
				<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#quienesomos">Conócenos</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Marconomrativo">Marco Normativo</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#capacitacion">Capacitación</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#descargas">Descargas</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#difusion">Difusión</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#directorio">Directorio</a>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#denuncias">Denuncias y Quejas</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Seccion Principal -->
		<header class="masthead bg-primary text-white text-center">
			<div class="container d-flex align-items-center flex-column">

				<!-- Avatar de Seccion principal
				<img class="masthead-avatar mb-5" src="contraloria.PNG" alt=""> -->
				<img src="<?= PATH_IMAGES.'contraloria.PNG' ?>" alt="">

				<!-- Titulo de seccion principal 
				<h1 class="masthead-heading text-uppercase mb-0">Contraloría Social</h1>
				-->
				<!-- Divisor de icono -->
				<div class="divider-custom divider-light">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>	
						</div>
					<div class="divider-custom-line"></div>
				</div>
			
				<!-- Pie de seccion principal-->
				<p class="masthead-subheading font-weight-light mb-0">Universidad Politécnica de la Región Ribereña</p>
			</div>
		</header>

		<!-- Seccion de Quiénes somos -->
		<section class="page-section portfolio" id="quienesomos">
			<div class="container">
				<!-- Cabecera de portafolio -->
				<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">¿Quiénes somos?</h2>
				<!-- Icon para divición -->
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>

				<!-- Contenido de la Sección Conocenos -->
				<div class="row">
					<div>
						<p class="lead">La Contraloría Social es un conjunto coordinado de 
											actividades de supervisión, seguimiento y evaluación 
											llevadas a cabo por individuos de manera organizada 
											e independiente, dentro de un marco de derechos y 
											responsabilidades ciudadanas.</p>
						<p class="lead">Objetivo: Contribuir a que la administración gubernamental y la 
											utilización de los recursos públicos se lleven a cabo 
											con transparencia, eficacia, legalidad y honestidad. 
											Además, busca demandar que los líderes rindan cuentas 
											por sus acciones.</p>
					</div>
				</div>
				<div class="row">
					<div>
						<p class="lead">Comité:</p>
						<p class="lead">Los comités representan estructuras 
											sociales creadas por aquellos que se benefician 
											de los programas de desarrollo social bajo la 
											responsabilidad de las dependencias y entidades 
											de la Administración Pública Federal. 
											Estos comités tienen la función de llevar a cabo 
											el seguimiento, supervisión y vigilancia de la 
											implementación de dichos programas.</p>
						<p class="lead">Objetivo del Comité: La finalidad principal del Comité de Contraloría 
											Social es fomentar una cultura activa de 
											participación ciudadana en la supervisión y 
											correcta utilización de los recursos asignados a 
											la institución educativa. Esto se realiza con el 
											propósito de fortalecer la implementación de 
											prácticas transparentes y la rendición de cuentas.</p>
					</div>	
				</div>
				<!-- /fin de Contenido -->
			</div>
		</section>	

		<!-- Sección Marco normativo -->
		<section class="page-section portfolio bg-primary text-white mb-0" id="Marconomrativo">
			<div class="container">
			<!--Cabecera Marco Normativo -->
				<h2 class="page-section-heading text-center text-uppercase text-white">Marco Normativo</h2>

				<!-- Icon Divider -->
				<div class="divider-custom divider-light">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>
				<!-- Contenido de capcaitacion -->
				<div class="row">
					<div class="col-lg-18">
						<p class="display-0">Se presentan las Reglas de Operación y
										Lineamientos para la promoción y operación de 
										la Contraloría Social en los programas federales 
										de desarrollo social, emitidos por la Secretaría 
										de la Función Pública (SFP). Seleccione la opción
										a visualizar.
						</p>
						<br>
					</div>
				</div>

				<!-- Sección de cuadricula para articulos de capacitación -->
				<div class="row">
					<!-- Articulo 1 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#reglasOperacion">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/ReglasOp.png' ?>" alt="">
						</div>
					</div>
				
					<!-- Articulo 2 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#lineamientos">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/Lineamientos.png' ?>" alt="">
						</div>
					</div>
				</div>
				<!-- /.filas -->
			</div>
		</section>
	
		<!-- Seccion de Capacitación -->
		<section class="page-section portfolio" id="capacitacion">
			<div class="container">

				<!-- Cabecera de Capacitación -->
				<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Capacitación</h2>

				<!-- Icon para divición -->
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>

				<!-- Contenido de capcaitacion -->
				<div class="row">
					<div class="col-lg-18">
						<p class="display-0">Capacitación orientativa sobre el uso y funcionamiento del
										Sistema Informático de Contraloría Social (SICS) 
										realizados por la Secretaría de la Función Pública.</p>
						<br>
					</div>
				</div>

				<!-- Sección de cuadricula para articulos de capacitación -->
				<div class="row">
					<!-- Articulo 1 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#youtube1">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/RTecnicos.png' ?>" alt="">
						</div>
					</div>
				
					<!-- Articulo 2 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#pdf1">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/INormativa.png' ?>" alt="">
						</div>
					</div>
					
					<!-- Articulo 3 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#youtube2">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/IEjecutadora.png' ?>" alt="">
						</div>
					</div>
				</div>
				<!-- /.filas -->
			</div>
		</section>	
	
		<!-- Sección Descargas -->
		<section class="page-section bg-primary text-white mb-0" id="descargas">
			<div class="container">
			<!--Cabecera Descargas-->
				<h2 class="page-section-heading text-center text-uppercase text-white">Documentos y Formatos</h2>
				<!-- Icon Divider -->
				<div class="divider-custom divider-light">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>

				<!-- Sección de cuadricula para Desacargas-->
				<div class="row">
					<!-- Articulo 1 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<p class="display-0  text-center"><strong>Documentos:</strong></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Doc1EsquemaContraloria2023.pdf' ?>" target="_blank" style="color:white">
							ESQUEMA DE CONTRALORÍA SOCIAL</a></p>	
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Doc2GuiaOperativa2023.pdf' ?>" target="_blank" style="color:white">
							GUIA OPERATIVA</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Doc3PATCS2023.pdf' ?>" target="_blank" style="color:white">
							PROGRAMA ANUAL DE TRABAJO DE CONTRALORÍA SOCIAL (PATCS) </a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'ProgramaDeTrabajo.pdf' ?>" target="_blank" style="color:white">
							PROTRAMA INSTITUCIONAL DE TRABAJO (PITCS)</a></p>
					</div>
				
					<!-- Articulo 2 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<p class="display-0  text-center"><strong>Descargar Formatos:</strong></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo2.pdf' ?>" target="_blank" style="color:white">
							MINUTA DE REUNIÓN DE CONTRALORÍA SOCIAL 2023</a></p>	
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo3.pdf' ?>" target="_blank" style="color:white">
							ACTA DE CONSTITUCIÓN DEL COMITÉ DE CONTRALORÍA SOCIAL 2023</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo4.pdf' ?>" target="_blank" style="color:white">
							ACTA DE SUSTITUCIÓN DE INTEGRANTE(S) DEL COMITÉ DE LA CONTRALORÍA SOCIAL 2023</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo5.pdf' ?>" target="_blank" style="color:white">
							SOLICITUD DE INFORMACIÓN DE CONTRALORÍA SOCIAL 2023</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo6.pdf' ?>" target="_blank" style="color:white">
							INFORME DEL COMITÉ DE CONTRALORÍA SOCIAL 2023</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo7.pdf' ?>" target="_blank"style="color:white">
							CÉDULA DE QUEJAS Y DENUNCIAS 2023</a></p>
						<p class="text-center">
						<a href="<?= PATH_DOCUMENTS.'Anexo8.pdf' ?>" target="_blank" style="color:white">
							CÉDULA DE QUEJAS Y DENUNCIAS 2023</a></p>
						
					</div>
				</div>
				<!-- /.filas -->
			</div>
		</section>
	
		<!-- Seccion de Difusion -->
		<section class="page-section portfolio" id="difusion">
			<div class="container">
				<!-- Cabecera de Difusión -->
				<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Convocatorias</h2>
				<!-- Icon para divición -->
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>
				<!-- Contenido de difusión -->
				<div class="row">
					<div class="col-lg-18">
						<p class="display-0">Convocatorias vigentes para la Contraloría social 
											de la Universidad Politécnica de la Región Ribereña y 
											Material de difusión de la Contraloría Social para 
											PRODEP.
						</p>
						<br>
					</div>
				</div>
				
				<!-- Sección de cuadricula para articulos de capacitación -->
				<div class="row">
					<!-- Articulo 1 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#convocatoriaUPRR">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/Convocatoria.png' ?>" alt="">
						</div>
					</div>
					<!-- Articulo 2 de capacitacion -->
					<div class="col-md-9 col-lg-6">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#difusionPRODEP">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="<?= PATH_IMAGES.'portfolio/Difusion.png' ?>" alt="">
						</div>
					</div>
				</div>
				

				
			
			</div>
		</section>

		<!-- Sección Directorio -->
		<section class="page-section portfolio bg-primary text-white mb-0" id="directorio">
			<div class="container">
			<!--Cabecera Directorio-->
				<h2 class="page-section-heading text-center text-uppercase text-white">Directorio</h2>
				<!-- Icon Divider -->
				<div class="divider-custom divider-light">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>

				<!-- Sección de cuadricula para Desacargas-->
				<div class="row" border=>
					<!-- Articulo 1 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<p class="display-0  text-center"><strong>Enlace Contraloria Social:</strong></p>
						<p class="text-center">
						</p>	
						<p class="text-center">
							<i class="fa fa-user"></i> Lic. Georgina Peña Matínez - Enlace de Contraloría Social
						</p>
						
						<p class="text-center">
							<i class="fa fa-phone-square"></i> (897) 972-3680 ext. 104
						</p>
						<p class="text-center">
							<i class="fa fa-envelope"></i> pena.martinez.g@uprr.edu.mx
						</p>
					</div>
				
					<!-- Articulo 2 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#directorioOEC">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<p class="display-0  text-center"><strong>Responsables de la Contraloría Social en el Órgano Estatal de Control (OEC)</strong></p>		
						</div>
					</div>
					
					<!-- Articulo 3 de capacitacion -->
					<div class="col-md-6 col-lg-4">
						<p class="display-0  text-center"><strong>Subdirecció Contraloria Social:</strong></p>
						<p class="text-center">
						</p>	
						<p class="text-center">
							<i class="fa fa-user"></i> Actuaria Sonia Tapia García - Subdirectora de Evaluación y Responsable de Contraloría Social.
							<br>
							<i class="fa fa-phone-square"></i> 553-601-1610 ext. 67151
							<br>
							<i class="fa fa-envelope"></i> stapia@nube.sep.gob.mx
							<br>
							Atención personal previa cita.
						</p>
						<p class="text-center">
							<i class="fa fa-user"></i> Lic. María Salomé Cedillo Villar - Jefe de Departamento de Análisis y Tratamiento de la Información.
							<br>
							<i class="fa fa-tty"></i> 553-601-1600 ext. 67153
							<br>
							<i class="fa fa-envelope"></i> salome.cedillo@nube.sep.gob.mx
							<br>
							Atención personal previa cita.
						</p>						
						<p class="text-center">
							<i class="fa fa-map-marker"></i> 
							Direccion Av. Universidad 1200, 3er piso Sección 22, Col. Xoco, C.P. 03330 Ciudad de México, CDMX 					
						</p>
					</div>
				</div>
				<!-- /.filas -->
			</div>
		</section>

		<!-- Seccion de Denuncias y Quejas -->
		<section class="page-section portfolio" id="denuncias">
			<div class="container">
				<!-- Cabecera de Denuncias -->
				<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Atención a quejas y Denuncias</h2>
				<!-- Icon para divición -->
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
						<div class="divider-custom-icon">
							<i class="fas fa-star"></i>
						</div>
					<div class="divider-custom-line"></div>
				</div>
				<!-- Sección de cuadricula para Denuncias-->
				<div class="row" border=>
					<!-- Articulo 1 de Denuncias -->
					<div class="col-md-6 col-lg-4">
						<p class="display-0  text-center"><strong>Enlace Contraloria Social:</strong></p>
						<p class="text-center">
						</p>	
						<p class="text-center">
							<i class="fa fa-user"></i> Lic. Georgina Peña Matínez - Enlace de Contraloría Social
						</p>
						
						<p class="text-center">
							<i class="fa fa-phone-square"></i> (897) 972-3680 ext. 104
						</p>
						<p class="text-center">
							<i class="fa fa-envelope"></i> pena.martinez.g@uprr.edu.mx
						</p>
					</div>
				
					<!-- Articulo 2 de Denuncias -->
					<div class="col-md-6 col-lg-4">

						<p class="display-0  text-center"><strong>Subdirecció Contraloria Social:</strong></p>
						<p class="text-center">
						</p>	
						<p class="text-center">
							<i class="fa fa-user"></i> Actuaria Sonia Tapia García - Subdirectora de Evaluación y Responsable de Contraloría Social.
						</p>
						<p class="text-center">
							<i class="fa fa-phone-square"></i> 553-601-1610 ext. 67151
						</p>
						<p class="text-center">
							<i class="fa fa-envelope"></i> quejas_denuncias.prodep@nube.sep.gob.mx
							
						</p>					
						
					</div>
					
					<!-- Articulo 3 de Denuncias -->
					<div class="col-md-6 col-lg-4">
						<p class="display-0  text-center"><strong>Atención ciudadana SFP:</strong></p>
						<p class="text-center">
						</p>	
						<p class="text-center">
							<i class="fa fa-map-marker"></i> Av. Insurgentes Sur #1735, P.B. M+odulo 3 Col. Guadalupe Inn, Delegación Álvaro Obregón C.P. 01020, México, D.F.
						</p>
						<p class="text-center">
							<i class="fa fa-phone-square"></i> 01-800-112-8700
						</p>
						<p class="text-center">
							<i class="fa fa-envelope"></i> contactociudadano@funcionpublica.gob.mx
						</p>						
					</div>
				</div>
				<!-- /.filas -->
				<!-- /fin de Contenido -->
			</div>
		</section>	
	
		<!-- Sección de derechos reservados -->
		<section class="copyright py-4 text-center text-white">
			<div class="container">
				<small>Este programa es público ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa. Quien haga uso indebido de los recursos de este programa deberá ser denunciado y sancionado con la ley aplicable y ante la autoridad competente</small>
			</div>
		</section>
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<!-- Portafolio Youtube 1 -->
		<div class="portfolio-modal modal fade" id="youtube1" tabindex="-1" role="dialog" aria-labelledby="youtube1Label" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<!-- Portafolio youtube1 - Título -->
									<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Videoteca</h2>
									<!-- Icono divisor -->
									<div class="divider-custom">
										<div class="divider-custom-line"></div>
										<div class="divider-custom-icon">
											<i class="fas fa-star"></i>
										</div>
										<div class="divider-custom-line"></div>
									</div>
									<!-- Portafolio youtube1 - VIDEO -->
									<iframe width="560" height="350" src="https://youtu.be/s8N_pT8v5hM" frameborder="0"></iframe>
									
									<!-- Portafolio Youtube1 - Texto -->
									<p class="mb-5">SICS Capacitación: Aspectos Técnicos
													<br>En caso de fallas en la visualización presionar el botón IR A VIDEO
									
									</p>
									<!-- Botón Portafolio Youtube1 -->
									<div class="text-center mt-4">
										<a class="btn btn-xl btn-outline-dark" href="https://youtu.be/s8N_pT8v5hM" target="_blank">
											<i class="fa fa-play-circle mr-2"></i>
											IR A VIDEO
										</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio PDF 1 -->
		<div class="portfolio-modal modal fade" id="pdf1" tabindex="-1" role="dialog" aria-labelledby="pdf1Label" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<!-- Portafolio PDF 1-->
						<iframe src="<?= PATH_DOCUMENTS.'InstanciaNormativa.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Youtube 2 -->
		<div class="portfolio-modal modal fade" id="youtube2" tabindex="-1" role="dialog" aria-labelledby="youtube2Label" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<!-- Portafolio Youtube2 - Título -->
									<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Videoteca</h2>
									<!-- Icono divisor -->
									<div class="divider-custom">
										<div class="divider-custom-line"></div>
										<div class="divider-custom-icon">
											<i class="fas fa-star"></i>
										</div>
											<div class="divider-custom-line"></div>
									</div>
									<!-- Portafolio Youtube2 - VIDEO -->
									<iframe width="560" height="350" src="https://youtu.be/QE5sGLasR9E" frameborder="0"></iframe>
																		
									<!-- Poratfolio Youtube2 - Texto -->
									<p class="mb-5">SICS CAPACITACIÓN: INSTANCIA EJECTORA
													<br>En caso de fallas en la visualización presionar 
													el botón IR A VIDEO</p>
									<!-- Botón Portafolio Youtube2 -->
									<div class="text-center mt-4">
										<a class="btn btn-xl btn-outline-dark" href="https://youtu.be/QE5sGLasR9E" target="_blank">
											<i class="fa fa-play-circle mr-2"></i>
											IR A VIDEO
										</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Reglas de Operación 3 -->
		<div class="portfolio-modal modal fade" id="reglasOperacion" tabindex="-1" role="dialog" aria-labelledby="reglasOperacionLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<!-- Portafolio Reglas de Operacion - PDF -->
						<iframe src="<?= PATH_DOCUMENTS.'GuiaOperativaCS2023.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Lineamientos-->
		<div class="portfolio-modal modal fade" id="lineamientos" tabindex="-1" role="dialog" aria-labelledby="lineamientosLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<!-- Portafolio lineamientos - PDF -->
						<iframe src="<?= PATH_DOCUMENTS.'LineamientosContraloríaSocial.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Convocatoria-->
		<div class="portfolio-modal modal fade" id="convocatoriaUPRR" tabindex="-1" role="dialog" aria-labelledby="convocatoriaUPRRLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<div class="modal-body text-center">
							<!-- Portafolio Convocatoria PDF -->
							<iframe src="<?= PATH_DOCUMENTS.'CONVOCATORIA uprr.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Difusión -->
		<div class="portfolio-modal modal fade" id="difusionPRODEP" tabindex="-1" role="dialog" aria-labelledby="difusionPRODEPLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<div class="modal-body text-center">
							<!-- Portafolio Convocatoria PDF -->
							<iframe src="<?= PATH_DOCUMENTS.'Triptico2023.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portafolio Directorio -->
		<div class="portfolio-modal modal fade" id="directorioOEC" tabindex="-1" role="dialog" aria-labelledby="directorioOECLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="fas fa-times"></i>
						</span>
					</button>
					<div class="modal-body text-center">
						<div class="modal-body text-center">
							<!-- Portafolio Directorio PDF -->
							<iframe src="<?= PATH_DOCUMENTS.'DIRECTORIOENLACESOEC2023.pdf' ?>" width="100%" height="650px" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>			
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		
		<!-- Plugin Bootstrap -->
		<script src="<?= PATH_JS.'jquery.min.js' ?>"></script>
		<script src="<?= PATH_JS.'bootstrap.bundle.min.js' ?>"></script>

		<!-- Plugin JavaScript -->
		<script src="<?= PATH_JS.'jquery.easing.min.js' ?>"></script>

		<!-- JavaScript Contactanos-->
		<script src="<?= PATH_JS.'jqBootstrapValidation.js' ?>"></script>
		<script src="<?= PATH_JS.'contact_me.js' ?>"></script>

		<!-- Scripts para esta plantilla -->
		<script src="<?= PATH_JS.'freelancer.min.js' ?>"></script>
		

	</body>
</html>