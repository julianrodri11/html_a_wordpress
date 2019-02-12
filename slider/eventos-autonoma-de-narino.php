<?php 
function evento($columna1,$columna2)
{
?>

        <div class="row p-1 hover-texto-blanco eventos transparencia-hover hover-borde-blanco d-flex align-items-center texto-azul">
          <div class="col-12 <?php echo $columna1; ?> d-flex justify-content-center justify-content-sm-start">
            <div class=" hexagon p-3">
              <div class="row pt-2 text-center ">
                <span class="col-12 fuente-institucional f-negrita f-size-16">20</span>
                <span class="col-12 fuente-institucional f-negrita f-size-16">Junio</span>
              </div>
            </div>
          </div>
          <div class="col-12 <?php echo $columna2; ?> d-flex justify-content-center justify-content-sm-start">
            <div class="row texto-azul pt-sans">
              <div class="col-lg-12 text-center text-lg-left text-md-left f-negrita f-size-16"><label class="border-bottom borde-azul">
                <a class="p-0 sin-texto-subrayado texto-azul-os hover-texto-blanco" data-toggle="tooltip" data-placement="auto" title="Ver Evento" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
              </label></div>
              <div class="col-lg-12 text-center text-lg-left text-md-left">
                  LUGAR:
              </div>
              <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
            </div>
          </div>
        </div>


<?php
} 
?>





<?php
//$args = array( 'category_name=noticias' => 4 );
//$args = array('category_name' => 'noticias' );

$my_query=new WP_Query(array('post_type' => 'eventos','posts_per_page' => 9,'post_status' => 'publish'));
if ( $my_query -> have_posts() ) :
?>
                    <div id="mas_eventos" class="carousel vert slide " data-ride="carousel" data-interval="4000">
                        <div class="carousel-inner">


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
                          <div class="carousel-item p-1 p-sm-4 <?php echo$active;?> ">
                            
                              <?php
                              }
                               if($contador%2==0)
                                {
                                  $columna1='col-sm-4';
                                  $columna2='col-sm-8';
                                }
                                else
                                {
                                  $columna1=' pl-sm-5 col-sm-5';
                                  $columna2='col-sm-7';

                                }
                              evento($columna1,$columna2);//se llama a la noticia que esta definida más arriba
                              // de 0 a 2 hay tres noticias y se cierra con los dos divs el primer slider
                              // del 2 al 5 hay tres noticias y lo mismo... si se quiere colocar 12  noticias se debe colocar 
                              // en el if $contador==11
                              if($contador == 2 || $contador == 5 || $contador == 8)
                              {
                                echo"</div>";
                              }
            
                  /*******************************************************************************/
                  ++$contador;
            
                  endwhile;
                  wp_reset_postdata();

                  ?>
                  
                  </div>
                  <!-- Left and right controls -->
                 <a class="carousel-control-prev" href="#mas_eventos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mas_eventos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <!-- fin slider -->
              </div>
        
          
    <?php
    else :
      _e('<div class="col-12 mx-auto pt-sans texto-azul-os bg-warning text-center f-size-18"> No hay eventos, gracias por su visita </div> ');
    endif;
    
?>
            <!-- ******************************** para abajo no tocar -->
          