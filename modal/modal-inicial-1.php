<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title fuente-institucional texto-azul">Bienvenidos</h4>
        <button type="button" class="close" data-dismiss="modal">X</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <!-- slider inicial -->

        <div id="carouselExampleIndicators_inicial" class="carousel slide animated zoomInDown" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators_inicial" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators_inicial" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators_inicial" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <picture>
                <source class="img-fluid" width="100%" alt="Noticias aunar"
                  srcset="<?php bloginfo('template_url')?>/img/Pendones-inscripciones-2018-2.webp" type="image/webp">
                <img class="img-fluid" width="100%" alt="Noticias aunar"
                  src="<?php bloginfo('template_url')?>/img/Pendones-inscripciones-2018-2.jpg">
              </picture>
              <!--div class="carousel-caption">
              <h3></h3>
              <p></p>
            </div-->
            </div>
            <div class="carousel-item">
              <picture>
                <source width="100%" alt="Noticias aunar"
                  data-srcset="<?php bloginfo('template_url')?>/img/Pendones-inscripciones-2018-2.webp" type="image/webp" class="lazyload img-fluid">
                <img width="100%" alt="Noticias aunar"
                  data-src="<?php bloginfo('template_url')?>/img/Pendones-inscripciones-2018-2.jpg" class="lazyload img-fluid">
              </picture>
              <!--div class="carousel-caption">
                <h3>Lorem Fuga, nesciunt </h3>
                <p>voluptatibus consectetur, consequuntur nemo necessitatibus.</p>
              </div-->
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators_inicial" role="button" data-slide="prev">
            <span class="fondo-azul-oscuro p-2" aria-hidden="true">
              <span class="carousel-control-prev-icon"></span>
              <!--i class="fa fa-chevron-left text-white f-size-18" ></i-->
            </span>
            <span class="sr-only">Previus</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators_inicial" role="button" data-slide="next">
            <span class="fondo-azul-oscuro  p-2" aria-hidden="true">
              <span class="carousel-control-next-icon"></span>
              <!--i class="fa fa-chevron-right text-white f-size-18" ></i-->
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Fin slider inicial -->
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn fondo-azul-oscuro text-white" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>