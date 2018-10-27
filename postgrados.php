<?php /* Template Name: Plantilla Postgrados*/ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>POSTGRADOS - AUTÓNOMA DE NARIÑO</title>
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
/investigacion/postgrados.jpg" alt="POSTGRADOS - Autónoma de Nariño"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_investigacion.php');?>
		<!-- informacion de primeros auxilios -->
		<div class="container-fluid py-5">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Descripción</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Misión</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Visión</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Objetivos</a>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Descripción</strong>
								<p>La perspectiva de la formación Superior avanza con el propósito de alternativas emergentes en los países Latinoamérica y del Caribe como referencia de la excelencia de profesional en la área investigativa, científica, tecnológica y humanista con prototipos educativos pertinentes, transformadora, participativa, protagónica, sostenibles y generando modelos de desarrollos integrados productivos para sociedad</p>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Misión</strong>
								<p>Formar talento humano de excelencia en los diferentes programas académicos de formación integral, investigativa, científica, tecnológica y humanista, que genere múltiples enfoques sociales para enfrentar los nuevos retos que demanda la sociedad y que vinculen al desarrollo sostenible, la investigación y la innovación en las áreas de posgrados, doctorados y posdoctorados.  </p>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Visión</strong>
								<p>Optimizar la formación profesional de alto nivel investigativo, que confluyen de manera integral, científicos, humanista, tecnológico que impulsen el desarrollo científico nacional, regional, local e internacional</p>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Objetivos</strong>
								<p>Propiciar programas académicos de formación integral en el marco del conocimiento, la investigación, la ciencia, la tecnología y las humanidades, bajo la conceptualización científica, reconociendo el aporte significativo investigativo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ----------------OFERTAS DE INTERES ---------------------- -->
		<div class="container-fluid fondo-gris-os p-4 ">
			<div class="row ">
				<div class="col-12 col-lg-12">
					<div class="row texto-azul d-flex justify-content-center">
						<div class="col-10 pl-5 pr-5 pb-2 text-center fuente-institucional f-negrita f-size-16">Recuerda que la Corporación Universitaria Autónoma de Nariño, también cuenta con programas de formación continua para que perfecciones tu perfil profesional.</div>
						<div class="col-10 text-center text-center"><strong> AUNAR</strong> te ofrece la siguiente oferta educativa: <a class="texto-amarillo-oscuro f-negrita" href="">Cursos, </a><a class="texto-amarillo-oscuro f-negrita" href="">Diplomados, </a><a class="texto-amarillo-oscuro f-negrita" href="">Seminarios</a> </div>
					</div>
				</div>
				<div class="col-12 col-lg-12 d-flex align-items-center justify-content-center ">
					<div class="text-center ">
						<a href="#" class="p-2 badge badge-pill bg-white hover-amarillo  texto-azul sin-texto-subrayado hover-sin-borde">Ver Oferta</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ----------------FIN OFERTAS DE ITENRES--------------------- -->
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
							<img src="<?php bloginfo('template_url')?>/img
/investigacion/docente-postgrados.png" alt="Pedro Pablo Burbano" width="50%">
						</div>
					</div>
				</div>
				<!-- fin imagen de personal -->
				<!-- información personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 mx-auto text-left texto-azul-os ">
							<!-- aqui va todo lo que se quiera centrar -->
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">PROFESIONAL ENCARGADO</h4>
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">DIRECTOR</h4>
							<div class="pt-sans text-justify pr-lg-5">
								<label class="f-negrita">DHAVY ARROYO GUTIÉRREZ</label>
								<br>Técnico Superior Universitario (TSU) en Administración, Mención: Recursos Físicos y Financieros. (Colegio Universitario Fermín Toro de Barquisimeto, estado Lara (CUFT, 1995), TSU: Educación Especial, Mención Dificultades de Aprendizaje, Universidad Pedagógica Experimental Libertador, Instituto de Mejoramiento Profesional del Magisterio, Barquisimeto (UPEL-IMPM, 2003), Profesor en Educación Especial, Mención Dificultades de Aprendizaje, (UPEL,2004), Diplomado en Orientación Escolar, Familiar y Comunitaria, Centro de Investigación, Capacitación y Desarrollo Integral Humano, Barquisimeto, (CICODIH,2005), Universidad Virtual de FATLA, Magíster en Experto en Procesos Elearning (FATLA, 2011). Doctor en Ciencias de la Educación. (Universidad Latinoamérica y del Caribe (ULAC, 2013).  Cursante de los últimos semestres de la Carrera de Psicología, (Universidad Yacambú).
								<br><br> Email: posgrados@aunar.edu.co
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