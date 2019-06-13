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
					
					
						<?php echo '<a class="pt-sans texto-azul sin-texto-subrayado f-negrita" data-toggle="tooltip" data-placement="auto" title="Ver Evento" href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> '; ?>
					</div>
					<div class="col-12 col-lg-6 p-2">
							
						<?php echo '<a class="pt-sans texto-azul sin-texto-subrayado" href="' . get_permalink($recent["ID"]) . '">'; ?>Fecha evento: 
						<?php if( get_field('dia_evento',$recent["ID"]) ): ?>
				    			<strong> <?php the_field('dia_evento',$recent["ID"]); ?> </strong>							    			
						<?php endif; ?>
						<?php if( get_field('mes_evento',$recent["ID"]) ): ?>							    			
				    			<strong> <?php the_field('mes_evento',$recent["ID"]); ?> </strong>							    			
						<?php endif; ?>
						<?php if( get_field('year_evento',$recent["ID"]) ): ?>							    			
				    			<strong> <?php the_field('year_evento',$recent["ID"]); ?></strong>
						<?php endif; ?>						
						</a>
					</div>								
					<div class="col-12 col-lg-2 d-flex align-items-center">		
							<a href="single-eventos" class="ml-0 p-1 border borde-azul badge badge-pill bg-white hover-amarillo texto-azul sin-texto-subrayado hover-sin-borde">Ver más</a>		
					</div>
				</div>
			</div>
					<?php
					++$contador;
		}
		//fin for each
		wp_reset_query();
		?>