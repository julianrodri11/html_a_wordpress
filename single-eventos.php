<?php	/*	Template Name: Plantilla Eventos  */ ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS*/  get_header();   ?>
		<title>PORTAL DE EVENTOS - AUTÓNOMA DE NARIÑO</title>
		<meta name="description" content="Bienvenido al portal de eventos de la Corporación universitaria autónoma de Nariño, aquí estará informado de todos los eventos que se programen en la universidad ">
		<meta name="keywords" content="Portal de eventos AUNAR">
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/eventos.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php'); ?>
		<div class="container-fluid">
			<div class="row">

				<!-- COLUMNA DEL LADO IZQUIERDO DE EVENTOS  -->
				<div class="col-12 col-md-3 fondo-azul text-white">
					<?php /*sidebar creado en functions para habilitar widget*/ ///get_sidebar() ?>
					<div class="col-12 text-center my-5 ">
						<label class="fuente-institucional texto-amarillo f-size-16 f-negrita">Eventos Recientes</label>
					</div>
					<?php
						// numberpost para mostrar hasta 10 post o noticias
						$args = array('post_type' => 'eventos', 'numberposts' => '10', 'post_status' => 'publish');
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
					?>					
					<div class="row my-3 hvr-underline-from-center transparencia-hover border-warning border-bottom m-1 d-flex align-items-center">						
						<div class="col-4 p-0 py-1">							
							<a class="p-0" href="<?php the_permalink($recent["ID"]) ?>">
								<?php //verifica si el post tiene imagen destacada
								if ( has_post_thumbnail( $recent["ID"]) ) {
									echo  get_the_post_thumbnail($recent["ID"],'post-thumbnail',['class' => 'img-fluid z-index-20', 'width' => '95%']);
								}
								else
								{
								//sino,  en caso de que el post no tenga imagen se le agrega una por defecto 
								?>
												<img src="<?php bloginfo('template_url')?>/img/eventos.jpg" class="img-fluid z-index-20 wp-post-image" alt=""  width="95%">
								<?php
								 }
								?>
							</a>
						</div>
						<div class="col-8 p-0 m-0 ">

							<?php echo '<a class="pt-sans texto-amarillo sin-texto-subrayado" href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> '; ?>
							<br>Fecha: 
							<?php if( get_field('dia_evento',$recent["ID"]) ): ?>
							    			<strong> <?php the_field('dia_evento',$recent["ID"]); ?> </strong>							    			
									<?php endif; ?>
									<?php if( get_field('mes_evento',$recent["ID"]) ): ?>							    			
							    			<strong> <?php the_field('mes_evento',$recent["ID"]); ?> </strong>							    			
									<?php endif; ?>
									<?php if( get_field('year_evento',$recent["ID"]) ): ?>							    			
							    			<strong> <?php the_field('year_evento',$recent["ID"]); ?></strong>
									<?php endif; ?>
						</div>						
					</div>	<?php
					}
					//fin for each
					wp_reset_query();
					?>
					
				</div>

				<!-- COLUMNA DEL LADO DERECHO DE EVENTOS  -->

				<!-- EN ESTA SECCIÓN SE ESTABLECE LOS DETALLES DEL EVENTO -->
				<div class="col-12 col-md-9 p-lg-5 fondo-gris-c">
					<div class="row d-flex justify-content-center fuente-institucional">
						<?php
							if ( have_posts() && have_posts(array('post_type' => 'eventos', 'post_status' => 'publish'))) : while ( have_posts() ) : the_post();
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
									<?php // Verifica si el post tiene una imagen, si es verdadero: la muestra, 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid ', 'width' => '100%']);
									} 
									else
										{
										//sino,  en caso de que el post no tenga imagen se le agrega una por defecto 
										?>
											<img src="<?php bloginfo('template_url')?>/img/eventos.jpg" class="img-fluid z-index-20 wp-post-image" alt=""  width="95%">
										<?php
										}
									?>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8 text-center f-negrita texto-azul py-3 f-size-16 d-flex justify-content-center">
							Información del evento
						</div>
						<div class="col-12 col-md-8 text-justify">
							<div class="row pb-4 texto-azul">
								<div class="col-md-4 col-12 d-flex justify-content-center p-1 f-size-16">
									<?php if( get_field('dia_evento') ): ?>
							    			<strong> Día: &nbsp </strong> <?php the_field('dia_evento'); ?>
									<?php endif; ?>
								</div>
								<div class="col-md-4 col-12 d-flex justify-content-center p-1 f-size-16">
									<?php if( get_field('mes_evento')): ?>
							    			<strong> Mes:&nbsp </strong> <?php the_field('mes_evento'); ?>
									<?php endif; ?>
								</div>
								<div class="col-md-4 col-12 d-flex justify-content-center p-1 f-size-16">
									<?php if( get_field('year_evento')): ?>
							    			<strong> Año: &nbsp </strong> <?php the_field('year_evento'); ?>
									<?php endif; ?>
								</div>
								<div class="col-12 d-flex justify-content-center p-1 f-size-16">
									<?php if( get_field('lugar_evento')): ?>
							    			<strong> Lugar: &nbsp </strong> <?php the_field('lugar_evento'); ?>
									<?php endif; ?>
								</div>
							</div>
							<?php #
										#CAMPOS PERSONALIZADOS DE ACF PARA EVENTOS
										#
							 ?>							
							

							<?php the_content(); ?>

						</div>
						<div class="col-12 col-md-8 texto-azul-os pt-sans py-4">Publicado por: <?php the_author() ?> / Fecha: <?php echo get_the_date() ?> / Categoría (s): <?php the_category(' , ') ?>
						</div>
						<?php
							endwhile;
							wp_reset_postdata();
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
		<!-- slider de noticias -->
		<?php
			include_once('slider/noticias-autonoma-de-narino.php');
		get_footer(); ; ?>
		<!-- fin slider de noticias -->
		
	</body>
</html>