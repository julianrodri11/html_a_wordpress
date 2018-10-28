<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
    <!--TÍTULO DE LA PÁGINA Y SEO-->
    <title>.::AUNAR::. - .::CORPORACIÓN UNIVERSITARIA AUTÓNOMA DE NARIÑO::.</title>
    <meta name="description" content="Es una institución de Educación Superior comprometida con la Cultura, la Ciencia, la Investigación; la excelencia en la formación de profesionales íntegros y el liderazgo en el desarrollo social.">
    <meta name="keywords" content="Corporación Universitaria Autónoma de Nariño, AUNAR">
    <meta property="og:image" content="<?php bloginfo('template_url')?>/img/logo-autonoma-de-narino.png"/>
    
  </head>
  <body>
    <!-- --------------------MODAL INICIAL----------------------- -->
    <?php include_once('modal/modal-inicial-1.php');?>
    <!-- -------------------FIN MODAL INICIAL-------------------- -->
    <!-- ------------------MODAL TRADUCTOR----------------------- -->
    <?php include_once('secciones/modal-traductor.php');?>
    <!-- ----------------FIN MODAL TRADUCTOR--------------------- -->
    <!-------------------MENÚ PRINCIPAL-------------------------- -->
    <?php include_once('secciones/menu1.php');?>
    <!-------------------FIN MENÚ PRINCIPAL----------------------- -->
    <!----------------------- LOGO CENTRAL ----------------------- -->
    <?php include_once('secciones/logo-central.php');?>
    <!-- -----------------------FIN LOGO CENTRAL------------------ -->
    <!-- -----------------SLIDER---------------------------------- -->
    <?php include_once('slider/slider-1.php');?>
    <!-- -----------------FIN SLIDER------------------------------ -->
    <!-- ----------------MENÚ INSTITUCIONAL----------------------- -->
    <?php include_once('secciones/menu2.php');?>    
    <!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->
    <!-- ----------------MENÚ INSTITUCIONAL----------------------- -->
    <?php include_once('modal/modal-contactenos.php');?>
    <!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->
    <!-- ------------------------DOCUMENTOS----------------------- -->
    <div class="container-fluid fondo-gris-c ">
      <div class="row ">
        <div class="col-lg-3 pt-5 pb-4 col-md-3 col-sm-12 d-flex justify-content-center align-items-center">
          <div class="row p-3 fondo-azul text-whited-flex justify-content-center">
            <div class="pl-1 pr-1 "><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/CALENDARIO_ACADEMICO_2018_II.pdf" target="_blank">Calendario Académico 2018-2</a></div>
            <div class="pl-1 pr-1 "><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/CALENDARIO_ACADEMICO_2018_1.pdf" target="_blank">Calendario Académico 2018-1</a></div>
            <div class="pl-1 pr-1 "><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/CALENDARIO_ACADEMICO_2017_2.pdf" target="_blank">Calendario Académico 2017-2</a></div>
            <div class="pl-1 pr-1 "><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/CALENDARIO_ACADEMICO_2017_1.pdf" target="_blank">Calendario Académico 2017-1</a></div>
          </div>
        </div>
        <div class="col-lg-7 pt-5 pb-4 col-md-6 col-sm-12 text-center ">
          <div class="row ">
            <div class="col-12 ">
              <a class="hvr-underline-from-center pb-2" href="docs/derechos_pecuniarios2018.pdf"  data-toggle="tooltip" data-placement="bottom" title="Click aquí" target="_blank">
              <img  class=" img-fluid" alt="Derechos pecuniarios autonoma de nariño" src="<?php bloginfo('template_url')?>/img/derechos.png"></a>
            </div>
            <div class="col-12 p-5 texto-azul fuente-institucional">Los siguientes son los montos de los derechos pecuniarios por servicios académicos y administrativos para el año 2018, debidamente aprobados por el Consejo Directivo de la Corporación Universitaria Autónoma de Nariño</div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 d-flex justify-content-center align-items-center">
          <div class="pl-1 pt-5 pb-4 text-center  border-left borde-azul">
            <h3 class=" mt-0 pt-0 fuente-institucional-bold texto-azul f-negrita hvr-underline-from-center pointer">
            <a class="texto-azul-os sin-texto-subrayado" href="docs/plan_inversion.pdf" data-toggle="tooltip" data-placement="auto" title="Abrir" target="_blanckhva">Plan de Inversión</a></h3>
          </div>
        </div>
      </div>
    </div>
    <!-- --------------------FIN DOCUMENTOS----------------------- -->
    <!-- ----------------DONDE QUIERES ESTUDIAR------------------- -->
    <div class="container-fluid mb-5">
      <div class="row fondo-mundo">
        <div class="row col-12">
          <div class="row col-12 col-lg-6 col-xl-7 p-2  d-flex align-content-center justify-content-center izquierda_derecha">
            <div class="col-11 col-lg-10 fondo-amarillo mt-2 hvr-wobble-horizontal">
              <h1 class="f-negrita fuente-institucional text-center">¿Donde quieres estudiar?</h1>
            </div>
            <div class="col-12 col-lg-10 text-center text-light fuente-institucional p-3">
              <strong>AUNAR</strong> te permite elegir tu programa de interés para que estudies en cualquier sede del país
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 p-2 izquierda_derecha">
            <div class="row  d-flex justify-content-end mr-lg-2">
              <div class="row col-12 col-lg-8 p-2 m-1">                
                <form class="col-12">                  
                  <div class="form-group pt-sans">
                    <select class="form-control" id="exampleSelect1">
                      <option>Seleccione Sede</option>
                      <option value="CALI">CALI</option>
                      <option value="CARTAGENA">CARTAGENA</option>
                      <option value="IPIALES">IPIALES</option>
                      <option value="PASTO">PASTO</option>
                      <option value="PUTUMAYO">PUTUMAYO</option>
                      <option value="VILLAVICENCIO">VILLAVICENCIO</option>
                    </select>
                  </div>
                  <div class="form-group pt-sans">
                    <select class="form-control" id="exampleSelect3">
                      <option>Seleccione Modalidad</option>
                      <option value="">Distancia</option>
                      <option value="">Presencial</option>
                      <option value="">Virtual</option>
                    </select>
                  </div>
                  <div class="form-group pt-sans">
                    <select class="form-control" id="exampleSelect2">
                      <option>Seleccione Programa</option>
                      <option value=""> Administración de Empresas  </option>
                      <option value=""> Contaduría Publica  </option>
                      <option value=""> Decoración de Interiores  </option>
                      <option value=""> Ingeniería Electrónica  </option>
                      <option value=""> Ingeniería Informática  </option>
                      <option value=""> Ingeniería Mecánica </option>
                      <option value=""> Seguridad y Salud en el Trabajo </option>
                      <option value=""> Técnico Laboral Asistente en Comercio Exterior  </option>
                      <option value=""> Técnico Laboral Auxiliar Contable y Financiero  </option>
                      <option value=""> Técnico Laboral Auxiliar en Diseño Gráfico  </option>
                      <option value=""> Técnico Laboral Auxiliar en Sistemas Informáticos </option>
                      <option value=""> Técnico Laboral en Cocina </option>
                      <option value=""> Técnico Laboral por Competencias en Diseño y Confección de Modas  </option>
                      <option value=""> Técnico Profesional en procesos Administrativos </option>
                      <option value=""> Tecnología en Control de Procesos Electrónicos  </option>
                      <option value=""> Tecnología en Gestión Empresarial </option>
                      <option value=""> Tecnología en Gestión en Salud Ocupacional  </option>
                      <option value=""> Tecnología en Mecánica Dental </option>
                      <option value=""> Tecnología en Mercadeo Agropecuario </option>
                      <option value=""> Tecnología en Producción Gráfica  </option>
                      <option value=""> Tecnología en Transformación de Plantas Aromáticas  </option>
                    </select>
                  </div>                  
                  <button type="button" class="btn btn-primary fondo-amarillo float-right f-negrita pt-sans hvr-forward">Buscar</button>
                </form>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------- FIN DONDE QUIERES ESTUDIAR-------------- -->
    <!-- ----------------SECCIÓN NOTICIAS------------------------- -->
    <?php include_once('noticias/noticia-1.php');?>
    <!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->
    <!-- ----------------SECCIÓN NOTICIAS------------------------- -->
    <?php include_once('slider/noticias-autonoma-de-narino.php');?>
    <div class="container-fluid p-0 m-0">
      <div class="row d-flex justify-content-center p-0 m-0">
        <div class="col-12 col-lg-12 p-2 fondo-azul-oscuro">
          <div class="row p-0 m-0">
            <div class="col-12 col-sm-6 text-center text-sm-right pr-sm-4 p-0 m-0 ">
              <h4 class="texto-amarillo f-negrita fuente-institucional my-1 ">Portal Noticias</h4>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-left pl-sm-4 p-0 m-0 ">
              <a href="portal-noticias-aunar.php" class="my-1 p-2 border borde-azul badge badge-pill bg-white hover-amarillo texto-azul sin-texto-subrayado hover-sin-borde">Más Noticias</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->
    <!-- ----------------OFERTAS DE INTERES ---------------------- -->
    <div class="container-fluid fondo-gris-os p-4 ">
      <div class="row ">
        <div class="col-12 col-lg-12">
          <div class="row texto-azul d-flex justify-content-center">
            <div class="col-10 pl-5 pr-5 pb-2 text-center fuente-institucional f-negrita f-size-16">Recuerda que la Corporación Universitaria Autónoma de Nariño, también cuenta con programas de formación continua para que perfecciones tu perfil profesional.</div>
            <div class="col-10 text-center text-center"><strong> AUNAR</strong> te ofrece la siguiente oferta educativa: <a class="texto-amarillo-oscuro f-negrita" href="">Cursos, </a><a class="texto-amarillo-oscuro f-negrita" href="">Diplomados, </a><a class="texto-amarillo-oscuro f-negrita" href="">Seminarios</a> </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 d-flex align-items-center justify-content-center ">
          <div class="text-center ">
            <a href="#" class="p-2 badge badge-pill bg-white hover-amarillo  texto-azul sin-texto-subrayado hover-sin-borde">Ver Oferta</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------------FIN OFERTAS DE ITENRES--------------------- -->
    <!-- -----------------MENU ICONOS----------------------------- -->
    <?php include_once('secciones/menu3.php');?>
    <!-- -----------------FIN MENÚ ICONOS------------------------- -->
    <!-- video institucional -->
    <?php include_once('modal/modal-video-institucional.php');?>
    <!-- fin video institucional -->
    <!-- -----------------EVENTOS--------------------------------- -->
    <div class="container-fluid fondo-amarillo fondo-eventos">
      <div class="row">
        <div class="col-lg-12 p-2 d-flex align-items-center justify-content-center justify-content-sm-center justify-content-md-center e_arriba_abajo">
          
          <div class="p-1 mt-5 mt-sm-5 bd-highlight text-center pr-3">
            <h1 class="my-1 fuente-institucional texto-azul f-negrita">Eventos</h1>
            <label class="texto-azul fuente-institucional f-size-18">¡Entérate de nuestras novedades!</label>
          </div>
        <!-- div class="p-1 bg-primary bd-highlight">Flex item 2</div>
        <div class="p-1 bg-white bd-highlight">Flex item 3</div> -->
      </div>
      <div class="col-lg-12  ">
        <div class="row p-3 ">
          <div class="col-md-6 p-2 hvr-grow-shadow izquierda_derecha d-flex align-items-center" >
            <div class="col p-2 text-center "><a href="radio-aunar-stereo"><img class="img-fluid" width="100%" alt="AUNAR ESTEREO" src="<?php bloginfo('template_url')?>/img/aunar-stereo.png"/></a></div>
            <!-- <div class=" texto-azul text-center ">
              <div class="row">
                <div class="col-12 mb-0 p-0 fuente-institucional ">AUNAR STEREO</div>
                <div class="col-12 "><label class="f-size-14">¡Tú también puedes ser un creador de espacios de diálogo!</label></div>
              </div>
            </div> -->
          </div>
          <div class="col-md-6 p-3 izquierda_derecha d-flex align-items-center">
            <div class="col-12 p-lg-4 mb-3">              
              <!-- seccion de eventos  -->
              <!-- evento 1 -->
              <div class="row p-1 hover-texto-blanco eventos transparencia-hover hover-borde-blanco d-flex align-items-center texto-azul">
                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                  <div class=" hexagon p-3">
                    <div class="row pt-2 text-center ">
                      <span class="col-12 fuente-institucional f-negrita f-size-16">20</span>
                      <span class="col-12 fuente-institucional f-negrita f-size-16">Junio</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 d-flex justify-content-center justify-content-sm-start">
                  <div class="row texto-azul pt-sans">
                    <div class="col-lg-12 text-center text-lg-left text-md-left f-negrita f-size-16"><label class="border-bottom borde-azul">II Encuentro de Bibliotecas.</label></div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evetnos 2 -->
              <div class="row p-1 pl-sm-5 hover-texto-blanco eventos transparencia-hover hover-borde-blanco d-flex align-items-center texto-azul">
                <div class="col-12 col-sm-5 d-flex justify-content-center justify-content-sm-start">
                  <div class=" hexagon p-3">
                    <div class="row pt-2 text-center ">
                      <span class="col-12 fuente-institucional f-negrita f-size-16">17</span>
                      <span class="col-12 fuente-institucional f-negrita f-size-16">Julio</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 d-flex justify-content-center justify-content-sm-start">
                  <div class="row texto-azul pt-sans">
                    <div class="col-lg-12 text-center text-lg-left text-md-left f-negrita f-size-16"><label class="border-bottom borde-azul">II Encuentro de Bibliotecas.</label></div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evento 3 -->
              <div class="row p-1 hover-texto-blanco eventos transparencia-hover hover-borde-blanco d-flex align-items-center texto-azul">
                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                  <div class=" hexagon p-3">
                    <div class="row pt-2 text-center ">
                      <span class="col-12 fuente-institucional f-negrita f-size-16">30</span>
                      <span class="col-12 fuente-institucional f-negrita f-size-16">Agosto</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 d-flex justify-content-center justify-content-sm-start">
                  <div class="row texto-azul pt-sans">
                    <div class="col-lg-12 text-center text-lg-left text-md-left f-negrita f-size-16"><label class="border-bottom borde-azul">II Encuentro de Bibliotecas.</label></div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- fin sección eventos -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ----------------FIN EVENTOS------------------------------ -->
  <!-- -----------------IMAGENES ENLACES DE EXTERNOS----------------------------- -->
  <?php include_once('secciones/enlaces-externos-aunar.php') ?>
  <!-- -----------------FIN ENLACES DE EXTERNOS------------------------- -->
  <!-- ----------------PIE DE PÁGINA---------------------------- -->
  <?php  get_footer();  ?>
  <!-- -------------------FIN PIE DE PÁGINA--------------------- -->
</body>
</html>