<?php /* Template Name: Plantilla Vicerrectoría de Investigación */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>VICERRECTORÍA DE INVESTIGACIÓN - AUTÓNOMA DE NARIÑO</title>		
	</head>
	<body>
		<?php
				include_once('secciones/menu1.php');
				include_once('secciones/logo-central.php');
				include_once('secciones/modal-traductor.php');
				include_once('modal/modal-contactenos.php');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 p-0">
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/vicerrectoria-de-investigacion-aunar.jpg" alt="vicerrectoría de investigación" />
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_investigacion.php');?>
		
		<!-- Slider vicerectoria de investigación -->
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-6">
					<?php include_once('slider/slider-investigacion.php');?>
				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-6 py-5 py-sm-0">
					<div class="row">
						<?php						
						//***************************************** */
						//Se importa los eventos 
						include_once('eventos/eventos.php');
						//***************************************** */
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin slider vicerectoria de investigación -->
		
		<!-- informacion de psicologia -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<!-- penstaña 1 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Misión</a>
						<!-- penstaña 2 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visión</a>
						<!-- penstaña 3 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-profile" aria-selected="false">Objetivos</a>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						
						
						<!-- penstaña 1 -->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5"><strong>Misión</strong></div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>La vicerrectoría de Investigaciones y posgrados de la AUNAR fomenta, realiza y prospecta diferentes actividades articuladoras de Investigación, Desarrollo e Innovación, I+D+I, y posgrados en planes, programas y proyectos con el fin de dinamizar y originar alternativas de solución al cuadrinomio Empresa-Estado-Sociedad-Universidad. </p>
							</div>
						</div>
						<!-- fin penstaña 1 -->
						
						<!-- penstaña 2 -->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5"><strong>Visión</strong></div>
							<div class="col-12 p-2 px-md-5 text-justify" >
								La vicerrectoría de Investigaciones y posgrados de la AUNAR en diez años será reconocida y valorada por su excelencia investigativa, por tener programas de posgrados de alta calidad, por generar alternativas de solución a la sociedad del suroccidente colombiano, por tener a los mejores docentes investigadores y por ser registrada y acreditada nacional e internacionalmente por sus labores de I+D+I y posgrados.
							</div>
						</div>
						<!-- fin penstaña 2 -->
						
						<!-- penstaña 3 -->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
							<div class="col-12 p-2 px-md-5"><strong>Objetivos</strong></div>
							<div class="col-12 p-2 px-md-5 text-justify" >
								<ul>
									<li><strong></strong>  Estimular la investigación formativa, básica, aplicada y de desarrollo entre los diferentes actores de la comunidad universitaria. </li>
									<li><strong></strong>  Fomentar la I+D+I y posgrados con el fin de cumplir con su misión institucional de investigación, docencia y extensión. </li>
									<li><strong></strong>  Desarrollar programas y proyectos de investigación que se enmarcan bajo la conceptualización del modo dos de transferencia de conocimientos. </li>
									<li><strong></strong>  Estimular la realización de programas y proyectos de I+D+I y posgrados que articulen el cuadrinomio Empresa-Estado-Sociedad-Universidad. </li>
									<li><strong></strong>  Realizar convenios regionales, nacionales e internacionales que fortalezcan la cultura investigativa. </li>
									<li><strong></strong>  Estimular alternativas de solución a los problemas de la sociedad mediante los procesos de I+D+I y posgrados. </li>
									<li><strong></strong>  Articular a los procesos de I+D+I y posgrados a pares investigativos del orden regional, nacional e internacional. </li>
									<li><strong></strong>  Articular la I+D+I y posgrados a pares, grupos, redes y comunidades investigativas del orden regional, nacional e internacional. </li>
									<li><strong></strong>  Fomentar y apoyar el desarrollo de I+D+I y posgrados con altos estándares de calidad de acuerdo a parámetros internacionales. </li>
									<li><strong></strong>  Favorecer, estimular y apoyar los intercambios académicos, pedagógicos e investigativos de los actores de la comunidad universitaria. </li>
									<li><strong></strong>  Estimular y apoyar la formación de talento humano a nivel de maestría y doctorado con el fin de fortalecer la cultura de I+D+I de la AUNAR. </li>
									<li><strong></strong>  Promover la realización de programas y proyectos de I+D+I con comunidades académicas e investigativas del orden regional, nacional e internacional. </li>
									<li><strong></strong>  Estimular y apoyar la socialización de los resultados de I+D+I y posgrados a nivel regional, nacional e internacional. </li>
									<li><strong></strong>  Estimular los procesos de I+D+I y posgrados en semilleros de investigación y jóvenes investigadores. </li>
									<li><strong></strong>  Fomentar la transferencia de conocimientos a los sectores y actores del Sistema de Innovación Nacional y Regional. </li>
									<li><strong></strong>  Institucionalizar un evento académico-investigativo bianual que reúna a la comunidad científica regional, nacional e internacional con el fin de socializar los resultados de los procesos de I+D+I y posgrados. </li>
									<li><strong></strong>  Fomentar la creación de grupos, centros e institutos de investigación. </li>
									<li><strong></strong>  Promover y apoyar el desarrollo de líneas, programas y proyectos de investigación. </li>
									<li><strong></strong>  Apoyar la creación de programas académicos a nivel de maestría y doctorado en el marco de las líneas y grupos de investigación. </li>
									<li><strong></strong>  Promover el intercambio de docentes, investigadores y administrativos con universidades u organismos públicos y privados de Investigación del orden regional, nacional e internacional. </li>
									<li><strong></strong>  Crear instrumentos institucionales con el fin de realizar transferencia de conocimientos a los actores y sectores del Sistema de Innovación Nacional y Regional. </li>
									<li><strong></strong>  Fomentar e implementar la cultura bioética y ética entre los actores del sistema de I+D+I y posgrados. </li>
								</ul>
							</div>
							
							
						</div>
						<!-- fin penstaña 3 -->
					</div>
				</div>
			</div>
		</div>
		
		<!-- -----------------EVENTOS--------------------------------- -->
		<div class="container-fluid fondo-amarillo fondo-eventos-vicerectoria">
			<div class="row">
				<div class="col-lg-12 p-2 d-flex align-items-center justify-content-center justify-content-sm-center justify-content-md-center e_arriba_abajo">
					
					<div class="p-1 mt-5 mt-sm-5 bd-highlight text-center pr-3">
						<h1 class="my-1 fuente-institucional text-white f-negrita">Eventos</h1>
						<label class="  fuente-institucional text-white f-size-18">¡Entérate nuestras novedades!</label>
					</div>
				<!-- div class="p-1 bg-primary bd-highlight">Flex item 2</div>
				<div class="p-1 bg-white bd-highlight">Flex item 3</div> -->
			</div>
			<div class="col-lg-12  ">
				<div class="row p-3 ">
					
					<div class="col-md-6 p-3 derecha_izquierda d-flex align-items-center">
						<div class="col-12 p-lg-4 mb-3">
							
							<!-- seccion de eventos  -->
							<?php include_once('slider/eventos-autonoma-de-narino.php'); ?>			
							<!-- fin sección eventos -->
						</div>
					</div>
					<div class="col-md-6 p-2 hvr-grow-shadow izquierda_derecha d-flex align-items-center" >
						<div class="col p-2 text-center "><a href="radio-aunar-stereo"><img class="img-fluid" width="100%" alt="AUNAR ESTEREO" src="<?php bloginfo('template_url')?>/img/aunar-stereo.png"/></a></div>
						<!-- <div class=" texto-azul text-center ">
										<div class="row">
														<div class="col-12 mb-0 p-0 fuente-institucional ">AUNAR STEREO</div>
														<div class="col-12 "><label class="f-size-14">¡Tú también puedes ser un creador de espacios de diálogo!</label></div>
										</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ----------------FIN EVENTOS------------------------------ -->
	<!-- personal encargado -->
	<div class="container-fluid py-5">
		
		<div class="row ">
			
			<!-- imagen de personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 text-center text-lg-right mx-auto ">
						<!-- aqui va todo lo que se quiera centrar -->
						<img src="<?php bloginfo('template_url')?>/img/investigacion/pedro-pablo-burbano.png.png" alt="Pedro Pablo Burbano" width="35%">
					</div>
				</div>
			</div>
			<!-- fin imagen de personal -->
			<!-- información personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 mx-auto text-left texto-azul-os ">
						<!-- aqui va todo lo que se quiera centrar -->
						<h4 class="texto-amarillo fuente-institucional f-negrita p-0">VICERECTOR (A)</h4>
						<div class="pt-sans">
							<label class="f-negrita">PEDRO PABLO BURBANO</label>
							<br>Lic. en física
							<br>Esp. Economía de los recursos naturales
							<br>Esp. Ciencia, tecnología y sociedad
							<br>Esp. Dirección y gerencia pública en administración local
							<br>Mg. Docencia de la física
							<br>Mg. Análisis y gestión de la ciencia y la tecnología
							<br>Mg. MBA directivo
							<br>Doc. Estudios políticos
							<br>Docente de los Colegios Seminario Misional de Sibundoy, Champagnat de Sibundoy y Minuto de Dios, Bogotá.
							<br>Docente de las Universidades: Cauca, ESAP, Distrital, Los Libertadores, Instituto Tecnológico del Putumayo, Autónoma de Nariño.
							<br><br>
							Vicerrectoria.investigacion@aunar.edu.co
						</div>
					</div>
				</div>
			</div>
			<!-- fin información personal -->
		</div>
		<!-- linea amarilla -->
		<div class="row">
			<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-3"></div>
		</div>
		<div class="row py-5">
			
			<!-- imagen de personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 text-center text-lg-right mx-auto">
						<!-- aqui va todo lo que se quiera centrar -->
						<img src="<?php bloginfo('template_url')?>/img/investigacion/Francy-Yasmir-Vallejo-Otaya.png" alt="Francy Yasmir Vallejo Otaya" width="35%">
					</div>
				</div>
			</div>
			<!-- fin imagen de personal -->
			
			<!-- información personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 mx-auto text-center text-lg-left texto-azul-os">
						<!-- aqui va todo lo que se quiera centrar -->
						<h4 class="texto-amarillo fuente-institucional f-negrita p-0">AUXILIAR DE INVESTIGACIÓN</h4>
						<div class="pt-sans">
							<label class="f-negrita">FRANCY YASMIR VALLEJO OTAYA</label>
							<br>secretaria.investigacion@aunar.edu.co
						</div>
					</div>
				</div>
			</div>
			<!-- fin información personal -->
		</div>
		
	</div>
	<!-- fin personal encargado -->
	
	
	<?php  get_footer(); ?>
	
	
</body>
</html>