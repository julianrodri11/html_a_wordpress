<!DOCTYPE html>
<html lang="es">
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
					<img class="mx-auto img-fluid" width="100%" src="img/institucional/portada-institucional-aunar.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_institucional.php');?>
		<!-- Slider -->
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-5">
					<?php include_once('slider/slider-1.php');?>
				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-7 py-5 py-sm-0">
					<div class="row">
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Noticias</h3></div>
								<div class="col-4 p-2 fondo-azul-oscuro texto-amarillo">Conoce más</div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Contador:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Padre:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">El Parche AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
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
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
							Información Institucional AUNAR
						</a>
						<!-- pestaña 2 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							Misión
						</a>
						<!-- pestaña 3 -->
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
							Visión
						</a>
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
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita border-bottom borde-azul fondo-gris-os" id="v-pills-act-7-tab" data-toggle="pill" href="#v-pills-act-7" role="tab" aria-controls="v-pills-act-7" aria-selected="false">
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
								<P class="pt-sans" >En el año de 1980 se genera la idea bajo un análisis y estudia que realiza uno de los fundadores de la creación y fomento al desarrollo del departamento de Nariño en el sector educativo con la creación de una Institución con modalidad técnica profesional (Institución de Educación Pre-gradual) en la ciudad de Pasto. De esta forma favorecer a mucha gente que no podía viajar a las grandes ciudades por la escasez de los recursos, por la inseguridad que las grandes urbes presentaban, entre otras razones. <br><br>
									En el año de 1981 fundó en compañía de su padre y hermano la Corporación Educativa de Administración y Finanzas de Nariño - CEAFNAR ubicada en la Carrera 26 Nro. 14-86 de la Ciudad de Pasto. La institución fue creada por el artículo 173 del Decreto 80 de 1980 en la modalidad de Técnica Profesional Intermedia, regida por el Ministerio de Educación Nacional - MEN, con Oficio 031327 y la autorización inicial de fecha, JULIO 8 DE 1981. 10 CORPORACION UNIVERSITARIA AUTONOMA DE NARIÑO CONTROL INTERNO PLAN DE DESARROLLO Se abrieron inscripciones en los programas de Administración de Empresas, Contabilidad y Finanzas , Mercadotecnia, Relaciones Industriales, Comercio Exterior e Ingeniería de Sistemas. Con 196 estudiantes se iniciaron labores en los programas de Administración de Empresas, Contabilidad y Finanzas y Comercio Exterior. Con Resolución Nro.15645 del 25 de agosto de 1983 el MEN, prorroga la licencia de iniciación de labores y recomienda elevar al ICFES la solicitud de autorización para continuar estudios en Técnica Profesional. Con la tenacidad de nuestro Rector, con todas las vicisitudes de la vida, con el liderazgo que siempre lo ha caracterizado, obtuvo Personería Jurídica con Resolución Nro. 1054 el 1° de Febrero de 1983, en el gobierno del Dr. Belisario Betancourth. Transcurrieron 3 años para que el ICFES, en la dirección del Dr. Humberto Serna Gómez, aprobara el Estudio de Factibilidad para dar el paso de formación Técnica a Tecnológica.<br><br>
									Con el Acuerdo No.048 del 28 de Marzo de 1985 el ICFES aprueba el Estudio de Factibilidad para tres Programas Tecnológicos: Mercadeo Agropecuario, Comercio Exterior y Administración de Empresas orientada a la pequeña y mediana Empresa. El 27 DE Noviembre de 1986 el ICFES con Acuerdo No. 225-A concedió licencia de funcionamiento para Tecnología en Comercio Exterior y Mercadeo Agropecuario. El programa de Administración de Empresas no recibió la licencia de funcionamiento en tanto el diseño curricular respondía al perfil universitario. Teniendo como slogan “La Tecnología es el Camino a Un Mundo Sin Fronteras”, en 1987 se abrieron las inscripciones para los programas tecnológicos aprobados, siendo pioneros En la ciudad con ellos y contando a la fecha con 40 promociones en Comercio Exterior y 6 promociones en Mercadeo Agropecuario. En el año de 1990 se crea el Centro De Investigaciones y Asesorías Empresariales y la entidad formula su primer Plan de Desarrollo. Para 1992 y acorde con las disposiciones de la Ley 30 de Educación, se crearon y desarrollaron nuevos programas Tecnológicos: Mercadeo y Publicidad, Diseño de Modas, Electrónica y Telecomunicaciones, Mecánica Dental, Administración Informática, Administración de Empresas, Locución y Medios de Comunicación, Sistemas, Mecánica. El 2 de Noviembre de 1994 al amparo del Artículo 103 de la Ley 30/92, la Institución cambió el nombre de CEAFNAR al nombre de Corporación Universitaria Autónoma de Nariño - AUNAR con Resolución No. 8174 de la misma fecha. El nombre producto de un proceso de consenso fue propuesto por la Sra. Ofelia Basante de Benavides, estudiante de Comercio Exterior. 11 CORPORACION UNIVERSITARIA AUTONOMA DE NARIÑO CONTROL INTERNO PLAN DE DESARROLLO En 1996 se crea la Seccional de Ipiales con los programas tecnológicos de Administración Informática y Comercio Exterior y en el año de 1997, en convenio con COMFAMILIAR del Municipio de Putumayo, se crea la extensión en Puerto Asís con el Programa de Tecnología en Administración Informática siendo la única institución de educación superior en el Putumayo.<br><br>
									Para 1997-1998 se hace la primera autoevaluación, se definen la Misión y Visión Institucional y se formula un nuevo Plan de Desarrollo. En la perspectiva de una mayor madurez académica en el 2004 se celebra el convenio con la Red UREL Convenio de Cooperación Mutua e Intercambio de Publicaciones suscrito por las universidades que la conforman. Diez años después, por Resolución 6344 del 17 de Octubre del 2006, el MEN confiere el cambio de carácter académico a Institución Universitaria. En este mismo año se obtuvieron registros calificados para Programas Profesionales en Administración de Empresas, Contaduría Pública, Ingeniería Electrónica e Ingeniería Mecánica. Desde el año 2007 la AUNAR inició un proceso de modernización de su infraestructura para los Programas Profesionales, Técnicos y Tecnológicos Virtuales lo cual redundará en la calidad de la educación superior en sitios donde no ha hecho presencia ninguna Institución de Educación Superior. Así mismo se ha previsto el mejoramiento de bibliotecas, Bienestar e Investigación en la sede principal y en todas las extensiones, la adquisición de equipos para Ingenierías, laboratorios y material bibliográfico para todos los programas. En la actualidad la Corporación posee los siguientes Registros Calificados: Programas profesionales de: Contaduría Pública, Administración de Empresas, Ingeniería Electrónica e Ingeniería Mecánica. Programas Tecnológicos de: Diseño de Modas, Mercadeo y Publicidad, Mecánica Dental, Gestión en Salud Ocupacional, Gestión de Empresas y Gestión de Procesos Electrónicos. Programas Técnicos Profesionales de: Procesos Administrativos. Programas Virtuales de: Tecnología en Mercadeo Agropecuario y Técnico Profesional en la Transformación de Plantas Aromáticas. <br><br>
									Hoy en día la AUNAR cuenta con 5 extensiones en las ciudades de Ipiales, Puerto Asís, Cali, Villavicencio y Bucaramanga. En su oferta académica se dispone de 6 Programas Profesionales (4 presenciales y 2 a distancia), 9 Programas Tecnológicos (2 a distancia y 2 virtuales) El Proyecto Educativo Institucional -PEI- de la Corporación Autónoma de Nariño “AUNAR” está construido en concordancia con la Constitución Política de Colombia, las leyes generales de la Educación en Colombia y de acuerdo a la Filosofía institucional. El Proyecto 12 CORPORACION UNIVERSITARIA AUTONOMA DE NARIÑO CONTROL INTERNO PLAN DE DESARROLLO Educativo de la Autónoma de Nariño, se creó mediante el diseño metodológico con procesos de participación democrática para la construcción colectiva entre estudiantes, docentes y administrativos, teniendo en cuenta el compromiso con el desarrollo de la ciencia y la tecnología, en la perspectiva de alimentar la reflexión sobre los nuevos modelos de desarrollo humano y social. Metodológicamente se han creado espacios para el estudio y análisis de la vida institucional y para la discusión de los nuevos paradigmas a cerca de la responsabilidad social, ética y moral de la Institución, esta claridad deberá dar respuesta eficaz a las necesidades de la sociedad en el momento histórico actual.<br><br>
								El PEI reúne los fundamentos conceptuales a partir de los cuales la Institución pretende alcanzar su Misión y Visión, con la presentación de cinco (5) capítulos en los que se incluye: Capítulo I. Normatividad que sustenta el PEI; donde se incluyen los lineamientos legales y normativos a partir del cual se sustenta el PEI. Capítulo II. Componente Teleológico; en el cual se incluyen elementos tales como la identificación de la institución, la misión Institucional, el objetivo institucional, los campos de acción, los valores corporativos, los principios y la filosofía institucional. Capítulo III. Componente Pedagógico; en él se fundamenta el modelo pedagógico de los programas a distancia en la modalidad virtual, las personas que se espera formar a través del modelo pedagógico problémico, los conceptos y teorías que sustentan el método problémico, el proceso enseñanza- aprendizaje a través de este método y los agentes educativos y sus roles. Capítulo IV. Actitudes y Valores; se concentra en mostrar actitudes y valores del personal de nuestra institución, es decir, docentes, estudiantes, personal administrativo y egresados. Capítulo V. Criterios de gerencia que sustentan el quehacer de la corporación Autónoma de Nariño “AUNAR”; aquí se expone el modelo de gestión de la institución, así como los principios que lo orientan. Capítulo VI. Reflexión frente a la implementación del PEI interrogantes; en el cual nos hacemos algunas preguntas orientadoras que nos ayudarán a reconocer la puesta en marcha de nuestro PEI.</P>
							</div>
						</div>
						<!-- pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">MISIÓN</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans texto-azul-os">
									La Autónoma de Nariño, “AUNAR”, es una Institución de Educación Superior comprometida con la Cultura, La Ciencia la Investigación; la excelencia en la formación de profesionales íntegros y el liderazgo en el desarrollo social.
								</p>
							</div>
						</div>
						<!-- pestaña 3-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">VISIÓN</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<p class="pt-sans">
									Institucionalmente el CIDAE, promoverá la investigación en todos los programas de las distintas facultades, para que desde un lenguaje investigativo unificado, fortalezca el desarrollo y ejecución de trabajos de grado y de las distintas formas de investigación tanto para el personal docente como estudiantes con visión científica que satisfaga el interés personal y el servicio a la comunidad; promoverá a partir de la investigación el desarrollo de tecnologías, la creación y consolidación de una comunidad investigativa y se encaminará al reconocimiento de la AUNAR como un ente investigador por excelencia que presenta resultados acordes con las necesidades de la región.
								</p>
							</div>
						</div>
						<!-- pestaña 4-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">OBJETIVO</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5 text-justify">
								<P class="pt-sans">Formar Profesionales íntegros, idóneos, éticos, proactivos, líderes del cambio, eficientes, eficaces, competitivos, con mentalidad creativa y empresarial, con espíritu investigativo, crítico, reflexivo y participativo, mediante una formación científica, tecnológica, humana y profesional que contribuya a la transformación y desarrollo de la sociedad y del contexto social.
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
									La Institución tiene su filosofía basada en la ciencia, la cultura, la tecnología para la formación del talento humano calificado para enfrentar exitosamente al mundo competitivo y al crecimiento que la actualidad exige en el campo de las competencias y la solución de problemas a todos los niveles con sentido de responsabilidad y humanismo en el marco de una sociedad global. <br><br>
									En el desarrollo y crecimiento humano, científico y tecnológico, se reafirma el valor de la nacionalidad en lo étnico y pluricultural el respeto por los valores culturales regionales, socialización de la cultura y la protección del medio ambiente.<br><br>
									Teniendo en cuenta la importancia del conocimiento Universal, la Institución es un espacio de controversia y contratación con el respeto a la libertad de conciencia, opinión, información, creencia, enseñanza,aprendizaje,investigación respetando la libertad de cátedra y la calidad científica, tecnológica y humana.
								</p>
							</div>
							
						</div>
						<!-- pestaña 6-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-6" role="tabpanel" aria-labelledby="v-pills-act-6-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<span class="pt-sans"> <strong><h3 class="f-negrita">ORGANIGRAMA AUNAR</h3></strong></span>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/institucional/organigrama-aunar.jpg" alt="organigrama autónoma de nariño - aunar">
							</div>
						</div>
						<!-- pestaña 7-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-7" role="tabpanel" aria-labelledby="v-pills-act-7-tab">
							<div class="col-12 p-2 px-md-5 text-center">
								<h3 class=" f-negrita fuente-institucional texto-azul">SíMBOLOS</h3>
							</div>
							<div class="col-12 p-2 px-md-5">
								<strong class="bg-danger">Información no enviada</strong>
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
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f1" href="docs/footer/Estatuto_General.pdf">
										Estatuto general
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f2" href="docs/footer/Reglamento_Administrativos.pdf">
										Reglamento Administrativos
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f3" href="docs/footer/Reglamento_Docentes.pdf">
										Reglamento Docentes
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="f4" href="docs/footer/Reglamento_Estudiantil.pdf">
										Reglamento Estudiantil
									</a>
								</div>
								<div class="mb-1">
									<a class="text-azul fuente-institucional" data-toggle="tooltip" data-placement="auto" title="Ver" target="fg" href="docs/trabajos_de_grado/reglamentos-trabajo-grado.pdf">
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
								102 RECEPCIÓN
								<br> 103 REGISTRO Y CONTROL
								<br> 104 MERCADEO 1
								<br> 105 MERCADEO 2
								<br> 106 MERCADEO 3
								<br> 107 ENFERMERÍA
								<br> 108 MEDICO
								<br> 109 CREDITO Y CARTERA
								<br> 110 BIENESTAR
								<br> 111 VICE. BIENESTAR
								<br> 112 PROYECCIÓN  SOCIAL
								<br> 113 GESTION DOCUMENTAL
								<br> 100 LABORATORIO
								<br> 114 BIBLIOTECA
								<br> 201 SECRETARIA CIDAE
								<br> 202 OTRI
								<br> 203 CREAN
								<br> 204 SECRETARÍA DE PLANEACIÓN
								<br> 205 SECRE. DECA. CONTABILIDAD Y ADMINISTRACIÓN
								<br> 206 SECRE VICE. INVESTIGACIÓN
								<br> 207 POSTGRADOS
								<br> 211 PSICOLOGÍA
								<br> 301 REVISORÍA FISCAL
								<br> 302 TESORERÍA
								<br> 303 CAJA
								<br> 304 SECRETARIA VICE. ADMON
								<br> 305 GRADUADOS
								<br> 307 SECRETARIA RECTORÍA
								<br> 308 ALMACÉN
								309 VIRTUAL
								<br> 310 INTERNACIONALIZACIÓN
								<br> 311 JURÍDICA
								<br> 312 CONTABILIDAD
								<br> 313 OFICINA ING. ELECTRÓNICA - LABORATORIOS
								<br> 314 AUDIOVISUALES
								<br> 315 SECRETARIA GENERAL
								<br> 401 DISEÑO DE MODAS
								<br> 402 DECANATURA ELECTRÓNICA
								<br> 403 DECANATURA ING. INFORMA
								<br> 404 DECANATURA MECÁNICA
								<br> 406 ASIST. TALENTO HUMANO
								<br> 407 CORD. SEGURIDAD
								<br> 408 AUX. TALENTO HUMANO - SGSST
								<br> 409 MANTENIMIENTO
								<br> 411 SISTEMAS
								<br> 412 DEC. MECANICA DENTAL
								<br> 414 SEC. VICE ACADEMICA
								<br> 502 INGLÉS
								<br> 503 EMISORA
								<br><br>
								<strong> LÍNEAS TELEFÓNICAS</strong>
								<br>
								L1= 7226020 - L2=7232452 - L3=7291789   (RECEPCIÓN)
								<br> L7=7238908 - L8= 7230508 <br>
								<br> <strong> MERCADEO </strong>
								<br> L4= 7238908  CONTABILIDAD
								<br> L6=7291758    RECTORIA
								<br> L5=7225219   TALENTO HUMANO
							<br> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('secciones/footer-principal.php');?>
	</body>
</html>