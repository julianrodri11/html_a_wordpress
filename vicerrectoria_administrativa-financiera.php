<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<?php /*ENLACES DE LIBRERIAS */  get_header();   ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>VICERRECTORÍA ADMINISTRATIVA FINANCIERA - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="<?php bloginfo('template_url')?>/img
/institucional/vicerrectoria_administrativa_y_financiera_portada.jpg" alt="VICERRECTORÍA ADMINISTRATIVA FINANCIERA"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_institucional.php');?>
		<!-- Slider -->
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-5">
					<?php include_once('slider/slider-1.php');?>
				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-7 py-5 py-sm-0">
					<div class="row">
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Noticias</h3></div>
								<div class="col-4 p-2 fondo-azul-oscuro texto-amarillo">Conoce más</div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Contador:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Padre:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">El Parche AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin slider-->
		<!-- informacion de vicerrectoría administrativa y financiera-->
		<div class="container-fluid fondo-gris-c p-lg-5">
			
			<div class="row px-lg-5 m-lg-2 pt-sans texto-azul-os text-justify">
				
				<div class="col-12 col-md-6 p-lg-5 d-flex justify-content-center align-items-center">
					<div class="row">
						<div class="col-12 text-center">
							<h3 class="fuente-institucional f-negrita texto-azul-os mx-auto">Descripción de la Vicerrectoría <br>Administrativa y Financiera</h3>
						</div>
						<div class="col-12">
							<br>
							<p class="pt-sans text-justify">
								La Vicerrectoría Administrativa y Financiera es un
								departamento que se encuentra bajo la dirección del al
								Rectoría. Forma parte del Consejo Directivo y de los Comités de
								Rectoría, Financiero y de Compras.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 p-lg-5 border-left borde-amarillo borde-2">
					<div class="row ">
						<div class="col-12 py-4"><h3 class="fuente-institucional f-negrita">Misión</h3></div>
						<div class="col-12 text-justify pt-sans">
							<p>
								La Vicerrectoría Administrativa y financiera tiene como misión brindar
								soporte a la Institución mediante la gestión de los procesos
								operacionales de las dependencias adscritas a ella y del manejo de la
								información que contribuye a salvaguardar e incrementar el
								patrimonio de la Institución.
							</p>
						</div>
					</div>
					<div class="row ">
						<div class="col-12 py-4"><h3 class="fuente-institucional f-negrita">Visión</h3></div>
						<div class="col-12 text-justify pt-sans">
							<p>
								Conformarse como un departamento que brinda servicios de calidad
								a las diferentes áreas mediante una adecuada planificación
								contribuyendo al alcance de los objetivos institucionales.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- personal encargado -->
		<div class="container-fluid py-5">
			<!-- linea amarilla -->
			<div class="row">
				<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-3"></div>
			</div>
			
			<div class="row ">
				
				<!-- imagen de personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 text-center text-lg-right mx-auto ">
							<!-- aqui va todo lo que se quiera centrar -->
							<img src="<?php bloginfo('template_url')?>/img
/institucional/analeonor_zambrano_rosero.png" alt="ANALEONOR ZAMBRANO ROSERO" width="35%">
						</div>
					</div>
				</div>
				<!-- fin imagen de personal -->
				<!-- información personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 mx-auto text-center text-lg-left texto-azul-os ">
							<!-- aqui va todo lo que se quiera centrar -->
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">PROFESIONAL ENCARGADO</h4>
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">VICERECTOR (A)</h4>
							<div class="pt-sans text-justify">
								<label class="f-negrita">ANALEONOR ZAMBRANO ROSERO</label>
								<br>Magíster en Gestión Empresarial – Universidad Libre de Cali
								<br>Especialista en Gerencia Financiera – Universidad Libre de Cali
								<br>Contador Público – Universidad Mariana
								<br>Certificación internacional en presentación de información financiera
								para PYMES
								<br><br>
								- Es la fundadora de la Empresa de Auditoría Faconsi Ltda., hoy Faconsi
								S.A.S. con la que lideró varios procesos de auditoría y asesoría
								financiera y tributaria a varias empresas del sector real tanto de Pasto,
								como de otras ciudades del país y del exterior.
								<br>- También ha incursionado en el sector educativo en el área de control
								interno y además como docente de pregrado y Postgrado en
								Instituciones como la Universidad Mariana, Cesmag, Fundación
								Universitaria del Área Andina (FUA), Instituto de Educación del
								Putumayo (INESUP).
								<br>- Igualmente se ha dictado seminarios y conferencias con ACOPI,
								FUNDEINCARIBE y Aselán Ltda.
							</div>
						</div>
					</div>
				</div>
				<!-- fin información personal -->
			</div>
			
			<!-- linea amarilla -->
			<div class="row">
				<div class="col-8 borde-amarillo border-bottom p-0 mx-auto py-3"></div>
			</div>
			<div class="row py-5">
				
				<!-- imagen de personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 text-center text-lg-right mx-auto">
							<!-- aqui va todo lo que se quiera centrar -->
							<img src="<?php bloginfo('template_url')?>/img
/institucional/juan_sebastian_jurado_burbano.png" alt="Secretaria vicerrectoria administrativa financiera" width="35%">
						</div>
					</div>
				</div>
				<!-- fin imagen de personal -->
				
				<!-- información personal -->
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
					<div class="row col-12 ">
						<div class="col-12 py-3 mx-auto text-center text-lg-left texto-azul-os">
							<!-- aqui va todo lo que se quiera centrar -->
							<h4 class="texto-amarillo fuente-institucional f-negrita p-0">ASISTENTE</h4>
							<div class="pt-sans">
								<label class="f-negrita">JUAN SEBASTIÁN JURADO BURBANO</label>
								<br>Asistente.administrativa@aunar.edu.co
							</div>
						</div>
					</div>
				</div>
				<!-- fin información personal -->
			</div>
			
		</div>
		<!-- fin personal encargado -->
		
		
		<?php  get_footer(); ;?>
		
		
	</body>
</html>