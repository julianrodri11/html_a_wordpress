<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>TRABAJOS DE GRADO - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img
/investigacion/trabajos-de-grado.jpg" alt="TRABAJOS DE GRADO - Autónoma de Nariño"/>
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
						
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Etapas de la realización del Trabajo de Grado</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Formatos para descargar</a>
					</div>
				</div>
				<!-- pestañas -->
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						
						<!-- Pestaña 1-->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>En cada etapa el estudiante cuenta con el acompañamiento de un docente asesor. En programas virtuales se asesorará con recursos y herramientas presentadas en la plataforma MOODLE. </p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img
/investigacion/trabajos-de-grado-aunar.png" alt="Trabajos de grado AUNAR"></div>
						</div>
						
						<!-- Pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Formatos</strong>
								<br><a class="hover-texto-blanco" href="" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Presentación de Trabajos de Grado</a>
								<br><a class="hover-texto-blanco" href="docs/footer/Plan_Educactivo_Institucional.pdf" data-toggle="tooltip" data-placement="auto" title="Ver" target="pei">- Plan Educativo Institucional	</a>
								<br><br><strong>INVESTIGACIÓN FORMATIVA - FORMATOS ETAPAS TRABAJO DE GRADO</strong>
								<br><a class="hover-texto-blanco" href="docs/trabajos_de_grado/formato-propuesta-de-grado.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato" target="fd3">- Presentación de Propuesta de Trabajo de Grado	</a>
								<br><a class="hover-texto-blanco" href="docs/trabajos_de_grado/formato-anteproyecto-investigacion.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato" target="fd4">- Anteproyecto de Investigación	</a>
								<br><a class="hover-texto-blanco" href="" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato" target="fd5">- Proyecto de Investigación	</a>
								<br><a class="hover-texto-blanco" href="docs/trabajos_de_grado/parametros-entrega-trabajos-dvd-aunar-2017.pdf" data-toggle="tooltip" data-placement="auto" title="Ver" target="fd6">- Parámetros para la Entrega de Trabajos de Grado en Medio Magnético DVD</a>
								<br><a class="hover-texto-blanco" href="docs/trabajos_de_grado/plantilla-dvd-2017.pdf" data-toggle="tooltip" data-placement="auto" title="Ver" target="fd7">- Plantilla DVD (Esta plantilla puede ser editada en Adobe Ilustrador, Corel Draw)	</a>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		
		
		
		<?php  get_footer(); ;?>
		
		
	</body>
</html>