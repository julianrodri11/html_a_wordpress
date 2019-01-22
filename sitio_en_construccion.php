<?php /* Template Name: Plantilla SITIO EN CONTRUCCCION */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>SITIO EN CONTRUCCION - AUTÓNOMA DE NARIÑO</title>

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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/sitioenconstruccion_aunar.jpg" alt="sitio en construcción - AUNAR"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php');?>



		<!-- footer -->
		<?php // get_footer(); ;?>


	</body>
</html>