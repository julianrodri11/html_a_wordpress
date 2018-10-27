<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>CULTURA - BIENESTAR UNIVERSITARIO - AUTÓNOMA DE NARIÑO</title>
		
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
/bienestar/cultura.jpg"/>
				</div>
			</div>
		</div>
		
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_bienestar.php');?>
		
		<div class="container-fluid">
			<div class="row px-lg-5 m-lg-3 pt-sans texto-azul-os text-justify border-bottom borde-amarillo">
				<p>La Corporación Universitaria Autónoma de Nariño, considera que las actividades Culturales son todas aquellas manifestaciones materiales, espirituales e ideológicas que representan a una o varias personas y que las identifican como parte de un conjunto mayor de individuos, la cultura es una creación del ser humano que contribuye a una formación integral, los patrones de conducta, sistemas de creencias, principios y formas de vida derivan de la cultura, que en pocas palabras es la suma de todas las formas de arte, de amor y de pensamiento, que con el paso del tiempo han permitido a los seres humanos ser más libres.</p>
				<p>Por medio de las actividades culturales se aprenden y adquieren habilidades, conocimientos, costumbres, hábitos entre otros, en general la cultura logra que adquiriera actitudes y aptitudes propias de ella, para ir adquiriendo dichas pautas que son necesarias para las relaciones interpersonales y las prácticas culturales. De tal manera que coadyuve a que la comunidad “AUNAR” logre identificarse, desarrollando actividades artísticas y expresar a través de las diferentes prácticas culturales sentimientos, sensaciones y diferentes manifestaciones que genera la expresión corporal o musical, de esta manera se debe desarrollar el área cultural, artística y social, impulsando la práctica, la creación y la difusión.</p>
				<p>Resultan ser sumamente importantes las prácticas culturales en el desarrollo de la comunidad “AUNAR”, por lo que La oficina de Bienestar institucional de la Corporación Universitaria Autónoma de Nariño a través de la Coordinación de cultura, incentiva y fomenta a realizar actividades culturales dentro de su vida cotidiana, académica y laboral, brindando la posibilidad de participar en eventos sociales y culturales, representando a nuestra institución a nivel regional y nacional.
				En ese orden de ideas la Coordinación de cultura ofrece diferentes actividades como - Música - Danza - Teatro</p>
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
										<label class="f-negrita">JOSÉ LUIS YARPAZ BENAVIDES </label><br>
										Coordinador de deporte y cultura <br>
										Lic. En educación Física<br>
										Candidato A Magister En Deporte Y Actividad Física
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