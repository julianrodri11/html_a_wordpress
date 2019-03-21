<?php /* 
				CODIGO PARA MOSTRAR EVENTOS EN LAS SECCIONES DE 
				vicerrectoria
				Bienestar
				proyeccion institucional 
				internacionalizacion
				cian
		 */
 ?>
			<div class="col-12 col-md-11">
				<div class="row">
					<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Eventos</h3></div>
					<div class="col-4 fondo-azul-oscuro texto-amarillo d-flex justify-content-center align-items-center">
						<a href="single-eventos" class="my-1 p-2 border borde-azul badge badge-pill bg-white hover-amarillo texto-azul sin-texto-subrayado hover-sin-borde">Más Eventos</a>
					</div>
				</div>
			</div>
				<?php
			// numberpost para mostrar hasta 10 post o noticias
			$args = array('post_type' => 'eventos', 'numberposts' => '4', 'post_status' => 'publish');
			$recent_posts = wp_get_recent_posts( $args );
			$contador=0;
			foreach( $recent_posts as $recent ){
				// se valida si es para colocar el color 
				if ($contador%2==0) {
					$fondo="fondo-gris-os";
				} else {
					$fondo="fondo-gris-c";
				}
				
		?>
			<div class="col-12 col-md-11 <?php echo $fondo; ?> hvr-underline-from-center">
				<div class="row">
					<!-- <div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div> -->
					<div class="col-12 col-lg-4 p-2 d-flex align-items-center">								
					
						<a class="p-0" data-toggle="tooltip" data-placement="auto" title="Ver Evento" href="<?php the_permalink($recent["ID"]) ?>">
							<?php // Verifica si el post tiene una imagen, si es verdadero: la muestra, 
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
					<div class="col-12 col-lg-8 p-2 ">
							
						<?php echo '<a class="pt-sans texto-azul sin-texto-subrayado f-negrita" data-toggle="tooltip" data-placement="auto" title="Ver Evento" href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> '; ?><br>Fecha de publicación: <?php echo date( 'd - m - Y', strtotime( $recent['post_date'] ) ); ?>
						
					</div>								
				</div>
			</div>
					<?php
					++$contador;
		}
		//fin for each
		wp_reset_query();
		?>