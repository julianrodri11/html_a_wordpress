<?php
	/*
		Template Name: Plantilla Noticias
	*/
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS*/  get_header();   ?>
		<title>PORTAL DE NOTICIAS - AUTÓNOMA DE NARIÑO</title>
		<meta name="description" content="Leidy Mera, estudiante de la Corporación Universitaria Autónoma de Nariño, sede Ipiales, ha ganado importantes reconocimientos a nivel mundial debido a su pasión y dedicación por el ciclo montañismo ¡Conozcamos esta desafiante historia!">
		<meta name="keywords" content="Leidy Mera Gana importantes reconocimientos">
		<meta property="og:image" content="<?php bloginfo('template_url')?>/img/noticias/slider-portal-de-noticias.jpg">
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
					/noticias/portal-de-noticias-aunar.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-3 p-2 fondo-azul text-white">

					<?php get_sidebar() ?>					
					
				</div>
				<div class="col-12 col-md-9 p-lg-5 fondo-gris-c">
					<div class="row d-flex justify-content-center fuente-institucional">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
						<div class="col-12 col-md-8 text-center f-negrita texto-azul border-bottom borde-azul py-4 f-size-18">
							<?php the_title(); ?>
						</div>
						<div class="col-12 col-md-8 pt-sans f-italica p-lg-4 text-justify">
							<p>
								<?php the_excerpt(); ?>
							</p>
						</div>
						<div class="col-12 col-md-8">
							<div class="row d-flex justify-content-center">
								<!-- imagen -->
								<div class="col-12">          							
									<?php // check if the post or page has a Featured Image assigned to it.
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid ', 'width' => '100%']);
									} ?>									
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<!-- <img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/noticias/slider-portal-de-noticias.jpg"/> -->
						</div>
						<div class="col-12 col-md-8 text-justify pt-3">
							<?php the_content(); ?>
						</div>
						<div class="col-12 col-md-8 texto-azul-os pt-sans py-4">Publicado por: <?php the_author() ?> / Fecha: <?php echo get_the_date() ?> / Categoría (s): <?php the_category(' , ') ?> 
						</div>												

						<?php
							endwhile;
							else :
								_e('<div class="col-12 mx-auto pt-sans texto-azul-os bg-warning text-center f-size-18"> No hay publicaciones, gracias por su visita </div> ');
							endif;
						?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- <div class="col-12 fuente-institucional texto-azul f-negrita pt-3">COMPARTE ESTE CONTENIDO</div>
				<div class="col-12 fuente-institucional texto-azul f-negrita pt-3">INCONOS DE REDES SOCIALES</div> .-->
				<!-- <a href="https://www.facebook.com/sharer/sharer.php?u=http://190.14.239.67/portal-noticias-aunar.php" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a> -->
			</div>
		</div>
		<!-- selider de noticias -->
		<?php
			include_once('slider/noticias-autonoma-de-narino.php');
		get_footer(); ; ?>
		<!-- fin selider de noticias -->
		
	</body>
</html>