<?php /* Template Name: Plantilla Semilleros */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>SEMILLEROS - AUTÓNOMA DE NARIÑO</title>
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/semilleros.jpg" alt="SEMILLEROS - Autónoma de Nariño"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_investigacion.php');?>
		<!-- informacion de primeros auxilios -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<!-- enlaces a pestaña -->
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">¿Quénes somos?</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Objetivo General</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Formalización de semilleros</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Formación investiga en articulación con RedCOLSI</a>
					</div>
				</div>
				<!-- pestañas -->
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<!-- Pestaña 1-->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-center"><strong>Fortalecimiento cultura investigativa, y gestión extracurricular con el apoyo y acompañamiento de los semilleros de Investigación.</strong></div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>
									Los Semilleros de Investigación son una estrategia pedagógica extracurricular que tienen el fin de fomentar la cultura investigativa en los estudiantes de pregrado y tecnología; donde se agrupan para desarrollar actividades que los apasionen y que los inicien en la formación investigativa y el trabajo en equipo. Este proceso es Asesorado por los coordinadores y docentes de investigación de los programas.
									<br><br>
									Con el fin de fortalecer la cultura investigativa en los estudiantes de nuestra Institución se busca desarrollar la creatividad a partir de intereses propios y adoptar la investigación como estrategia pedagógica con el fin de transformar y generar conocimientos, además de despertar la curiosidad natural en el estudiante y formar profesionales creativos, a través de procesos de investigación que permitan a los futuros profesionales dar soluciones a las problemáticas regionales y globales.
								</p>
							</div>
						</div>
						<!-- Pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<strong>Objetivo General</strong>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Convocar y Crear Semilleros de Investigación de las diferentes facultades, para fomentar la investigación y a su vez fortalecer capacidades de trabajo en equipo, oralidad, escritura, entre otras.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/ciclo_semillerista_aunar.jpg" alt="Ciclo semillerista AUNAR"></div>
						</div>
						<!-- Pestaña 3-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-center"><strong>FORMALIZACIÓN DE SEMILLEROS</strong></div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/formalizacion_de_semilleros.jpg" alt="Formalizacion semilleros AUNAR"></div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<P>Se logró cumplir la meta de formalización de los semilleros en el tema administrativo y operativo, con lo cual hemos consolidado en este primer periodo académico 5 semilleros de investigación:</P>
								<P> a)Los programas de Ingeniería Informática y Mecánica el anterior año (2016) trabajó con un semillero conjunto el cual tenía como línea de investigación la robótica llamado MACHINE, por definición del programa de Ingeniería Mecánica y el apoyo de los docentes se creó un semillero denominado ICIMA, coordinado por la docente Gisela Cabrera con apoyo de los ingenieros: Juan C. Guerrero, Iván Ruiz, Nelson Sáenz, Álvaro Burgos y Diego Parra. Este semillero se encuentra formalizado.
									<br> <br>b)Por su parte, el programa de Ingeniería Informática crea dos semilleros de investigación denominados: ASIMOV y SINAPSIS coordinados por el ingeniero Juan Carlos Alvarado en apoyo con la coordinadora de programa ingeniera Lilian Cruz. Este semillero se encuentra formalizado.
									<br> <br>c)El programa de Ingeniería Electrónica crea un nuevo semillero SIGNAL formalizado y coordinado por el ingeniero Oscar Rodríguez.
									<br> <br>d)Los programas de Administración de Empresas y Contaduría Pública de manera unificada crean un semillero de investigación formalizado y coordinado por el docente Iván Esney Benavides Torres quien trabaja en apoyo con la docente Irina Jurado, denominado GRAINE.
								</P>
							</div>
						</div>
						<!-- Pestaña 4-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<strong>Formación investiga en articulación con RedCOLSI</strong>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Participaron durante este semestre 4 estudiantes de la institución en diplomado de investigación dictado por la RedCOLSI Nodo Nariño, en IUCESMAG. <br><br>
									El diplomado se denominó V DIPLOMADO EN INVESTIGACIÓN – TERCERA COHORTE INVESTIGACIÓN PROPUESTA DE INVESTIGACIÓN, propuestos por la Fundación Red Colombiana de Semilleros de Investigación Nodo Nariño el cual hizo énfasis en los principios de la investigación y con el propósito de promover el desarrollo de las competencias investigativas y fortalecer el espíritu investigativo de los estudiantes pertenecientes al Nodo Nariño de Semilleros de Investigación, el Comité Ejecutivo Nodal, ofrece un espacio de capacitación y actualización en investigación, bajo la figura de un diplomado, con el fin de facilitar a los asistentes el conocimiento para la elaboración de la propuesta de investigación.
								</p>
								<p>
									La intensidad horaria del diplomado fue de 120 horas las cuales fueron aprobadas por los cuatro estudiantes inscritos; las 60 horas de trabajo independiente se realizarán a través del trabajo práctico de elaboración del análisis, interpretación y discusión de los resultados parciales de la investigación.  Las temáticas abordadas fueron: Fundamentos teóricos, Problema y justificación, Referentes teóricos, Operacionalización de variables, hipótesis, categorización, Metodología e instrumentos de recolección de información, Cronograma y presupuesto y Presentación de propuestas de investigación.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  get_footer(); ;?>
	</body>
</html>