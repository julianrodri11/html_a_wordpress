<?php /* Template Name: Plantilla Virtual*/ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>AUNAR VIRTUAL - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/aunar-virtual.png" alt="AUNAR VIRTUAL" />
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_aunar_virtual.php');?>
		
		<!-- ----------------SECCIÓN NOTICIAS------------------------- -->
		<div class="container-fluid m-0 py-5 border-bottom borde-azul">
		<?php 
		//$args = array( 'category_name=noticias' => 4 );
		
		$my_query=new WP_Query(array('category_name' => 'noticias','posts_per_page' => 2));
		 if ( $my_query -> have_posts() ) : 
			$contador = 0;
			while ($my_query -> have_posts() ) : $my_query->the_post();
				
			/*******************************************************************************/
			//contenido de las noticias
			if( ++$contador % 2 == 0){
				//echo "PAR".$contador;
				?>
				<!-- noticia 1 -->
				<div class="row m-0">
				  <div class=" p-0 col-12 col-lg-6 mt-3 mt-lg-0 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
					  <!-- texto -->
					  <div class="col-12 ">
						<label class=""><a class="texto-amarillo f-negrita f-size-18 fuente-institucional" href="<?php the_permalink() ?>"><?php the_title() ?> </a></label> 
						<!-- <label class="texto-azul fuente-institucional f-size-14">IX MUESTRA DE PROYECTOS DE INGENIERÍA</label> -->
					  </div>
					  <div class="col-12">
						<p class="texto-azul pt-sans text-justify"><?php the_excerpt() ?></p>
					  </div>
					  <div class="col-12 col-sm-10 sin-texto-subrayado texto-azul-os pt-sans"><?php echo get_the_date() ?> / <?php the_category(' , ') ?> / <?php the_author() ?></div>
					  <div class="col-12 col-sm-2">
						<a href="<?php the_permalink() ?>" class="p-2 border borde-azul badge badge-pill hover-amarillo hover-texto-blanco float-right texto-azul sin-texto-subrayado fuente-institucional">Leer Más</a>
					  </div>
					</div>
				  </div>
				  <div class="m-0 p-0 col-12 col-lg-6 mt-3 mt-lg-0" >
					<div class="row">
					  <!-- imagen -->
					  <div class="col-12">
						<a class="p-0" href="<?php the_permalink() ?>">
						  <?php // check if the post or page has a Featured Image assigned to it.
						  if ( has_post_thumbnail() ) {
							the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'width' => '100%']);
						  } ?>
						</a>
					  </div>
					</div>
				  </div>
				</div>
				<!-- fin noticia 1 -->
				<?php
				} else {
				//echo "IMPAR".$contador;
				//insira o seu código para quando o post for ímpar
				?>
				<!-- noticia 2 -->
				<div class="row m-0">
				  <div class="m-0 p-0 col-12 col-lg-6 mt-3 mt-lg-0 order-2 order-lg-1">
					<div class="row">
					  <!-- imagen -->
					  <div class="col-12">
						<a class="p-0" href="<?php the_permalink() ?>">
						  <?php // check if the post or page has a Featured Image assigned to it.
						  if ( has_post_thumbnail() ) {						
							 the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'width' => '100%']);
						  } ?>
						</a>
					  </div>
					</div>
				  </div>
				  
				  <div class="p-0 col-12 col-lg-6 d-flex justify-content-center align-items-center order-1 order-lg-2">
					<div class="row col-12 pr-lg-4 ">
					  <!-- texto -->
					  <div class="col-12">
						<label class=""><a class="texto-amarillo f-negrita f-size-18 fuente-institucional" href="<?php the_permalink() ?>"><?php the_title() ?> </a></label> 
						<!-- <label class="texto-azul fuente-institucional f-size-14">IX MUESTRA DE PROYECTOS DE INGENIERÍA</label> -->
					  </div>
					  <div class="col-12">
						<p class="texto-azul pt-sans text-justify"><?php the_excerpt() ?></p>
					  </div>
					  <div class="col-12 col-sm-10 sin-texto-subrayado"><?php echo get_the_date() ?> / <?php the_category(' / ') ?> / <?php the_author() ?></div>
					  <div class="col-12 col-sm-2">
						<a href="<?php the_permalink() ?>" class="p-2 border borde-azul badge badge-pill hover-amarillo hover-texto-blanco texto-azul sin-texto-subrayado fuente-institucional">Leer Más</a>
					  </div>
					</div>
				  </div>
				</div>
				<!-- fin noticia 2 -->
				<?php
				}
				
			/*******************************************************************************/

			endwhile;
			wp_reset_postdata();
			else :
				_e('<div class="col-12 mx-auto pt-sans texto-azul-os bg-warning text-center f-size-18"> No hay publicaciones, gracias por su visita </div> ');
			endif;
			
		?>
		</div>
		<!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->
		<!-- ----------------SECCIÓN NOTICIAS------------------------- -->
		<?php include_once('slider/noticias-autonoma-de-narino.php');?>
		
		<!-- informacion de quienes somos  -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">¿Quiènes Somos?</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Preguntas Frecuentes</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Módulo Introductorio</a>
						
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong class="pt-sans"> MISIÓN</strong>
								<p>AUNAR VIRTUAL, es una dependencia de la Corporación Universitaria Autónoma de Nariño que fomenta el desarrollo académico y administrativo de los programas presenciales y de educación a distancia modalidad virtual a través de ambientes virtuales.</p>
								<strong class="pt-sans"> VISIÓN</strong>
								<p>AUNAR VIRTUAL, como unidad de desarrollo académico y administrativo, evoluciona hacia el liderazgo en la educación superior en ambientes virtuales que posibiliten la excelencia académica, la cultura investigativa y la responsabilidad social, para contribuir al desarrollo integral y sostenible a nivel regional, nacional e internacional.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/organigrama-aunar-virtual.png"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-justify texto-azul-os">
								
								<strong> 1.	¿Cómo ingresar al Campus Aunar Virtual?</strong>
								<p>Lo primero que se debe hacer para ingresar a la Plataforma Moodle es contar con acceso a Internet, seleccionar el navegador: Firefox Mozilla o Google Chrome e ingresar a la siguiente dirección: www.aunar.edu.co</p>
								<p>En la parte derecha del menú de navegación horizontal, se deberá seleccionar el enlace Aunar Virtual para ingresar al Portal Virtual, donde encontrará la siguiente opción de ingreso al Campus Aunar Virtual:</p>
								
								<p>También puede ingresar digitando la dirección Web http://campus.aunar.edu.co y ubíquese en el bloque Entrar, a continuación, ingrese los datos de cuenta: usuario y clave del Portal Virtual.</p>
								<br>
								<strong> 2.	¿Olvidé mi contraseña, qué debo hacer?</strong>
								
								<p>Ubíquese en el bloque Entrar y de clic en el enlace ¿Ha extraviado la contraseña? A continuación, indique su correo electrónico o la cuenta con que ingresa a la plataforma (Solo uno de los datos, no los dos). Luego le llegará un mensaje a su correo electrónico registrado; en éste debe confirmar que desea cambiar la contraseña (Clic en el enlace azul que aparece en su correo electrónico). Luego le llegará otro correo con la nueva clave. Cuando ingrese a la plataforma con la nueva contraseña se le pedirá que cambie la clave para poder continuar. Le recomendamos que utilice una contraseña que sea fácil de recordar para usted.</p>
								<br>
								<strong>3.	¿Cómo cambio mi contraseña?</strong>
								
								<p>Para cambiar la contraseña, ingrese a la plataforma con los datos actuales de la cuenta. Ahora de clic sobre su nombre en la parte superior derecha de la pantalla. Al final de la página que contiene su información, encontrará el botón Cambiar contraseña de clic ahí, llene el formulario y guarde los cambios.</p>
								<br>
								<strong>4.	¿Cómo me matriculo en los cursos del Campus Aunar Virtual?</strong>
								
								<p>Los cursos del Campus Aunar Virtual hacen parte de programas académicos modalidad virtual (Tecnología y Técnico) que ofrece la Corporación Universitaria Autónoma de Nariño, por lo tanto, no pueden ser matriculados por personal externo a la institución. Es importante mencionar, que las matriculas en línea se pueden realizar a través del link http://inscripciones.aunar.edu.co/ Para Mayor información contáctenos en la siguiente dirección de correo mercadeo@aunar.edu.co o edgar.munoz@aunar.edu.co</p>
								<br>
								<strong> 5.	¿En qué momento puedo ingresar al Campus Aunar Virtual?</strong>
								<p>El Campus Aunar Virtual está disponible las 24 horas del día. La hora de ingreso la define el usuario dependiendo de su tiempo y sus ocupaciones. </p>
								<br>
								<strong> 6.	¿Cuándo se presenten dificultades para el ingreso a la Plataforma y desarrollo de las actividades que ésta ofrece, con quién puedo comunicarme?</strong>
								<p>Se debe tener en cuenta el tipo de dificultad que se presenta, es decir, si el inconveniente se debe a olvido de la contraseña deberá remitirse al link: ¿Olvidé mi contraseña, qué debo hacer? Si se trata de una falla técnica deberá contactarse con la persona que administra la Plataforma Virtual a través del siguiente correo edgar.munoz@aunar.edu.co. Por el contrario, si los problemas que usted encuentre están relacionados directamente con los contenidos, actividades y/o evaluaciones deberá comunicarse con el tutor encargado del mismo, por vía celular o correo electrónico; datos que usted conocerá con anterioridad. </p>
								<br>
								<strong> 7.	¿Cómo participar en el desarrollo de foros y demás actividades que ofrece el Campus Aunar Virtual?</strong>
								<p>Se recomienda revisar y aplicar las indicaciones del manual de usuario: Manual de usuario </p>
								<br>
								<strong> 8.	¿Qué hacer en caso de incumplir los cronogramas de actividades y evaluaciones?</strong>
								<p>En el caso de presentarse dicha situación lo más recomendable es comunicarse con el tutor, manifestando los motivos por los cuales no se cumplió oportunamente con la entrega de las actividades o evaluaciones. Por lo anterior, el estudiante deberá someterse a los criterios que el docente estipule para tal caso, cumpliendo con los nuevos tiempos programados para su presentación. </p>
								<br>
							</div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Video Introductorio al Campus Aunar Virtual - Modalidad a Distancia</strong>
							</div>
							<div class="col-12 p-2 px-md-5 text-center">
								<br><iframe width="100%" height="450" src="https://www.youtube.com/embed/61j6RbMcbV8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								Es un programa que informa y educa a la comunidad universitaria sobre la importancia que tiene el respeto consigo mismo, con el auto cuidado y el aprendizaje significativo de estilos de vida que favorezcan la salud física y mental.
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/bienestar/promocion_y_prevencion.jpg"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-deportivas" role="tabpanel" aria-labelledby="v-pills-act-deportivas-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Durante la realización de cualquier actividad deportiva y cultural AUNAR, se tiene acompañamiento de personal experto en cada área y que garantice las condiciones óptimas en cada evento.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/bienestar/acompanamiento_actividades_deportivas.jpg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- galeria de programas virtuales -->
		<div class="container-fluid"><div class="row"><h1 class="fuente-institucional mx-auto py-5 texto-azul-os text-center fuente-big"> <strong> Programas <br> Modalidad Virtual <br>y a Distancia </strong></h1></div></div>
		<div class="container-fluid py-5">
			<div class="row d-flex justify-content-around">
				<div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-5">
					
					<div class="col-12 p-0 content_img_virtual">
						<a href="plantas-aromaticas.php" target="plantas-aromaticas">
							<img class="mx-auto img-fluid img_virtual" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/1.jpg" >
							<div class="cont_texto_principal">
								<div class="texto_principal fuente-institucional f-negrita texto-azul-os">Transformación de Plantas Aromáticas
								</div>
							</div>
							<div class="cont_texto_secundario">
								<div class="texto_secundario pt-sans texto-azul-os f-negrita">El Técnico Profesional Egresado de la Corporación Universitaria Autónoma de Nariño, esta capacitado para realizar los procesos de limpieza, selección, clasificación, secado, extracción y empaque de plantas ...
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 p-0 ">
						<div class="p-2 fondo-gris-os fuente-institucional texto-azul-os">
							<br> <strong>Facultad: </strong><br>
							Agronomía, Veterinaria y Afines
							<br>
							<br> <strong>Programa: </strong><br>
							Técnico en la Tranformación de Plantas Aromáticas
							<br>
							<br> <strong>Código SNIES: </strong><br>
							101340
							<br>
							<br> <strong>Título a obtener: </strong><br>
							Técnico Profesional en la Transformación de Plantas Aromáticas
							<br>
							<br> <strong>Duración: </strong><br>
							4 Semestres
							<br>
							<br> <strong>Modalidad: </strong><br>
							Virtual
							<br>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-5">
					
					<div class="col-12 p-0 content_img_virtual">
						<a href="mercadeo-agropecuario.php" target="mercadeo-agropecuario">
							<img class="mx-auto img-fluid img_virtual" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/2.jpg" >
							<div class="cont_texto_principal">
								<div class="texto_principal fuente-institucional f-negrita texto-azul-os">Mercadeo Agropecuario
								</div>
							</div>
							<div class="cont_texto_secundario">
								<div class="texto_secundario pt-sans texto-azul-os f-negrita">Identificar variedades, características, valor nutricional, potencial industrial y de exportación de los productos agropecuarios a comercializar ...
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 p-0 ">
						<div class="p-2 fondo-gris-os fuente-institucional texto-azul-os">
							<br> <strong> Facultad: </strong> <br>
							Agronomía, Veterinaria y Afines
							<br>
							<br> <strong> Programa: </strong> <br>
							Tecnología en Mercadeo Agropecuario
							<br>
							<br> <strong> Código SNIES: </strong> <br>
							101341
							<br>
							<br> <strong> Título a obtener: </strong> <br>
							Tecnólogo en Mercadeo Agropecuario
							<br>
							<br> <strong> Duración: </strong> <br>
							6 Semestres
							<br>
							<br> <strong> Modalidad: </strong> <br>
							Virtual
							<br>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-5">
					
					<div class="col-12 p-0 content_img_virtual"> <a href="administracion-empresas-a-distancia.php" target="administracion-empresas">
						<img class="mx-auto img-fluid img_virtual" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/3.jpg" >
						<div class="cont_texto_principal">
							<div class="texto_principal fuente-institucional f-negrita texto-azul-os">Administración de Empresas
							</div>
						</div>
						<div class="cont_texto_secundario">
							<div class="texto_secundario pt-sans texto-azul-os f-negrita">El profesional egresado del programa de Administración de Empresas de la Corporación Universitaria Autónoma de Nariño, está capacitado para realizar procesos de gestión empresarial ...
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 p-0 ">
					<div class="p-2 fondo-gris-os fuente-institucional texto-azul-os">
						<br> <strong>Facultad: </strong><br>
						Economía, Administración, Contaduría y Afines
						<br>
						<br> <strong>Programa: </strong><br>
						Administración de Empresas
						<br>
						<br> <strong>Código SNIES: </strong><br>
						102322
						<br>
						<br> <strong>Título a obtener: </strong><br>
						Administrador/a de Empresas
						<br>
						<br> <strong>Duración: </strong><br>
						9 Semestres
						<br>
						<br> <strong>Modalidad: </strong><br>
						Distancia
						<br>
					</div>
				</div>
				
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-5">
				
				<div class="col-12 p-0 content_img_virtual">
					<a href="contaduria-publica-a-distancia.php" target="contaduria-publica">
						<img class="mx-auto img-fluid img_virtual" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/4.jpg" >
						<div class="cont_texto_principal">
							<div class="texto_principal fuente-institucional f-negrita texto-azul-os">Contaduría Pública
							</div>
						</div>
						<div class="cont_texto_secundario">
							<div class="texto_secundario pt-sans texto-azul-os f-negrita">El Profesional en Contaduría Pública de la Corporación Universitaria Autónoma de Nariño, estará capacitado para el manejo y dirección de la información financiera y contable, con formación humana, ética, mentalidad investigativa, innovadora ...
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 p-0 ">
					<div class="p-2 fondo-gris-os fuente-institucional texto-azul-os">
						<br> <strong> Facultad: </strong><br>
						Economía, Administración, Contaduría y Afines
						<br>
						<br> <strong> Programa: </strong><br>
						Contaduría Pública
						<br>
						<br> <strong> Código SNIES: </strong><br>
						102519
						<br>
						<br> <strong> Título a obtener: </strong><br>
						Contador/a Público/a
						<br>
						<br> <strong> Duración: </strong><br>
						9 Semestres
						<br>
						<br> <strong> Modalidad: </strong><br>
						Distancia
						<br>
					</div>
				</div>
				
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-2 pb-5">
				
				<div class="col-12 p-0 content_img_virtual">
					<a href="ingenieria-informatica.php" target="ingenieria-informatica">
						<img class="mx-auto img-fluid img_virtual" width="100%" src="<?php bloginfo('template_url')?>/img/virtual/5.jpg" >
						<div class="cont_texto_principal">
							<div class="texto_principal fuente-institucional f-negrita texto-azul-os">Ingeniería Informática
							</div>
						</div>
						<div class="cont_texto_secundario">
							<div class="texto_secundario pt-sans texto-azul-os f-negrita">El ingeniero informático egresado de la Corporación Universitaria Autónoma de Nariño es capaz de desarrollar sistemas informáticos innovadores que apliquen conceptos científicos y tecnológicos; formados en principios éticos, sociales ...
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 p-0 ">
					<div class="p-2 fondo-gris-os fuente-institucional texto-azul-os">
						<br> <strong>Facultad: </strong><br>
						Ingeniería, Arquitectura, Urbanismo y Afines
						<br>
						<br> <strong>Programa: </strong>
						Ingeniería Informática
						<br>
						<br> <strong>Código SNIES: </strong>
						102883
						<br>
						<br> <strong>Título a obtener: </strong>
						Ingeniero/a Informático/a
						<br>
						<br> <strong>Duración: </strong>
						9 Semestres
						<br>
						<br> <strong>Modalidad: </strong>
						Distancia
						<br>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- galeria de programas virtuales -->
	
	<?php  get_footer(); ;?>
	
	
</body>
</html>