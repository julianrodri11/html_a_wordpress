<!-- -- título noticias ------------ -->
<div class="container-fluid mt-3 ">
  <div class="row d-flex justify-content-center">
    <div class="col-lg-8 col-sm-12 col-md-6text-center border-bottom borde-azul">
      <div class="row">
        <div class="col-12 pt-1 pl-1 mt-sm-5 py-3 text-center"><h1 class=" mt-0 fuente-institucional texto-azul f-negrita">Noticias</h1></div>
        <div class="col-12 pb-2 texto-azul f-size-18 fuente-institucional">¡Conoce las principales acciones y logros de nuestra comunidad!</div>
      </div>
    </div>
  </div>
</div>
<!-- -- Fin título noticias -------- -->
<div class="container-fluid m-0 py-5 border-bottom borde-azul">
  
  <?php
  
  if ( have_posts() ) :
  $contador = 0;
  while ( have_posts() ) : the_post();
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
        <div class="col-12 col-sm-10 sin-texto-subrayado texto-azul-os pt-sans"><?php echo get_the_date() ?> / <?php the_category(' / ') ?> / <?php the_author() ?></div>
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
  ?>
  
  <?php endwhile;
  else :
    _e('<div class="col-12 mx-auto pt-sans texto-azul-os bg-warning text-center f-size-18"> No hay publicaciones, gracias por su visita </div> ');
  endif; ?>
</div>