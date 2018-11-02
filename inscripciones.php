<?php   /*  Template Name: Plantilla Inscripciones */ ?>
<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <?php /*ENLACES DE LIBRERIAS*/  get_header();   ?>
        <title>SISTEMA DE INSCRIPCIONES EN LÍNEA AUNAR</title>
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
                    <img class="img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/inscripciones/sistema-inscripciones-en-linea.jpg"/>
                </div>
            </div>
        </div>
        <?php  include_once('secciones/menu2.php') ?>
        <div class="container-fluid pb-4">
            <div class="container fuente-institucional ">
                <div class="row ">
                    <div class="col-12 p-3 py-5"><h1 class="texto-azul f-negrita"> Sistema de inscripciones en línea </h1></div>
                </div>
                <div class="row m-2">
                    <div class="col-12 col-lg-2 fondo-amarillo-intenso">
                        <div class=""><h1 class="text-center text-lg-left text-white f-negrita p-2">1.</h1></div>
                    </div>
                    <div class="col-12 col-lg-10 texto-azul-os">Diríjase a la sección Preinscripción y diligencie los datos solicitados en el formulario.</div>
                </div>
                <div class="row m-2">
                    <div class="col-12 col-lg-3 fondo-amarillo-intenso">
                        <div class=""><h1 class="text-center text-lg-left text-white f-negrita p-2">2.</h1></div>
                    </div>
                    <div class="col-12 col-lg-9 text-justify texto-azul-os">Una vez registre los datos realice clic en el botón Enviar. Sus datos serán validados y verificados en nuestra base de datos</div>
                </div>
                <div class="row m-2">
                    <div class="col-12 col-lg-4 fondo-amarillo-intenso">
                        <div class=""><h1 class="text-center text-lg-left text-white f-negrita p-2">3.</h1></div>
                    </div>
                    <div class="col-12 col-lg-8 text-justify texto-azul-os">Los aspirantes a programas presenciales, virtuales o a distancia deben descargar el formulario e imprimir una copia, descargar e imprimir el formato de pago, cancelar el valor de la inscripción y anexar los requisitos solicitados.</div>
                </div>
                <div class="row m-2">
                    <div class="col-12 col-lg-5 fondo-amarillo-intenso">
                        <div class=""><h1 class="text-center text-lg-left text-white f-negrita p-2">4.</h1></div>
                    </div>
                    <div class="col-12 col-lg-7 text-justify texto-azul-os">Si el estudiante es aspirante a un programa virtual envíe los requisitos solicitados en medio físico a la siguiente dirección: Carrera 28 No 19 - 24 Centro - San Juan de Pasto - Nariño. Sus datos registrados quedarán consignados en nuestra base de datos.</div>
                </div>
                <div class="row m-2">
                    <div class="col-0 col-lg-4 ">
                        <div class=""></div>
                    </div>
                    <div class="col-12 col-lg-8"><div class="col-9 mx-auto fuente-institucional text-center p-2 fondo-azul-oscuro text-white">Por favor revise en la parte inferior la sección requisitos y admitidos para obtener mayor información.</div></div>
                </div>
            </div>
        </div>
        <!-- PREINSCRIPCIÓN -->
        <div class=" contenedor_preinscripcion">
            <img src="<?php bloginfo('template_url')?>/img/inscripciones/admisiones-autonoma-de-narino.jpg" alt="Norway" style="width:100%;">
            <div class="text-block">
                <div class=" text-center">
                    <div class="col-12 text-center"><h1 class=" f-negrita fuente-institucional texto-azul">Inscripción</h1> </div>
                    <div class="col-12 texto-azul">Para realizar su Inscripción</div>
                    <div class="col-12"><a class="btn text-light fondo-azul-oscuro pt-sans hvr-forward" href="http://inscripciones.aunar.edu.co/inscripcion.php" target="_blanck">Click aquí</a> </div>
                </div>
            </div>
        </div>
        <!-- REQUISITOS -->
        <div class="container-fluid ">
            <div class="row  ">
                <div class="col-12 col-lg-12 ">
                    <div class="row mt-5 pt-3 d-flex justify-content-center">
                        <div class="col-12 col-lg-5  fondo-amarillo-intenso text-center"><h1 class=" f-negrita fuente-institucional texto-azul">Requisitos</h1> </div>
                    </div>
                </div>
                <div class=" col-12 col-lg-12 pl-5 pt-3 pb-3   ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-lg-6 texto-azul ">
                            <div class="col-12">*Copia de documento de identidad ampliado 150% (Tarjeta de identidad, cédula de ciudadanía o contraseña)</div>
                            <div class="col-12">*Copia a color de resultados PRUEBAS SABER 11 (ICFES)</div>
                            <div class="col-12">*Copia del diploma de bachillerato</div>
                            <div class="col-12">*Copia del acta de grado</div>
                            <div class="col-12">*Certificado médico</div>
                            <div class="col-12">*Examen de serología</div>
                            <div class="col-12">*Registro civil</div>
                            <div class="col-12">*Copia carné de salud</div>
                            <div class="col-12">*Libreta militar</div>
                            <div class="col-12">*1 Foto fondo azul 3x4</div>
                            <div class="col-12">*1 Carpeta ocio color café</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- consulta de admitidos -->
        <div class="container-fluid ">
            <div class="row fondo-gris-os mt-5">
                <div class="container">
                    <div class="col-12 p-2 "><h1 class=" f-negrita fuente-institucional texto-azul text-center">Consulta de admitidos</h1></div>
                </div>
            </div>
            <div class="container border-bottom borde-azul pb-4">
                <div class="mt-4   ">
                    <div class="col-12"><h3 class="p-2 f-negrita fuente-institucional texto-azul text-center">Aspirantes a programas presenciales y a distancia</h3></div>
                    <div class="col-12 text-justify pt-sans texto-azul">Todo aspirante de programa presencial y a distancia debe realizar su preinscripción por medio de esta página. Posteriormente, cancelar el valor de inscripción en la cuenta especicada en su recibo de pago. Una vez consignado el pago, deben acercarse a la Ofc. de Mercadeo para legalizar su inscripción con los documentos requeridos y el soporte de pago de inscripción.
                        <div class="col-12  mt-3">
                            <div class="row d-flex justify-content-center">
                                <a href="#" class="p-2 mr-3 border borde-azul badge badge-pill hover-amarillo hover-texto-blanco texto-azul sin-texto-subrayado">PDF ADMITIDOS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Aspirantes a programas de pregado -->
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="container">
                    <div class="col-12 p-2 text-center"><h1 class=" f-negrita fuente-institucional texto-azul">Aspirantes a programas virtuales</h1></div>
                </div>
            </div>
            <div class="container">
                <div class=" fuente-institucional texto-azul ">
                    <div class="col-12 text-center pt-sans texto-azul m-3">Todo aspirante de programa virtual debe realizar su prescripción por medio de esta página y enviar al correo mercadeo@aunar.edu.co los requisitos solicitados para legalizar su inscripción o hacerlos llegar por medio físico a la sede principal de San Juan de Pasto - Carrera 28 No. 19-24</div>
                </div>
            </div>
        </div>
        <br>
        <?php  get_footer(); ; ?>
    </body>
</html>