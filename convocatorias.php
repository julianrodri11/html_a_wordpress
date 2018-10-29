<?php /* Template Name: Plantilla Convocatorias */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS*/  get_header();   ?>
		<title>CONVOCATORIAS AUTÓNOMA DE NARIÑO</title>
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img/convocatorias/convocatorias-aunar.jpg"/>					
				</div>
			</div>
		</div>
		<?php  include_once('secciones/menu2.php') ?>
		<div class="container-fluid pb-4">
			<div class="container fuente-institucional ">
				<div class="row ">
					<div class="col-12 pt-5">
						<h1 class="texto-azul text-center f-negrita fuente-institucional">Formatos Institucionales</h1>
					</div>
				</div>
				<div class="row m-2">
					<div class="col-12 col-lg-12 text-center pt-sans texto-azul">Si crees que cumples con estas características, puedes acceder a los siguientes</div>
				</div>
				<div class="row m-2 border-bottom borde-azul pb-3">
					<div class="col-12 col-lg-12 ">
						<div class="row f-negrita  texto-azul  f-size-18 d-flex justify-content-center">
							<div class="col-12 col-lg-6 p-2 m-1 fondo-amarillo text-center hover-texto-blanco pointer"><a class="texto-azul-os sin-texto-subrayado" href="<?php bloginfo('template_url')?>/docs/footer/Hoja_Vida_Docentes.doc" data-toggle="tooltip" data-placement="auto" title="Descargar formato" target="_blanckhvdd">Hoja de vida para docentes</a></div>
							<div class="col-12 col-lg-6 p-2 m-1 fondo-amarillo text-center hover-texto-blanco pointer"><a class="texto-azul-os sin-texto-subrayado" href="<?php bloginfo('template_url')?>/docs/footer/Hoja_Vida_Administrativos.doc" data-toggle="tooltip" data-placement="auto" title="Descargar formato" target="_blanckhvad">Hoja de vida para administrativos</a></div>
						</div>
					</div>
				</div>
				<div class="row m-2">
					<div class="col-12 p-3"><h1 class="texto-azul text-center f-negrita fuente-institucional">Convocatorias</h1></div>
				</div>
				<!-- divs de  docentes y administrativos -->
				<div class="row m-2 text-center fuente-institucional texto-azul  ">
					<div class="col-12 col-lg-6 ">
						<div class="row">
							<div class="col-12 p-2 f-size-18 f-negrita fondo-gris-c hover-texto-amarillo hover-transparente ">Docentes</div>
							<div class="col-12 fondo-gris-c py-2">
								<!-- acordion Docentes-->						
								<div id="accordion" class="accordion">
									<div class="card mb-0 sin-borde">										
										<div class="row d-flex justify-content-center">
											<!-- lado ziquierdo -->
											<div class="col-12 pt-sans texto-azul-c">
												<!-- convocatoria 1 -->
												<div class="card-header collapsed fondo-gris-c f-negrita" data-toggle="collapse" href="#collapseOne">
													<a class="card-title pt-sans texto-azui-os f-negrita a-new pointer f-myriad hover-texto-amarillo ">
														DOCENTE FACULTADES DE INGENIERÍA MECÁNICA Y ELECTRÓNICA
													</a>
												</div>
												<div id="collapseOne" class="collapse" data-parent="#accordion" >
													<div class="card-body p-4 text-justify fondo-gris-c">
														<div class="row text-center">
															<div class="col-12"><a class="texto-azul-os" href="<?php bloginfo('template_url')?>/docs/convocatorias/CONVOCATORIA_2018_2_IM.pdf" target="convocatoria_1"> Descargar términos de la Convocatoria </a><br><br></div>
															<div class="col-12"><a href="<?php bloginfo('template_url')?>/docs/Resultados_convocatoria_para_xyz.pdf" target="convocatoria_1"> <img src="<?php bloginfo('template_url')?>/img/convocatorias/resultados.png"></a></div>
															<div class="col-12"><h3 class="pt-sans">Resultados</h3> </div>
														</div>
													</div>
												</div>
												<!-- fin convocatoria 1 -->												
												<!-- convocatoria 2 -->
												<div class="card-header collapsed fondo-gris-c f-negrita" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<a class="card-title pt-sans texto-azui-os f-negrita a-new pointer f-myriad hover-texto-amarillo">
														DOCENTE FACULTAD DE CIENCIAS ADMINISTRATIVAS Y CONTABLES
													</a>
												</div>
												<div id="collapseTwo" class="collapse" data-parent="#accordion" >
													<div class="card-body p-4 text-justify fondo-gris-c">
														<div class="row text-center">
															<div class="col-12"><a class="texto-azul-os" href="<?php bloginfo('template_url')?>/docs/convocatorias/CONVOCATORIA_2018_2_IM.pdf" target="convocatoria_2"> Descargar términos de la Convocatoria </a><br><br></div>
															<div class="col-12"><a href="<?php bloginfo('template_url')?>/docs/Resultados_convocatoria_para_xyz.pdf" target="convocatoria_2"> <img src="<?php bloginfo('template_url')?>/img/convocatorias/resultados.png"></a></div>
															<div class="col-12"><h3 class="pt-sans">Resultados</h3> </div>
														</div>
													</div>
												</div>
												<!-- fin convocatoria 2 -->												
											</div>
										</div>
									</div>
								</div>								
								<!-- fin acordeón docentes -->
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 ">
						<div class="row">
							<div class="col-12 p-2 f-size-18 f-negrita fondo-gris-c hover-texto-amarillo  hover-transparente">Administrativos</div>
							<div class="col-12 fondo-gris-c py-2">
								<!-- acordion Docentes-->								
								<div id="accordion2" class="accordion">
									<div class="card mb-0 sin-borde">										
										<div class="row d-flex justify-content-center">
											<!-- lado ziquierdo -->
											<div class="col-12 pt-sans texto-azul-c">
												<!-- convocatoria 1 -->
												<div class="card-header collapsed fondo-gris-c f-negrita" data-toggle="collapse" href="#collapse3">
													<a class="card-title pt-sans texto-azui-os f-negrita a-new pointer f-myriad hover-texto-amarillo ">
														PERSONAL ADMINISTRATIVO PARA REALIZAR ...
													</a>
												</div>
												<div id="collapse3" class="collapse" data-parent="#accordion2" >
													<div class="card-body p-4 text-justify fondo-gris-c">
														<div class="row text-center">
															<div class="col-12"><a class="texto-azul-os" href="<?php bloginfo('template_url')?>/docs/convocatorias/CONVOCATORIA_2018_2_IM.pdf" target="convocatoria_1"> Descargar términos de la Convocatoria </a><br><br></div>
															<div class="col-12"><a href="<?php bloginfo('template_url')?>/docs/Resultados_convocatoria_para_xyz.pdf" target="convocatoria_1"> <img src="<?php bloginfo('template_url')?>/img/convocatorias/resultados.png"></a></div>
															<div class="col-12"><h3 class="pt-sans">Resultados</h3> </div>
														</div>
													</div>
												</div>
												<!-- fin convocatoria 1 -->
												<!-- convocatoria 2 -->
												<div class="card-header collapsed fondo-gris-c f-negrita" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
													<a class="card-title pt-sans texto-azui-os f-negrita a-new pointer f-myriad hover-texto-amarillo">
														PERSONAL ADMINISTRATIVO PARA REALIZAR ...
													</a>
												</div>
												<div id="collapse4" class="collapse" data-parent="#accordion2" >
													<div class="card-body p-4 text-justify fondo-gris-c">
														<div class="row text-center">
															<div class="col-12"><a class="texto-azul-os" href="<?php bloginfo('template_url')?>/docs/convocatorias/CONVOCATORIA_2018_2_IM.pdf" target="convocatoria_2"> Descargar términos de la Convocatoria </a><br><br></div>
															<div class="col-12"><a href="<?php bloginfo('template_url')?>/docs/Resultados_convocatoria_para_xyz.pdf" target="convocatoria_2"> <img src="<?php bloginfo('template_url')?>/img/convocatorias/resultados.png"></a></div>
															<div class="col-12"><h3 class="pt-sans">Resultados</h3> </div>
														</div>
													</div>
												</div>
												<!-- fin convocatoria 2 -->												
											</div>
										</div>
									</div>
								</div>
								<!-- fin acordeón docentes -->
							</div>
						</div>
					</div>					
					</div> 		<!-- fin docentes y administrativos -->					
				</div>
			</div>
			<br>
			<?php  get_footer(); ; ?>			
		</body>
	</html>