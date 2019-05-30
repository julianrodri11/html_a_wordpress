<?php 	/*	Template Name: Plantilla Institucional */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>INFORMACIÓN INSTITUCIONAL - AUTÓNOMA DE NARIÑO</title>
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/institucional/portada-institucional-aunar.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_institucional.php');?>
		<!-- Slider -->
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
		<!-- Fin slider-->

		<!-- informacion de institcional -->
		
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<!-- pestaña 1 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
							Información Institucional AUNAR
						</a>
						<!-- pestaña 2 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul  fondo-gris-os" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							Misión, Visión
						</a>
						<!-- pestaña 3 -->
						<!-- pestaña 4 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
							Objetivos
						</a>
						<!-- pestaña 5 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os" id="v-pills-act-deportivas-tab" data-toggle="pill" href="#v-pills-act-deportivas" role="tab" aria-controls="v-pills-act-deportivas" aria-selected="false">
							Principios
						</a>
						<!-- pestaña 6 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris" id="v-pills-act-6-tab" data-toggle="pill" href="#v-pills-act-6" role="tab" aria-controls="v-pills-act-6" aria-selected="false">
							Organigrama
						</a>
						<!-- pestaña 7 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os  active" id="v-pills-act-7-tab" data-toggle="pill" href="#v-pills-act-7" role="tab" aria-controls="v-pills-act-7" aria-selected="false">
							Símbolos
						</a>
						<!-- pestaña 8 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris" id="v-pills-act-8-tab" data-toggle="pill" href="#v-pills-act-8" role="tab" aria-controls="v-pills-act-8" aria-selected="false">
							Resoluciones
						</a>
						<!-- pestaña 9 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os" id="v-pills-act-9-tab" data-toggle="pill" href="#v-pills-act-9" role="tab" aria-controls="v-pills-act-9" aria-selected="false">
							Reglamentos
						</a>
						<!-- pestaña 10 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris" id="v-pills-act-10-tab" data-toggle="pill" href="#v-pills-act-10" role="tab" aria-controls="v-pills-act-10" aria-selected="false">
							Directorio
						</a>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<!-- pestaña 1 -->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="text-center pt-sans"> <strong><h3 class="f-negrita">HISTORIA</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<P class="pt-sans" >En el año de 1980 uno de los fundadores de la Institución, concibe la idea de crear una institución educativa para el fomento del desarrollo del departamento de Nariño, que inicialmente estaba orientada en la formación técnica en la ciudad de Pasto. De esta forma se busca favorecer a mucha gente que no podía viajar a las grandes ciudades por la escasez de recursos, la inseguridad que las grandes urbes presentaban, entre otras razones.</p>
								<P class="pt-sans" >En el año de 1981 el emprendedor nariñense <b>TITO JAIME COLUNGE</b> fundó, en compañía de su padre y su hermano la llamada <b>Corporación Educativa de Administración y Finanzas de Nariño - CEAFNAR,</b> ubicada en la Carrera 26 Nro. 14-86 de la Ciudad de Pasto. La institución fue creada por el artículo 173 del Decreto 80 de 1980 en la modalidad de Técnica Profesional Intermedia, regida por el Ministerio de Educación Nacional - MEN, con Oficio 031327 y la autorización inicial de fecha, JULIO 8 DE 1981. Ese mismo año se abrieron inscripciones y se inició con una población estudiantil de 196 estudiantes, en los programas de Administración de Empresas, Contabilidad y Finanzas, Mercadotecnia, Relaciones Industriales, Comercio Exterior e Ingeniería de Sistemas. Con Resolución Nro.15645 del 25 de agosto de 1983 el MEN, se prorroga la licencia de iniciación de labores y recomienda elevar al ICFES la solicitud de autorización para continuar estudios en Técnica Profesional. </p>
								<P class="pt-sans" >A pesar de las dificultades que presenta cualquier empresa en sus inicios, con tenacidad y un regio liderazgo, nuestro Rector, se obtuvo Personería Jurídica con Resolución Nro. 1054 el 1° de Febrero de 1983, en el gobierno del Dr. Belisario Betancourth. Transcurrieron 3 años para que el ICFES, en la dirección del Dr. Humberto Serna Gómez, aprobara el Estudio de Factibilidad para dar el paso de formación Técnica a Tecnológica.</p>
								<P class="pt-sans" >Con el Acuerdo No.048 del 28 de Marzo de 1985 el ICFES aprueba el Estudio de Factibilidad para tres Programas Tecnológicos: Mercadeo Agropecuario, Comercio Exterior y Administración de Empresas orientada a la pequeña y mediana Empresa. El 27 DE Noviembre de 1986 el ICFES con Acuerdo No. 225-A concedió licencia de funcionamiento para Tecnología en Comercio Exterior y Mercadeo Agropecuario. El programa de Administración de Empresas no recibió la licencia de funcionamiento en tanto el diseño curricular respondía al perfil universitario. Teniendo como slogan “La Tecnología es el Camino a Un Mundo Sin Fronteras”, en 1987 se abrieron las inscripciones para los programas tecnológicos aprobados, siendo pioneros en la ciudad. En el año de 1990 se crea el Centro De Investigaciones y Asesorías Empresariales - CIDAE y la entidad formula su primer Plan de Desarrollo. 
