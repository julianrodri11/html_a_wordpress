<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>PROYECCIÓN SOCIAL - AUTÓNOMA DE NARIÑO</title>
		
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
/proyeccion_institucional/proyeccion_social_aunar.jpg"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_proyeccioni.php');?>
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-5">
					<?php include_once('slider/proyeccion_social.php');?>
				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-7">
					<div class="row">
						<div class="col-12 col-lg-10 ">
							<div class="row">
								<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Noticias</h3></div>
								<div class="col-4 p-2 fondo-azul-oscuro texto-amarillo">Conoce más</div>
							</div>
						</div>
						<div class="col-12 col-lg-10 ">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Contador:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en <strong>#AunarPasto</strong>... </div>
							</div>
						</div>
						<div class="col-12 col-lg-10  fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Padre:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en <strong>#AunarPasto</strong>... </div>
							</div>
						</div>
						<div class="col-12 col-lg-10 ">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">El Parche AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en <strong>#AunarPasto</strong>... </div>
							</div>
						</div>
						<div class="col-12 col-lg-10  fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en <strong>#AunarPasto</strong>... </div>
							</div>
						</div>
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
						<div class="col-12 text-justify pt-sans">La Corporación Universitaria Autónoma de Nariño como una entidad de educación superior busca contribuir a la construcción de una sociedad más humana, una educación de calidad, responsable de brindar apoyo a las problemáticas de la sociedad. </div>
					</div>
				</div>
				<!-- proyeccion social -->
				<div class="col-12 col-md-5 m-lg-4 border-left borde-amarillo">
					<div class="row m-md-2 p-md-5 ">
						<div class="col-12 pt-5"><h3 class="fuente-institucional f-negrita"> Visión</h3></div>
						<div class="col-12 text-justify pt-sans">Para el año 2018 el área de proyección Social de la Corporación Universitaria Autónoma de Nariño será reconocida por su articulación con la sociedad a través del desarrollo de proyectos, estrategias y acciones sociales. </div>
						<!-- quitar -->
						
					</div>
				</div>
				
			</div>
		</div>
		<!-- informacion trabajos de aula -->
		<div class="container-fluid mt-5">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita active" id="v-pills-formas-tab" data-toggle="pill" href="#v-pills-formas" role="tab" aria-controls="v-pills-formas" aria-selected="true">Formas de Proyección Social </a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Trabajos de Aula </a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">¿Como Participar en Proyección Social?</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Docentes y Estudiantes Adscritos
						a Proyección Social </a>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-formas" role="tabpanel" aria-labelledby="v-pills-formas-tab">
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center"> Formas de Proyección Social</h3></div>
								<div class="col-12 text-justify"><br><strong class="fuente-institucional f-negrita f-size-16">La Práctica Académica:</strong> capacitación y apoyo a estudiantes y docentes que lo requieran, colocando en práctica los conocimientos aprendidos durante el transcurso de su carrera. En   el   desarrollo   de las   prácticas   académicas   se   reconocen   formas asistenciales,  comunitarias,   de servicio,  educativas, artísticas, de diagnóstico, y de intervención,  de empresa,  deportivas y recreativas.</div>
								<div class="col-12 text-justify"><br><strong class="fuente-institucional f-negrita f-size-16">Voluntariado: </strong> es la forma en la cual se vinculan estudiantes de diferentes semestres en los proyectos liderados por la institución, de ésta manera se incentiva el trabajo colaborativo, investigación participativa, pertinencia y se logra aterrizar la comunidad universitaria a contextos reales, brindando alternativas de solución a diferentes problemáticas identificadas.</div>
								<div class="col-12 text-justify"><br><strong class="fuente-institucional f-negrita f-size-16">Investigación: </strong>  es la forma en la cual la comunidad universitaria brinda respuestas a problemáticas o necesidades identificadas a través de espacios de interacción y participación con diferentes sectores o comunidades, de ésta manera el proceso investigativo puede partir desde primero a décimo semestre, vinculando docentes, administrativos y comunidad interesada, todo esto con el fin de que los resultados de la investigación no sean únicamente académicos sino que puedan servir a las comunidades intervenidas en diferentes situaciones.</div>
								<div class="col-12 text-justify"><br><strong class="fuente-institucional f-negrita f-size-16">Trabajo de Grado: </strong>   respuesta a una problemática específica de una población vulnerable determinada, a través de la puesta en marcha y/o la investigación realizada para optar por su título profesional o tecnológico.</div>
								<div class="col-12 text-justify"><br><strong class="fuente-institucional f-negrita f-size-16">Trabajo de Aula: </strong>   Trabajo final de una cátedra, el cual tendrá como objetivo brindar apoyo a diferentes problemáticas sociales en el contexto regional, a través de los conocimientos adquiridos durante el trabajo en clase, lo cual logra contextualizar a los estudiantes y docentes sobre las realidades presentes en nuestra región.</div>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify pt-sans">
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center">TRABAJOS DE AULA</h3></div>
								<div class="col-12 pt-sans text-justify">
									<p>La corporación Universitaria Autónoma de Nariño a través de las diferentes alianzas interinstitucionales, realiza apoyo y fortalecimiento a diferentes microempresas y comunidades desde los diferentes espacios académicos con el apoyo de nuestros docentes Aunar, quienes están comprometidos con el desarrollo de nuestra región.</p>
									<p>Diplomado Promotores de derechos y gestores de paz</p>
									<p>La Corporación Universitaria Autónoma de Nariño, el Servicio Jesuita a Refugiados y la Universidad Politécnica estatal del Carchi desarrollaron el diplomado promotores de derechos y gestores de paz, dirigido a población víctima del conflicto armado y refugiados en el Ecuador, con el fin de que las personas participantes adquieran herramientas para el fortalecimiento de sus comunidades y de sus organizaciones, participando en un espacio de formación con enfoque de derechos.</p>
								</div>
								<div class="col-12 text-center">
									<br><iframe width="100%" height="450" src="https://www.youtube.com/embed/2jBwFrTNmUs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 pt-sans text-justify">
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center">Desde proyección social puedes desarrollar:</h3>
								</div>
								<div class="col-12">
									•	Práctica profesional <br>
									•	Trabajo de grado <br>
									•	Trabajos de aula <br>
									•	Salidas de campo <br>
								</div>
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center">Ruta para participar:</h3>
								</div>
								<div class="col-12">
									1.	Asistir a las Charlas informativas <br>
									2.	Solicitar más información en la coordinación de proyección social. <br>
									3.	Diligenciar el formulario de inscripción y adjuntar la fotocopia de la cédula, fotocopia de la póliza de accidentes, fotografía 3x4 y fotocopia del paz y salvo. <br>
									4.	Asistir a la reunión de grupo. <br>
									5.	Diligenciar acta de compromiso. <br>
									6.	Asistir a la reunión con el grupo seleccionado. <br>
									7.	Identificar proyectos en los cuales quiere desempeñarse. <br>
									8.	Elaboración del cronograma de actividades.
								</div>
							</div>
							<!-- <div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="http://placehold.it/600x300"></div> -->
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 pt-sans text-justify">
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center">Docentes adscritos a Proyección Social</h3>
								</div>
								<div class="col-12">
									Administración de Empresas: Irina Jurado, Jesús Andrés Villota.<br>
									Contaduría Pública: Ana Cristina Martínez.<br>
									Ingeniería electrónica: Fredy Dulce.<br>
									Ingeniería Mecánica: Pilar Mora.<br>
									Diseño de Modas: Yuli Juajinoy.
								</div>
								<div class="col-12"><h3 class="fuente-institucional f-negrita text-center">Estudiantes adscritos a Proyección Social</h3>
								</div>
								<div class="col-12">
									Luis Eduardo Toro<br>
									Melisa Tenorio<br>
									Evelin Quiñonez<br>
									María Fernanda Arteaga<br>
									Sebastián Palacios<br>
									Camila Villarreal<br>
									Daniela Castillo<br>
									Gabriela Castillo<br>
									Karol Meléndez
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 pt-lg-5 m-lg-4"><h3 class="fuente-institucional f-negrita texto-azul-os text-center mx-auto">PROGRAMAS Y PROYECTOS  AUNAR</h3></div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row  ">
				<div class="col-12 d-flex justify-content-center">
					<ul class="nav nav-pills mb-3 f-size-12 flex-column flex-sm-row d-flex justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item fondo-gris-os d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Fortalecimiento comunidad<br>Tumaquito (Alianza AUNAR – SJR)</a>
						</li>
						<li class="nav-item fondo-gris-c d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Inclusión psicosocial y socioeconómica<br> para población víctima del<br> conflicto armado en Colombia<br> y refugiados en el Ecuador <br>(Investigación AUNAR – UTI)</a>
						</li>
						<li class="nav-item fondo-gris-os d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Escuela de Liderazgo y <br>emprendimiento social I.E.M.<br> AURELIO ARTURO</a>
						</li>
						<li class="nav-item fondo-gris-c d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-2-tab" data-toggle="pill" href="#pills-22" role="tab" aria-controls="pills-22" aria-selected="false">Fortalecimiento en Emprendimiento<br> comunidad Chachagui</a>
						</li>
						<li class="nav-item fondo-gris-os d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-3-tab" data-toggle="pill" href="#pills-33" role="tab" aria-controls="pills-33" aria-selected="false">Fortalecimiento contable a<br> microempresarios</a>
						</li>
						<li class="nav-item fondo-gris-c d-flex justify-content-center align-items-center ">
							<a class="nav-link texto-azul-os f-negrita fuente-institucional hover-amarillo align-self-stretch text-center d-flex align-items-center" id="pills-4-tab" data-toggle="pill" href="#pills-44" role="tab" aria-controls="pills-44" aria-selected="false">Foro Proyección Social<br> y Extensión Universidad<br> – Empresa – Estado</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8">
					<div class="tab-content m-5" id="pills-tabContent">
						<div class="tab-pane fade pt-sans texto-azul-os text-justify show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="col-12"> Tumaquito es un asentamiento de población afro desplazada por la violencia, el cual se encuentra ubicado en Anganoy... <strong>#AunarPasto</strong> a través de <strong>#AunarProyecciónSocial</strong> se preocupó por sus necesidades y decidió empezar un proceso de fortalecimiento comunitario con la ayuda de la Fundación Comuniquemos su Misericordia y el Servicio Jesuita a Refugiados: 3 Visualiza este corto video para que tú también conozcas esta experiencia :) ¡Aquí estamos comprometidos con nuestra comunidad!</div>
							<div class="col-12 text-center">
								<br><iframe width="100%" height="450" src="https://www.youtube.com/embed/YQBAEXnuVpI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="col-12">La investigación que está siendo desarrollada en alianza a la Universidad Tecnológica Indoamérica de Quito, se realiza con el propósito de generar una metodología de intervención que permita articular la psicología y las ciencias administrativas y económicas, con el fin de generar integración local para la Población víctima del conflicto armado</div>
							<div class="col-12"><br><a data-flickr-embed="true" data-header="true" data-footer="true"  href="https://www.flickr.com/photos/147246490@N05/albums/72157694165509515" title="Articulación internacional"><img src="https://farm5.staticflickr.com/4759/26770842038_a5e89b8307_z.jpg" width="100%"  alt="Articulación internacional"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="col-12"><strong>#AunarPasto</strong> a través de <strong>#AunarProyecciónSocial</strong> realiza un proceso en la I.E.M Aurelio Arturo, en donde se está formando una escuela de liderazgo y participación ciudadana con adolescentes de grado décimo :) ¡Porque La educación es el motor de transformación Social, AUNAR presente!</div>
							<div class="col-12"><br><a data-flickr-embed="true" data-header="true" data-footer="true"  href="https://www.flickr.com/photos/147246490@N05/albums/72157694787243362" title="Grados Aunar"><img src="https://farm2.staticflickr.com/1737/41875581385_dd3d434f53_z.jpg" width="100%"  alt="Grados Aunar"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-22" role="tabpanel" aria-labelledby="pills-2-tab">
							<div class="col-12"><strong>#AunarPasto</strong> desde <strong>#AunarProyecciónSocial</strong> se encuentra ejecutando un proyecto llamado <strong> "Emprendimiento empresarial"</strong> con microempresarios del municipio de Chachagüi, Nariño :)</div>
							<div class="col-12"><br><iframe width="100%" height="450" src="https://www.youtube.com/embed/I9xbBT92dXw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
							
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-33" role="tabpanel" aria-labelledby="pills-3-tab">
							<div class="col-12"><strong>#AunarPasto</strong> apoya a microempresarios de nuestra región a través de valiosas capacitaciones dictadas en las instalaciones de nuestra Corporación Universitaria :) Extendemos un agradecimiento especial a <strong>#AunarProyecciónSocial</strong> por realizar este trabajo tan bonito con las comunidades</div>
							<div class="col-12"><br><iframe width="100%" height="450" src="https://www.youtube.com/embed/Cqbl5HxIJJc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
						</div>
						<div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-44" role="tabpanel" aria-labelledby="pills-4-tab">
							<div class="col-12">Con la grata intervención de la Secretaria de Equidad de Género e Inclusión Social, Secretaría de TIC Innovación y Gobierno Abierto, Centro de Innovación Social de Nariño (CISNA) por parte de la Gobernación de Nariño y Subsecretaría de Desarrollo Comunitario y Secretaría de Desarrollo Económico por parte de la Alcaldía de Pasto :) A todos ustedes muchas gracias por compartir sus experiencias con nosotros y a todos los estudiantes, docentes y administrativos que nos acompañaron en este foro, gracias también por su activa participación <strong>#AunarPasto</strong> <strong>#AunarProyecciónSocial</strong> :D Comprometidos con nuestra comunidad</div>
							<div class="col-12"><br><img class="img-fluid" src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/foro_proyeccion_social.png" width="100%" alt="Foro proyección social"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<!-- personal encargado -->
		<div class="container-fluid p-2 p-lg-5 ">
			<div class="row m-3 fuente-institucional texto-azul-os d-flex justify-content-center">
				<div class="col-12 col-lg-6 ">
					<!-- Personal -->
					<div class="media border-bottom borde-amarillo pb-3">
						<div class="media-body ">
							
							<div class="row">
								<div class="col-12 col-md-4 text-center">
									<img src="<?php bloginfo('template_url')?>/img
/proyeccion_institucional/gabriela_sthefanny_vargas.png" class="align-self-center mr-3 rounded-circle img-fluid" >
								</div>
								<div class="col-12 col-md-8 text-center text-md-left">
									<h4 class="fuente-institucional texto-amarillo f-negrita">PROFESIONAL ENCARGADO</h4>
									<div class="pt-sans">
										<label class="f-negrita">GABRIELA STHEFANNY VARGAS GUZMÁN </label><br>
										Administradora de Empresas (Universidad de Nariño)<BR>
										Magíster en Intervención Social (Universidad Internacional de la Rioja) <br>
										Formación en innovación social y emprendimiento.<br>
										Investigadora Corporación Universitaria Autónoma de Nariño<br>
										Teléfono: 7226020 ext 112 <br>
									Correo electrónico gabriela.vargas@aunar.edu.co  </p>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  get_footer(); ;?>
	
</body>
</html>