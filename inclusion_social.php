<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>INCLUSIÓN SOCIAL - BIENESTAR UNIVERSITARIO - AUTÓNOMA DE NARIÑO</title>
		
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
/bienestar/inclusion_social.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_bienestar.php');?>
		<div class="container-fluid fondo-gris-c p-lg-5">
			
			<div class="row px-lg-5 m-lg-2 pt-sans texto-azul-os text-justify">
				<div class="col-12 col-md-6 p-lg-5"><p>La coordinación de inclusión social es la instancia facilitadora del proceso de educación inclusiva superior. para ello está  comprometida  inicialmente  con la caracterización, estudio e identificación de barreras y alternativas de acción  para lograr que tanto  estudiantes  pertenecientes a la institución  que han sido social e históricamente excluidos por sus condiciones de capacidades especiales, vulnerabilidad ,diversidad cultural y/o Formas de vida, como la comunidad educativa en general  puedan ejercer su derecho a la participación y sean tenidos en cuenta en las decisiones que les involucran fomentando el reconocimiento de la diversidad de la población sujeto, identificando  y minimizando las barreras para el aprendizaje y la participación y maximizar los recursos que apoyen los procesos.
				</p>
				<h3 class="fuente-institucional f-negrita texto-azul-os mx-auto">Objetivo General</h3>
				<p>Contribuir en la Construcción y desarrollo de un modelo de educación que responda a una política institucional inclusiva y a las características de la población estudiantil, garantizandoles el derecho a la educación, a la oportunidad y a la igualdad, mediante una oferta educativa pertinente de calidad que respete y los proyecte en campos laborales de alta demanda en el marco de la interculturalidad, diversidad y equidad, para su desarrollo integral como seres humanos.</p>
			</div>
			<div class="col-12 col-md-6 p-lg-5 border-left borde-amarillo borde-2">
				<div class="row ">
					<div class="col-12 py-4"><h3 class="fuente-institucional f-negrita"> Misión</h3></div>
					<div class="col-12 text-justify pt-sans">Alcanzar cobertura a una población que por razón de vulnerabilidad, capacidades especiales o formas de vida están en riesgo de exclusión y hacerla partícipe del desarrollo social. </div>
				</div>
				<div class="row ">
					<div class="col-12 py-4"><h3 class="fuente-institucional f-negrita"> Visión</h3></div>
					<div class="col-12 text-justify pt-sans">Promover el establecimiento dinámico y desarrollo de una política de educación inclusiva superior que dé respuesta pertinente a las barreras de aprendizaje y que aporte a la generación de una sociedad incluyente. </div>
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
							<div class="col-12 col-md-6 text-center">
								<img src="<?php bloginfo('template_url')?>/img
/bienestar/deportes.png" class="align-self-center mr-3 rounded-circle img-fluid" >
							</div>
							<div class="col-12 col-md-6 text-center text-md-left">
								<h4 class="fuente-institucional texto-amarillo f-negrita">PROFESIONAL ENCARGADO</h4>
								<div class="pt-sans">
									<label class="f-negrita">T.S. ALBA LUCIA PORTILLO NARVAEZ </label><br>
									Coordinadora Inclusión Social <br>
									Correo electrónico: Coordinación.inclusion@aunar.edu.co
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