Para 1992 y acorde con las disposiciones de la Ley 30 de Educación, se crearon y desarrollaron nuevos programas Tecnológicos: Mercadeo y Publicidad, Diseño de Modas, Electrónica y Telecomunicaciones, Mecánica Dental, Administración Informática, Administración de Empresas, Locución y Medios de Comunicación, Sistemas, Mecánica. El 2 de Noviembre de 1994 al amparo del Artículo 103 de la Ley 30/92, la Institución cambió su nombre a <b>Corporación Universitaria Autónoma de Nariño - AUNAR</b> con Resolución No. 8174 de la misma fecha. El nombre producto de un proceso de consenso, fue propuesto por la Sra. Ofelia Basante de Benavides, estudiante de Comercio Exterior. En 1996 se crea la Seccional de Ipiales con los programas tecnológicos de Administración Informática y Comercio Exterior y en el año de 1997, en convenio con COMFAMILIAR del Municipio de Putumayo, se crea la extensión en Puerto Asís con el Programa de Tecnología en Administración Informática siendo la única institución de educación superior en el Putumayo.</p>
								<p class="pt-sans"> Para 1997-1998 se hace la primera autoevaluación, se definen la Misión y Visión Institucional y se formula un nuevo Plan de Desarrollo. En la perspectiva de una mayor madurez académica en el 2004 se celebra el convenio con la Red UREL Convenio de Cooperación Mutua e Intercambio de Publicaciones suscrito por las universidades que la conforman. Diez años después, por Resolución 6344 del 17 de Octubre del 2006, el MEN confiere el cambio de carácter académico a Institución Universitaria. En este mismo año se obtuvieron registros calificados para Programas Profesionales en Administración de Empresas, Contaduría Pública, Ingeniería Electrónica e Ingeniería Mecánica. </p>
								<p class="pt-sans"> Desde el año 2007 la AUNAR inició un proceso de modernización de su infraestructura para los Programas Profesionales, Técnicos y Tecnológicos Virtuales lo cual redundará en la calidad de la educación superior en sitios donde no ha hecho presencia ninguna Institución de Educación Superior. Así mismo se ha previsto el mejoramiento de bibliotecas, Bienestar e Investigación en la sede principal y en todas las extensiones, la adquisición de equipos para Ingenierías, laboratorios y material bibliográfico para todos los programas. En la actualidad la Corporación posee los siguientes Registros Calificados: Programas profesionales de: Contaduría Pública, Administración de Empresas, Ingeniería Electrónica e Ingeniería Mecánica. Programas Tecnológicos de: Diseño de Modas, Mercadeo y Publicidad, Mecánica Dental, Gestión en Salud Ocupacional, Gestión de Empresas y Gestión de Procesos Electrónicos. Programas Técnicos Profesionales de: Procesos Administrativos. Programas Virtuales de: Tecnología en Mercadeo Agropecuario y Técnico Profesional en la Transformación de Plantas Aromáticas. </p>
								<p class="pt-sans"> Hoy en día la AUNAR cuenta con 5 extensiones en las ciudades de Ipiales, Puerto Asís, Cali, Villavicencio y Cartagena. En su oferta académica se dispone de 6 Programas Profesionales (4 presenciales y 2 a distancia), 9 Programas Tecnológicos (2 a distancia y 2 virtuales). El Proyecto Educativo Institucional -PEI- de la Corporación Autónoma de Nariño “AUNAR” está construido en concordancia con la Constitución Política de Colombia, las leyes generales de la Educación en Colombia y de acuerdo a la Filosofía institucional. </p>
								<p class="pt-sans"> El Proyecto Educativo AUNAR, se creó mediante el diseño metodológico con procesos de participación democrática para la construcción colectiva entre estudiantes, docentes y administrativos, teniendo en cuenta el compromiso con el desarrollo de la ciencia y la tecnología, en la perspectiva de alimentar la reflexión sobre los nuevos modelos de desarrollo humano y social. Metodológicamente se han creado espacios para el estudio y análisis de la vida institucional y para la discusión de los nuevos paradigmas de responsabilidad social, ética y moral de la Institución, esta claridad deberá dar respuesta eficaz a las necesidades de la sociedad en el momento histórico actual.</p>
								<p class="pt-sans"> El PEI reúne los fundamentos conceptuales a partir de los cuales la Institución pretende alcanzar su Misión y Visión, con la presentación de cinco (5) capítulos en los que se incluye: Capítulo I. Normatividad que sustenta el PEI; donde se incluyen los lineamientos legales y normativos a partir del cual se sustenta el PEI. Capítulo II. Componente Teleológico; en el cual se incluyen elementos tales como la identificación de la institución, la misión Institucional, el objetivo institucional, los campos de acción, los valores corporativos, los principios y la filosofía institucional. Capítulo III. Componente Pedagógico; en él se fundamenta el modelo pedagógico de los programas a distancia en la modalidad virtual, las personas que se espera formar a través del modelo pedagógico problémico, los conceptos y teorías que sustentan el método problémico, el proceso enseñanza- aprendizaje a través de este método y los agentes educativos y sus roles. Capítulo IV. Actitudes y Valores; se concentra en mostrar actitudes y valores del personal de nuestra institución, es decir, docentes, estudiantes, personal administrativo y egresados. Capítulo V. Criterios de gerencia que sustentan el quehacer de la corporación Autónoma de Nariño “AUNAR”; aquí se expone el modelo de gestión de la institución, así como los principios que lo orientan. Capítulo VI. Reflexión frente a la implementación del PEI interrogantes; en el cual nos hacemos algunas preguntas orientadoras que nos ayudarán a reconocer la puesta en marcha de nuestro PEI.</p>

							</div>
						</div>
						<!-- pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">MISIÓN</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans texto-azul-os">
									La Autónoma de Nariño, “AUNAR”, es una Institución de Educación Superior comprometida con la cultura, ciencia, investigación; la excelencia en la formación de profesionales íntegros y el liderazgo en el desarrollo social.
								</p>
							</div>
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">VISIÓN</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans texto-azul-os">
									Institucionalmente el CIDAE, promoverá la investigación en todos los programas de las distintas facultades, para que desde un lenguaje investigativo unificado, fortalezca el desarrollo y ejecución de trabajos de grado y de las distintas formas de investigación tanto para el personal docente como estudiantes con visión científica que satisfaga el interés personal y el servicio a la comunidad; promoverá a partir de la investigación el desarrollo de tecnologías, la creación y consolidación de una comunidad investigativa y se encaminará al reconocimiento de la AUNAR como un ente investigador por excelencia que presenta resultados acordes con las necesidades de la región.
								</p>
							</div>
						</div>
						<!-- pestaña 3-->
						<!-- pestaña 4-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">OBJETIVO</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<P class="pt-sans">Formar profesionales íntegros, idóneos, éticos, proactivos, líderes del cambio, eficientes, eficaces, competitivos, con mentalidad creativa y empresarial, con espíritu investigativo, crítico, reflexivo y participativo, mediante una formación científica, tecnológica, humana y profesional que contribuya a la transformación y desarrollo de la sociedad y del contexto social.
								</P>
							</div>
						</div>
						<!-- pestaña 5-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-deportivas" role="tabpanel" aria-labelledby="v-pills-act-deportivas-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">PRINCIPIOS</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									<li>La Institución tiene su filosofía basada en la ciencia, la cultura, la tecnología para la formación del talento humano calificado para enfrentar exitosamente al mundo competitivo y al crecimiento que la actualidad exige en el campo de las competencias y la solución de problemas a todos los niveles con sentido de responsabilidad y humanismo en el marco de una sociedad global. <br><br>
									<li>En el desarrollo y crecimiento humano, científico y tecnológico, se reafirma el valor de la nacionalidad en lo étnico y pluricultural el respeto por los valores culturales regionales, socialización de la cultura y la protección del medio ambiente.<br><br>
									<li>Teniendo en cuenta la importancia del conocimiento Universal, la Institución es un espacio de controversia y contratación con el respeto a la libertad de conciencia, opinión, información, creencia, enseñanza,aprendizaje,investigación respetando la libertad de cátedra y la calidad científica, tecnológica y humana.
								</p>
							</div>
							
						</div>
						<!-- pestaña 6-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-6" role="tabpanel" aria-labelledby="v-pills-act-6-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">ORGANIGRAMA AUNAR</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/institucional/organigrama-aunar.jpg" alt="organigrama autónoma de nariño - aunar">
							</div>
						</div>
						<!-- pestaña 7-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-7" role="tabpanel" aria-labelledby="v-pills-act-7-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">SÍMBOLOS</h3><br>
								<h3 class=" f-negrita fuente-institucional texto-azul">ESCUDO</h3>
							</div>
							<div class="col-12 p-2 px-md-5 d-flex justify-content-center mx-auto"><img class="img-fluid" width="70%" src="<?php bloginfo('template_url')?>/img/logo-autonoma-de-narino-AUNAR.png" alt="Logo Autónoma de Nariño - aunar">
							</div>
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">HIMNO</h3>
								<br>
								<h5>Música y letra: Arturo Hernández.</h5>
								<br>
								<h4>Estrofa I</h4>

								<p>
								Formadores idóneos de cambio <br>
								Compromiso de ciencia y saber <br>
								Liderazgo en respeto y cultura <br>
								Son valores de nuestro emprender <br>
								</p>
								
								<h4>Estrofa II</h4>

								<p>
								El principio de nuestra exigencia <br>
								Es el campo de la educació <br>
								Generando acciones de lucha <br>
								Innovando en la investigación <br>
								</p>
								
								<h4>Coro</h4>

								<p>
								Oh lugar de pujanza y empeño <br>
								Fulgurante y gloriosa de bien <br>
								//Se tú, espíritu de compromiso <br>
								En la ciencia, el estado y la fe// <br>
								</p>
								
								<h4>Estrofa III</h4>

								<p>
								Trasciende y reafirma tu raza <br>
								En el ámbito del conocer <br>
								Es la Autónoma el sitio sagrado <br>
								Y es el aula altar del saber <br>
								</p>
								
								<h4>Estrofa IV</h4>

								<p>
								Aprender nuestra filosofía <br>
								Con respeto a la libertad <br>
								Propender por amor y justicia <br>
								Ascendiendo a la calidad <br>
								</p>
								
								<h4>Coro</h4>

								<p>
								Oh lugar de pujanza y empeño <br>
								Fulgurante y gloriosa de bien <br>
								//Se tú, espíritu de compromiso <br>
								En la ciencia, el estado y la fe// <br>
								</p>
							</div>
						</div>
						<!-- pestaña 8-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-8" role="tabpanel" aria-labelledby="v-pills-act-8-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">RESOLUCIONES</h3>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong class="bg-danger">Información no enviada</strong>
							</div>
						</div>
						<!-- pestaña 9-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-9" role="tabpanel" aria-labelledby="v-pills-act-9-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">REGLAMENTOS</h3>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f1" href="<?php bloginfo('template_url')?>/docs/footer/Estatuto_General.pdf">
										Estatuto general
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f2" href="<?php bloginfo('template_url')?>/docs/footer/Reglamento_Administrativos.pdf">
										Reglamento Administrativos
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f3" href="<?php bloginfo('template_url')?>/docs/footer/Reglamento_Docentes.pdf">
										Reglamento Docentes
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f4" href="<?php bloginfo('template_url')?>/docs/footer/Reglamento_Estudiantil.pdf">
										Reglamento Estudiantil
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="fg" href="<?php bloginfo('template_url')?>/docs/trabajos_de_grado/reglamentos-trabajo-grado.pdf">
										Reglamento trabajos de grado
									</a>
								</div>
								
							</div>
						</div>
						<!-- pestaña 10-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-10" role="tabpanel" aria-labelledby="v-pills-act-10-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">DIRECTORIO</h3>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								<table class="table table-hover">
								  <thead>
								    <tr class="bg-dark text-white"><th scope="col">Extensión</th><th scope="col">Dependencia</th></tr>
								  </thead>
								<tr class="table-light"><th scope="row"> 102</th> <td> RECEPCIÓN </td> </tr>
								<tr class="table-dark" ><th scope="row" > 103</th> <td> REGISTRO Y CONTROL </td> </tr>
								<tr class="table-light"><th scope="row"> 104</th> <td> MERCADEO 1 </td> </tr>
								<tr class="table-dark" ><th scope="row"> 105</th> <td> MERCADEO 2 </td> </tr>
								<tr class="table-light"><th scope="row"> 106</th> <td> MERCADEO 3 </td> </tr>
								<tr class="table-dark" ><th scope="row"> 107</th> <td> ENFERMERÍA </td> </tr>
								<tr class="table-light"><th scope="row"> 108</th> <td> MEDICO </td> </tr>
								<tr class="table-dark" ><th scope="row"> 109</th> <td> CREDITO Y CARTERA </td> </tr>
							  <tr class="table-light"><th scope="row"> 110</th> <td> BIENESTAR </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 111</th> <td> VICE. BIENESTAR </td> </tr>
							  <tr class="table-light"><th scope="row"> 112</th> <td> PROYECCIÓN  SOCIAL </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 113</th> <td> GESTION DOCUMENTAL </td> </tr>
							  <tr class="table-light"><th scope="row"> 100</th> <td> LABORATORIO </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 114</th> <td> BIBLIOTECA </td> </tr>
							  <tr class="table-light"><th scope="row"> 201</th> <td> SECRETARIA CIDAE </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 202</th> <td> OTRI </td> </tr>
							  <tr class="table-light"><th scope="row"> 203</th> <td> CREAN </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 204</th> <td> SECRETARÍA DE PLANEACIÓN </td> </tr>
							  <tr class="table-light"><th scope="row"> 205</th> <td> SECRE. DECA. CONTABILIDAD Y ADMINISTRACIÓN </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 206</th> <td> SECRE VICE. INVESTIGACIÓN </td> </tr>
							  <tr class="table-light"><th scope="row"> 207</th> <td> POSTGRADOS </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 211</th> <td> PSICOLOGÍA </td> </tr>
							  <tr class="table-light"><th scope="row"> 301</th> <td> REVISORÍA FISCAL </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 302</th> <td> TESORERÍA </td> </tr>
							  <tr class="table-light"><th scope="row"> 303</th> <td> CAJA </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 304</th> <td> SECRETARIA VICE. ADMON </td> </tr>
							  <tr class="table-light"><th scope="row"> 305</th> <td> GRADUADOS </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 307</th> <td> SECRETARIA RECTORÍA </td> </tr>
							  <tr class="table-light"><th scope="row"> 308</th> <td> ALMACÉN </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 309</th> <td> VIRTUAL </td> </tr>
							  <tr class="table-light"><th scope="row"> 310</th> <td> INTERNACIONALIZACIÓN </td> </tr>
								<tr class="table-dark" ><th scope="row"> 311</th> <td> JURÍDICA </td> </tr>
							  <tr class="table-light"><th scope="row"> 312</th> <td> CONTABILIDAD </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 313</th> <td> OFICINA ING. ELECTRÓNICA - LABORATORIOS </td> </tr>
							  <tr class="table-light"><th scope="row"> 314</th> <td> AUDIOVISUALES </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 315</th> <td> SECRETARIA GENERAL </td> </tr>
							  <tr class="table-light"><th scope="row"> 401</th> <td> DISEÑO DE MODAS </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 402</th> <td> DECANATURA ELECTRÓNICA </td> </tr>
							  <tr class="table-light"><th scope="row"> 403</th> <td> DECANATURA ING. INFORMA </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 404</th> <td> DECANATURA MECÁNICA </td> </tr>
							  <tr class="table-light"><th scope="row"> 406</th> <td> ASIST. TALENTO HUMANO </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 407</th> <td> CORD. SEGURIDAD </td> </tr>
							  <tr class="table-light"><th scope="row"> 408</th> <td> AUX. TALENTO HUMANO - SGSST </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 409</th> <td> MANTENIMIENTO </td> </tr>
							  <tr class="table-light"><th scope="row"> 411</th> <td> SISTEMAS </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 412</th> <td> DEC. MECANICA DENTAL </td> </tr>
							  <tr class="table-light"><th scope="row"> 414</th> <td> SEC. VICE ACADEMICA </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 502</th> <td> INGLÉS </td> </tr>
							  <tr class="table-light"><th scope="row"> 503</th> <td> EMISORA </td> </tr>
							  <!--  -->
							  <tr class="bg-dark text-white" ><td colspan="2" class="f-negrita">LÍNEAS TELEFÓNICAS </td> </tr>							  
							  <tr class="table-dark" ><th scope="row"> 7226020</th> <td> LÍNEA 1</td> </tr>
							  <tr class="table-light"><th scope="row"> 7232452</th> <td> LÍNEA 2 </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 7291789</th> <td> LÍNEA 3 RECEPCIÓN</td> </tr>
							  <tr class="table-light"><th scope="row"> 7238908</th> <td> LÍNEA 4 CONTABILIDAD</td> </tr>
							  <!--  -->
							  <tr class="table-dark" ><th scope="row"> 7225219</th> <td> LÍNEA 5 TALENTO HUMANO</td> </tr>
							  <tr class="table-light"><th scope="row"> 7291758</th> <td> LÍNEA 6 RECTORÍA </td> </tr>
							  <tr class="table-dark" ><th scope="row"> 7238908</th> <td> LÍNEA 7 </td> </tr>
							  <tr class="table-light"><th scope="row"> 7230508</th> <td> LÍNEA 8 </td> </tr>
								</table>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  get_footer(); ;?>
	</body>
</html>