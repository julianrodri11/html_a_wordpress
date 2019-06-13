<?php /* Template Name: Plantilla Talento Humano */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>TALENTO HUMANO - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/sitioenconstruccion_aunar.jpg" alt="Talento Humano AUNAR"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_thumano.php');?>
		
		<!-- informacion de CIDAE -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<!-- pestaña 1 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
							¿Quiénes Somos?
						</a>
						
						<!-- pestaña 2 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							Misión, Visión
						</a>
						
						<!-- pestaña 3 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
							Circulares, permisos y licencias
						</a>
						
						<!-- pestaña 4 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
							Formato Reporte de Salida
						</a>
						
						<!-- pestaña 5 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-act-deportivas-tab" data-toggle="pill" href="#v-pills-act-deportivas" role="tab" aria-controls="v-pills-act-deportivas" aria-selected="false">
							Reglamentos
						</a>
						
						<!-- pestaña 6 -->
						<!-- <a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris" id="v-pills-act-6-tab" data-toggle="pill" href="#v-pills-act-6" role="tab" aria-controls="v-pills-act-6" aria-selected="false">
							Principios de Ia Investigación
						</a> -->
						
						<!-- pestaña 7 -->
						<!-- <a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-act-7-tab" data-toggle="pill" href="#v-pills-act-7" role="tab" aria-controls="v-pills-act-7" aria-selected="false">
							Organigrama
						</a> -->
						
						<!-- pestaña 8 -->
						<!-- <a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris" id="v-pills-act-8-tab" data-toggle="pill" href="#v-pills-act-8" role="tab" aria-controls="v-pills-act-8" aria-selected="false">
							Formatos para Descargar
						</a> -->
						
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						
						<!-- pestaña 1 -->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">TALENTO HUMANO</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									Gestionar y desarrollar el proceso de talento humano de la entidad, en cumplimiento de las normas constitucionales, implementación de programas que fortalezcan las aptitudes, valores, habilidades y destrezas de los trabajadores que generen un clima organizacional óptimo de tal forma que la Misión y Visión de la Entidad se cumpla a través de la contratación de funcionarios comprometidos y competentes.
								</p>
							</div>
						</div>
						
						<!-- pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">MISIÓN</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">VISIÓN</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									
								</p>
							</div>
						</div>
						
						<!-- pestaña 3-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">CIRCULARES, PERMISOS Y LICENCIAS</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									
								</p>
							</div>
						</div>
						
						<!-- pestaña 4-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">FORMATO REPORTE DE SALIDA</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/Formato-Reporte-de-salida.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato reporte de salida</a>
								</p>
							</div>
						</div>
						
						<!-- pestaña 5-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-deportivas" role="tabpanel" aria-labelledby="v-pills-act-deportivas-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">REGLAMENTOS</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/POLITICAS-CONTRATACION-DE-PERSONAL.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- POLITICAS CONTRATACION DE PERSONAL</a>
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/PROCESO-TALENTO-HUMANO.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- PROCESO TALENTO HUMANO</a>
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/REGLAMENTO-DOCENTES.pdf" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- REGLAMENTO DOCENTES</a>																
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/REGLAMENTO-ESCALAFON-DOCENTE.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- REGLAMENTO ESCALAFON DOCENTE</a>
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/REGLAMENTO-INTERNO-DE-TRABAJO.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- REGLAMENTO INTERNO DE TRABAJO</a>																
								<br><a class="hover-texto-blanco texto-azul-os" href="<?php bloginfo('template_url')?>/docs/thumano/REGLAMENTO-INTERNO-DE-TRABAJO-AUNAR-2016.pdf" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- REGLAMENTO INTERNO DE TRABAJO AUNAR 2016</a>																
							</div>
							
						</div>
						<!-- pestaña 6-->
						<!-- <div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-6" role="tabpanel" aria-labelledby="v-pills-act-6-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <h3 class="f-negrita">REGLAMENTOS</h3></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								DOCUMENTOS REQUERIDOS CREACIÓN GRUPOS DE INVESTIGACIÓN <br>
								<br><a class="hover-texto-blanco" href="docs/cidae/Carta_de_solicitud_de_reconocimiento_institucional_del_grupo_de_investigación.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Carta de solicitud de reconocimiento institucional del grupo de investigación		</a>
											
							</div>
						</div> -->
						<!-- pestaña 7-->
						<!-- <div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-7" role="tabpanel" aria-labelledby="v-pills-act-7-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">Organigrama CIDAE AUNAR</h3>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/investigacion/organigrama-cidae-aunar.jpg" alt="organigrama cida aunar"></div>
						</div> -->
						<!-- pestaña 8-->
						<!-- <div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-8" role="tabpanel" aria-labelledby="v-pills-act-8-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">Formatos</h3>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								DOCUMENTOS REQUERIDOS CREACIÓN GRUPOS DE INVESTIGACIÓN <br>
								<br><a class="hover-texto-blanco" href="docs/cidae/Carta_de_solicitud_de_reconocimiento_institucional_del_grupo_de_investigación.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Carta de solicitud de reconocimiento institucional del grupo de investigación		</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Carta_de_Solicitud_Correo_Institucional_de_Grupo_de_Investigación.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Carta de Solicitud Correo Institucional de Grupo de Investigación								</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Dossier_de_Presentación_Grupos_de_investigación_Aunar.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Dossier de Presentación - Grupos de Investigación AUNAR													</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formato_de_Inscripción_Grupos_de_Investigación.xlsx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato de Inscripción Grupos de Investigación 											</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formato_de_Presentación_de_Proyectos_de_Investigación_Docente" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato de Presentación de Proyectos de Investigación Docente					</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formato_para_pedir_clave_a_Colciencias.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato para pedir clave a Colciencias								</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formato_para_presentar_diplomado_ante_Cidae.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato para presentar diplomado ante Cidae					</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formatos_de_Inscripción_Nodal.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formatos de Inscripción Nodal												</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Manual_de_Trabajo_de_Grado_Facultad_de_Ingenierías.docx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Manual de Trabajo de Grado - Facultad de Ingenierías	</a>
								<br><a class="hover-texto-blanco" href="docs/cidae/Formato_de_Presupuesto_Proyectos_de_Investigación.xlsx" data-toggle="tooltip" data-placement="auto" title="Click para descargar formato">- Formato de Presupuesto - Proyectos de Investigación	</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
		<!-- personal encargado -->
		<div class="container-fluid py-5">
		<!-- linea amarilla -->
		<div class="row  m-0 p-0">
			<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-3"></div>
		</div>
		<div class="row m-0 py-5">
			
			<!-- imagen de personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 text-center text-lg-right mx-auto">
						<!-- aqui va todo lo que se quiera centrar -->
						<img src="<?php bloginfo('template_url')?>/img/t_humano/Luis-Gabriel-Colunge-Ordonez.png" alt="Luis Gabriel Colunge Ordoñez" width="50%">
					</div>
				</div>
			</div>
			<!-- fin imagen de personal -->
			
			<!-- información personal -->
			<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
				<div class="row col-12 ">
					<div class="col-12 py-3 mx-auto text-center text-lg-left texto-azul-os">
						<!-- aqui va todo lo que se quiera centrar -->
						<h4 class="texto-amarillo fuente-institucional f-negrita p-0">ADMINISTRADOR DE EMPRESAS ESPECIALISTA EN FINANZAS</h4>
						<div class="pt-sans text-justify pr-lg-5">
							<label class="f-negrita">LUIS GABRIEL COLUNGE ORDOÑEZ</label>
							<p>Soy egresado del Colegio San Felipe Neri, título obtenido Bachiller Académico. <br>
									Realice una tecnología en administración de Empresas en la Corporación Universitaria Autónoma de Nariño.<br>
									Mis estudios universitarios los realicé con la Corporación Universitaria de Ciencia y Desarrollo UNICIENCIA en donde obtuve el título de Profesional en Administración de Empresas y posteriormente hice una especialización en Finanzas con la Universidad de Nariño y otros estudios como Cooperativismo Básico con el SENA, Programación Neurolingüística e Inteligencia Emocional  en CODESIH, Formación en Sistemas de Gestión de Calidad en Salud en PARTNER OF THE AMERICAS, Participe del primer Seminario Internacional Un Nuevo Sistema de Gestión Para Lograr Pymes de Clase Mundial realizado en La Corporación Universitaria Autónoma de Nariño Sede Cali.
							</p>
							Correo electrónico:<br>
							talento.humano@aunar.edu.co<br>
							Contacto: 7225219
						</div>
					</div>
				</div>
			</div>
			<!-- fin información personal -->
		</div>		
	</div>
	<!-- fin personal encargado -->
		
		<!-- footer -->
		<?php  get_footer(); ;?>
		
		
	</body>
</html>