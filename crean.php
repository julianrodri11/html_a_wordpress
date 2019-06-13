<?php /* Template Name: Plantilla CREAN */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>CREAN - AUTÓNOMA DE NARIÑO</title>
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/crean.jpg" alt="CREAN - Autónoma de Nariño"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_investigacion.php');?>
		<!-- informacion de primeros auxilios -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Quiénes Somos</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Misión, Visión</a>
						<!-- <a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Visión</a> -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Objetivos</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-act-deportivas-tab" data-toggle="pill" href="#v-pills-act-deportivas" role="tab" aria-controls="v-pills-act-deportivas" aria-selected="false">Emprendimiento</a>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3><strong>¿QUIÉNES SOMOS?</strong></h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>El Centro Regional de Emprendimiento y Empresarismo Autónoma de Nariño está adscrita a la Vicerrectoría de Investigación, Desarrollo, Innovación y posgrados, cuya principal finalidad es la fomentar la construcción de una mentalidad y cultura de emprendimiento en la comunidad universitaria de AUNAR.
								</p>
							</div>							
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3><strong>MISIÓN</strong></h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>
									Somos el Centro Regional de Emprendimiento y Empresarismo de la Corporación Universitaria Autónoma de Nariño, comprometidos con la formación de la mentalidad emprendedora y el espíritu empresarial en la comunidad universitaria de la región.
								</p>
								<p>Conformamos un equipo humano idóneo, íntegro y comprometido con el ejercicio de brindar un acompañamiento oportuno, que, apoyado con los recursos tecnológicos, financieros, de infraestructura y en general todos aquellos requeridos para garantizar un servicio óptimo para nuestros emprendedores. </p>
							</div>
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3><strong>VISIÓN</strong></h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Para el año 2023 seremos reconocidos como el Centro de Emprendimiento Universitario pionero y líder en el proceso de formación de la mentalidad emprendedora en el suroccidente colombiano.</p>
							</div>								
						</div>
						<!-- <div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">													
						</div> -->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"><h3><strong>OBJETIVOS</strong></h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								
								<strong>Objetivo general </strong>
								<p>
									Fortalecer y dinamizar el tanto el emprendimiento como el empresarismo al interior de la Corporación Universitaria Autónoma de Nariño durante los años 2015-2023.
								</p>
								<strong>Objetivos específicos:</strong>
								<p>Coordinar y articular las políticas e iniciativas de emprendimiento que se ejecutan desde y hacia la universidad.
									Fortalecer la cultura y mentalidad emprendedora dentro de los miembros de la comunidad universitaria y su área de influencia.
									Estimular el emprendimiento y el empresarismo dentro de los miembros de la comunidad universitaria y su área de influencia.
								Promover la interactividad con las diferentes redes de emprendimiento tanto en los ámbitos regional, nacional e internacional.</p>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-deportivas" role="tabpanel" aria-labelledby="v-pills-act-deportivas-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"><h3><strong>EMPRENDIMIENTO</strong></h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>
									Los procesos que lidera la dependencia son:
									<br><br>
									Articulación institucional en emprendimiento: desde donde se busca Interrelacionar las actividades curriculares que se están desarrollando dentro de las diferentes asignaturas incluidas en los pensum académicos de los diferentes programas ofrecidos por la institución de tal manera que se consolide una temática transversal de la formación profesional en mentalidad emprendedora.
									<br><br>
									Formación extracurricular en emprendimiento: cuya finalidad es diseñar, construir y ejecutar espacios extracurriculares que permitan la motivación y la formación integral del nuevo profesional como un ser autónomo, creativo, innovador y emprendedor con sentido social.
									<br><br>
									Acompañamiento al emprendedor: en este proceso se brida asesoría personalizada a los emprendedores que deseen avanzar de manera significativa en su objetivo de crear sus propias unidades de negocio o liderar sus proyectos emprendedores.
									<br><br>
									Participación dinámica con el entorno: buscando participar activamente en redes locales, regionales, nacionales e internacionales en emprendimiento y fortalecer las relaciones con el entorno empresarial de la región, de tal manera que se obtenga una interacción que permita la transferencia tecnológica y de innovación en beneficio del emprendimiento.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- personal encargado -->
		<div class="container-fluid">
			<!-- linea amarilla -->
			<div class="row">
				<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-5"></div>
			</div>
			<div class="row py-5">
				<!-- imagen de personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 text-center text-lg-right mx-auto ">
							<!-- aqui va todo lo que se quiera centrar -->
							<img src="<?php bloginfo('template_url')?>/img/investigacion/docente-crean.png" alt="IRINA MARGARITA JURADO PAZ" width="35%">
						</div>
					</div>
				</div>
				<!-- fin imagen de personal -->
				<!-- información personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 mx-auto text-left texto-azul-os ">
							<!-- aqui va todo lo que se quiera centrar -->							
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">DIRECTOR</h4>
							<div class="pt-sans text-justify pr-lg-5">
								<label class="f-negrita">IRINA MARGARITA JURADO PAZ</label>
								<br>Profesional en Administración de Empresas con una maestría en Administración de Empresas con especialidad en Dirección de Proyectos. Vinculada con AUNAR desde el 2012 y en calidad de director de esta dependencia desde 2014.
								<br>
								Ha participado como ponente en diferentes congresos internacionales en Panamá, Ecuador y Argentina. Además, lidera el grupo de investigación Equipo CREA. Actualmente, en calidad de delegada institucional, lidera la secretaría técnica de la Red Regional de Emprendimiento de Nariño.
								<br><br> E-mail: irina.jurado@aunar.edu.co –
								<br> Celular: 572 7226020 ext. 203.
							</div>
						</div>
					</div>
				</div>
				<!-- fin información personal -->
			</div>
			<!-- linea amarilla -->
			<div class="row">
				<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-5"></div>
			</div>
			<div class="row py-5">
				<!-- imagen de personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 text-center text-lg-right mx-auto ">
							<!-- aqui va todo lo que se quiera centrar -->
							<img src="<?php bloginfo('template_url')?>/img/investigacion/practicante-crean.png" alt="" width="35%">
						</div>
					</div>
				</div>
				<!-- fin imagen de personal -->
				<!-- información personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 mx-auto text-left texto-azul-os ">
							<!-- aqui va todo lo que se quiera centrar -->
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">PRACTICANTE</h4>
							<div class="pt-sans text-justify pr-lg-5">
								<label class="f-negrita">ANDERSON GEOVANI DÍAZ MUÑOZ</label>
								<br>Estudiante de Administración de Empresas de AUNAR, está cursando noveno semestre y actualmente contribuye en el fortalecimiento administrativo y organizacional de la dependencia.
								<br><br> Email: crean@aunar.edu.co
							</div>
						</div>
					</div>
				</div>
				<!-- fin información personal -->
			</div>
		</div>
		<!-- Fin personal encargado -->
		<?php  get_footer(); ;?>
	</body>
</html>