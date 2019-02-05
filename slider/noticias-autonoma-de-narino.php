<?php 
function noticia()
{
?>
<div class="col-12 col-md-6 col-lg-4 ">
  <!-- noticia -->
  <div class="card ">
    <div class="container-img">
      <!-- Foto desde post -->
      
        <?php // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid image-hov', 'width' => '100%']);
        } ?>
      
      <!-- Fin foto desde post -->
      <div class="middle-hov">
        <!-- <div class="text-hov fuente-institucional f-negrita "><?php echo get_the_date() ?> / <?php the_category(' , ') ?> / <?php the_author() ?></div> -->
        <div class="text-hov fuente-institucional f-negrita ">
          <a class="p-0 sin-texto-subrayado texto-azul-os hover-texto-blanco" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <h5 class="card-title f-negrita fuente-institucional">
        <a class="texto-amarillo f-negrita f-size-18 fuente-institucional sin-texto-subrayado" data-toggle="tooltip" data-placement="auto" title="Ver Noticia" href="<?php the_permalink() ?>">
          <?php the_title() ?> 
        </a>
      </h5>
      <label class="card-text pt-sans text-justify texto-azui"><?php the_excerpt(); ?></label>
      <div class="row">
        <div class="col-12 d-flex ">
          <a href="<?php the_permalink() ?>" class="p-2 mx-auto border borde-azul badge badge-pill hover-amarillo hover-texto-blanco texto-azul sin-texto-subrayado fuente-institucional">Leer Más</a>        </div>
      </div>
    </div>
  </div>
  <!-- fin noticia -->
</div>
<?php
} 
?>





<?php
//$args = array( 'category_name=noticias' => 4 );
//$args = array('category_name' => 'noticias' );

$my_query=new WP_Query(array('offset' => 3,'posts_per_page' => 9));
if ( $my_query -> have_posts() ) :
?>

          <!-- slider de noticias -->
          <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-12 ">
                <!-- silider -->
                <div id="Mas_Noticias" class="carousel slide " data-ride="carousel" data-interval="4000">
                  <!-- Indicators -->
                  <!-- <ul class="carousel-indicators ">
                    <li data-target="#myCarousel" class="fondo-azul-oscuro" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" class="fondo-azul-oscuro" data-slide-to="1"></li>
                    <li data-target="#myCarousel" class="fondo-azul-oscuro" data-slide-to="2"></li>
                  </ul> -->
                  <!-- The slideshow -->
                  <div class="carousel-inner ">


                <?php
                $contador = 0;
                        while ($my_query -> have_posts() ) : $my_query->the_post();
                /*******************************************************************************/
                                //si se aumtenta el numero de entradas recientes  se debe colocar $contador==9 .... ==12 etc 
                          if( $contador == 0 || $contador == 3 || $contador == 6)
                          {     
                                //if para definir el slider activo, solo debe haber 1 sección activa 
                                //si se quisiera mostrar activo de primero el silder 2  
                                //se debe cambiar en el if así $contador==3 
                                if($contador==0)
                                $active="active";
                                else
                                $active="";
                          ?>
                          <div class="carousel-item p-1 p-sm-4 <?php echo$active;?> fondo-slider-noticias">
                            <div class="row p-2 m-1 m-sm-5 ">
                              <?php
                              }
                              
                              noticia();//se llama a la noticia que esta definida más arriba
                              // de 0 a 2 hay tres noticias y se cierra con los dos divs el primer slider
                              // del 2 al 5 hay tres noticias y lo mismo... si se quiere colocar 12  noticias se debe colocar 
                              // en el if $contador==11
                              if($contador == 2 || $contador == 5 || $contador == 8)
                              {
                                echo"</div></div>";
                              }
            
                  /*******************************************************************************/
                  ++$contador;
            
                  endwhile;
                  wp_reset_postdata();

                  ?>
                  
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#Mas_Noticias" data-slide="prev">
                    <span class="fondo-azul-oscuro p-2 " aria-hidden="true">
                      <span class="carousel-control-prev-icon"></span>
                    </span>
                  </a>
                  <a class="carousel-control-next" href="#Mas_Noticias" data-slide="next">
                    <span class="fondo-azul-oscuro p-2 " aria-hidden="true">
                      <span class="carousel-control-next-icon"></span>
                    </span>
                  </a>
                </div>
                <!-- fin slider -->
              </div>
            </div>
          </div>
    <?php
    else :
      _e('<div class="col-12 mx-auto pt-sans texto-azul-os bg-warning text-center f-size-18"> No hay publicaciones, gracias por su visita </div> ');
    endif;
    
?>
            <!-- ******************************** para abajo no tocar -->
          