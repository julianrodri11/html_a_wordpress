<?php /* Template Name: Plantilla Internacionalización */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>INTERNACIONALIZACIÓN - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/proyeccion_institucional/internacionalizacion_aunar.jpg"/>
				</div>
			</div>
		</div>
		
		
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_proyeccioni.php');?>
		
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-6">
					<?php include_once('slider/slider-1.php');?>
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
		<div class="container-fluid texto-azul-os">
			<div class="row fondo-gris-c">
				<!-- misión -->
				<div class="col-12 col-md-5 m-lg-4">
					<div class="row m-md-2 p-md-5 ">
						<div class="col-12 pt-5"><h3 class="fuente-institucional f-negrita"> Misión</h3></div>
						<div class="col-12 text-justify pt-sans">La oficina de Internacionalización tiene como misión, promover el movimiento de la comunidad universitaria hacia otras instituciones académicas, empresariales, científicas, culturales, artísticas, gubernamentales o deportivas, de carácter local, regional, nacional e internacional.  </div>
					</div>
				</div>
				<!-- visión -->
				<div class="col-12 col-md-5 m-lg-4 border-left borde-amarillo">
					<div class="row m-md-2 p-md-5 ">
						<div class="col-12 pt-5"><h3 class="fuente-institucional f-negrita"> Visión</h3></div>
						<div class="col-12 text-justify pt-sans">Posicionar a la Corporación Universitaria Autónoma de Nariño, en un mundo globalizado, a través de alianzas estratégicas y de cooperación a nivel regional, nacional e internacional. </div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row fuente-institucional">
				<div class="col-12 pt-5 m-lg-4"><h3 class="fuente-institucional f-negrita texto-azul-os text-center mx-auto">PROGRAMAS Y PROYECTOS  AUNAR</h3></div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-12 d-flex justify-content-around">
					<ul class="nav nav-pills mb-3 flex-column flex-sm-row d-flex justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item fondo-gris-os d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">¿Que es la  Internacionalización?</a>
						</li>
						<li class="nav-item fondo-gris-c d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tipos de Movilidad</a>
						</li>
						<li class="nav-item fondo-gris-os d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Convenios</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8 d-flex justify-content-center">
					<div class="tab-content m-lg-5" id="pills-tabContent">
						<div class="tab-pane fade pt-sans texto-azul-os text-justify show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="col-12">
								En términos del Ministerio de Educación Nacional de Colombia, “la
								internacionalización es un proceso que fomenta los lazos de cooperación e
								integración de las Instituciones de Educación Superior (IES) con sus pares en
								otros lugares del mundo, con el fin de alcanzar mayor presencia y visibilidad
								internacional en un mundo cada vez más globalizado.”
							</div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="col-12">
								•	Movilidad académica estudiantil: <br>
								•	Intercambio académico: permite a los estudiantes cursar uno o dos periodos académicos en una institución aliada.<br>
								•	Doble titulación: el objetivo de esta movilidad es ofrecer a estudiantes un segmento de su formación en cada una de las instituciones y, como consecuencia, la obtención del diploma de ambas universidades.<br>
								•	Pasantía práctica: este tipo de movilidad tiene como objetivo, proporcionar al estudiante un espacio vivencial, para aplicar los conocimientos teóricos adquiridos en el transcurso de su programa académico, y al mismo tiempo, proporcionar experiencias para fortalecer su perfil profesional. <br>
								•	Curso de idioma: permite al estudiante estar inmerso en la cultura y el idioma del país de selección.<br>
								•	Misión: son viajes académicos cortos con el propósito de permitir al estudiante tener un acercamiento a diferentes instituciones, universidades, empresas, organizaciones), generalmente de carácter global. La misión les permite al mismo tiempo, vivir una experiencia cultural.<br>
								•	Rotación médica: son prácticas en áreas específicas de formación que realizan los estudiantes de medicina, durante su tiempo de internado o de práctica, para aplicar sus conocimientos teóricos y prácticos en instituciones de prestación de servicios de salud en el ámbito internacional. <br>
								•	Curso corto: son cursos de corta duración que tienen como propósito fomentar la interculturalidad mientras se cursa una materia que se podrá homologar como parte de la malla curricular del estudiante.<br>
								•	Voluntariado: el voluntariado es un trabajo no remunerado en un área específica. Es útil para los estudiantes que deseen adquirir experiencia laboral y al mismo tiempo tener una experiencia internacional.<br>
								•	Estancia de investigación: en este tipo de movilidad el estudiante participa en actividades científicas en una universidad o centro de investigación en el exterior.
							</div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="col-12">
								•	<strong> UNIVERSITY OF THE WEST INDIES	JAMAICA</strong> Docencia, investigación e intercambio entre docentes y estudiantes. <br>
								•	<strong> GRUPO IOE	ESPAÑA</strong>	Bases y mecanismos operativos de colaboración entre IOE y AUNAR. Desarrollo de proyectos, programas y otras acciones en las áreas académicas, científicas, tecnológicas, sociales de interés y para beneficios mutuo.<br>
								•	<strong> UNIVERSIDAD POLITÉCNICA ESTATAL DEL CARCHI – UPEC ECUADOR</strong>	Establecer un marco amplio de colaboración en actividades de mutuo interés en las áreas de investigación, extensión científica, social, cultural y en todas las demás formas de acción universitarias.<br>
								•	<strong> UNIVERSIDAD INTERNACIONAL DE LA RIOJA – UNIR ESPAÑA</strong> Capacitación para empleados, docentes y egresados en maestrías y doctorados.<br>
								•	<strong> UNIVERSIDAD DE LA FRONTERA CHILE</strong>	Facilitar y promover intercambio académico, proyectos de investigación, desarrollo conjunto e intercambio de materiales para la investigación y la enseñanza, organización de conferencias, seminarios y otras actividades similares.<br>
								•	<strong> UNIVERSIDAD TECNOLÓGICA INDOAMÉRICA, EN ADELANTE “UTI”,
								ECUADOR</strong>	Crear y fomentar cuantas actividades, acciones y relaciones sean necesarias para la concreción de planes, programas y proyectos de cooperación, que sean considerados de interés mutuo y con carácter preferente por las instituciones firmantes; para la promoción de estudios, actividades de investigación, impulso de proyectos, programas productivos y de desarrollo; así como de programas conjuntos, de infraestructura física, equipos, laboratorios, bibliografía y demás material de docencia e investigación de que disponga cada una de las partes. <br>
								•	<strong> UNIVERSIDAD TECNOLÓGICA INDOAMÉRICA, EN ADELANTE “UTI
								ECUADOR</strong>	Marco de la movilidad. La colaboración empezará a partir de los campos de interés especificados en el convenio marco. Las partes se comprometen a desarrollar los intercambios de sus estudiantes y docentes e investigadores asignando los recursos necesarios para que puedan trabajar en equipo. Para llevar a cabo esta cooperación cada parte nombrará un responsable encargado de la puesta en operación, desarrollo y seguimiento de las actividades programadas en el marco del presente convenio específico.<br>
								•	<strong> FONDO VERDE PERÚ</strong>	Implementación de acciones, proyectos y programas de investigación y desarrollo en materia de capacitación en medio ambiente y sostenibilidad, asesoramiento científico- técnico y formación de personal.<br>
								•	<strong> ESCUELA DE AGRICULTURA DE LA REGIÓN TROPICAL HÚMEDA – EARTH COSTA RICA</strong>	Intercambio académico, promover el intercambio de experiencias y conocimiento y la movilidad entre sus funcionarios<br>
								•	<strong> UNIVERSIDAD AMERICA DE EUROPA MÉXICO</strong>	Aunar esfuerzos para adelantar acciones conjuntas en temas de interés recíproco para cada una de las partes, en tareas de investigación, extensión, asistencia técnica, administrativa y académica.<br>
								•	<strong> GRUPO IOE	ESPAÑA</strong>	Comercialización De Programas Virtuales.<br>
								•	<strong> LA PONTIFICIA UNIVERSIDAD CATÓLICA DEL ECUADOR SEDE IBARRA ECUADOR</strong>	Definir y establecer el marco general de colaboración entre la Corporación Universitaria Autónoma De Nariño y La Pontificia Universidad Católica del Ecuador Sede Ibarra, para coordinar acciones en el ámbito de sus respectivas competencias y de conformidad con los planes de acción, actividades, programas y proyectos pertinentes, comprometiéndose a unir esfuerzos y trabajos en conjunto para fortalecer los procesos de investigación, impulso de proyectos, programas productivos y de desarrollo; así como de programas conjuntos, de infraestructura física, equipos, laboratorios, bibliografía y demás material de docencia e investigación de que disponga cada una de las partes.<br>
								•	<strong>CENTRO PANAMERICANO DE ESTUDIOS SUPERIORES – CEPES MÉXICO</strong>	Comercialización De Programas Virtuales.
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="container-fluid">
			
			<div class="row">
				<!-- lado izquierdo -->
				<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
					<div class="row col-12">
						<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
							<div class="col-12 p-2">
								<!-- imagen -->
								<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/sofia_vallejos.png" class="align-self-center mr-3 rounded-circle" width="100%" >
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
							<!-- descripción  -->
							<p><strong class="texto-azul-os f-negrita"> Coordinadora </strong><br>
								Sofía Vallejos Santacruz <BR>
								Internacionalización@aunar.edu.co   <br>
								<p>
								</div>
							</div>
						</div>
						<!-- fin lado izquierdo -->
						<!-- lado derecho -->
						<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
							<div class="row col-12">
								<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
									<div class="col-12 p-2">
										<!-- imagen -->
										<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/1.png" class="align-self-center mr-3 rounded-circle" width="100%" >
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
									<!-- descripción  -->
									<p><strong class="texto-azul-os f-negrita">Internacionalización </strong><br>
										extensión Villavicencio <br>
										Cristhian García Silva <br>
										internacionalización@aunarvillavicencio.edu.co <br>
										<p>
										</div>
									</div>
								</div>
								<!-- fin lado derecho -->
								<!-- lado izquierdo -->
								<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
									<div class="row col-12">
										<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
											<div class="col-12 p-2">
												<!-- imagen -->
												<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/4.png" class="align-self-center mr-3 rounded-circle" width="100%" >
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
											<!-- descripción  -->
											<p><strong class="texto-azul-os f-negrita">Internacionalización  </strong><br>
												extensión Ipiales: <BR>
												Nathalie Velásquez <br>
												bienestar.ipiales@aunar.edu.co
												<p>
												</div>
											</div>
										</div>
										<!-- fin lado izquierdo -->
										<!-- lado derecho -->
										<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
											<div class="row col-12">
												<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
													<div class="col-12 p-2">
														<!-- imagen -->
														<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/2.png" class="align-self-center mr-3 rounded-circle" width="100%" >
													</div>
												</div>
												<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
													<!-- descripción  -->
													<p><strong class="texto-azul-os f-negrita">Internacionalización </strong><br>
														extensión Cali: <br>
														Karen Chamat <br>
														karen.chamat@aunacali.edu.co
														<p>
															
														</div>
													</div>
												</div>
												<!-- fin lado derecho -->
												<!-- lado izquierdo -->
												<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
													<div class="row col-12">
														<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
															<div class="col-12 p-2">
																<!-- imagen -->
																<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/5.png" class="align-self-center mr-3 rounded-circle" width="100%" >
															</div>
														</div>
														<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
															<!-- descripción  -->
															<p><strong class="texto-azul-os f-negrita">Internacionalización </strong><br>
																extensión Putumayo: <br>
																Julia Inés Cuatindioy <br>
																putumayo@aunar.edu.co <br>
																<p>
																</div>
															</div>
														</div>
														<!-- fin lado izquierdo -->
														<!-- lado derecho -->
														<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
															<div class="row col-12">
																<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex justify-content-center align-items-center">
																	<div class="col-12 p-2">
																		<!-- imagen -->
																		<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/3.png" class="align-self-center mr-3 rounded-circle" width="100%" >
																	</div>
																</div>
																<div class="col-12 col-sm-6 col-lg-5 p-3 d-flex align-items-center mx-auto">
																	<!-- descripción  -->
																	<p><strong class="texto-azul-os f-negrita">Internacionalización </strong><br>
																		extensión Cartagena: <br>
																		Ricardo Fuetmayor <br>
																		emprendimiento@aunarcartagena.edu.co <br>
																		<p>
																		</div>
																	</div>
																</div>
																<!-- fin lado derecho -->
															</div>
														</div>
														<!-- footer -->
														<?php  get_footer(); ;?>
														
													</body>
												</html>