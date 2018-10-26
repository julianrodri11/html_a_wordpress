<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS*/  get_header();   ?>
		<title>PORTAL DE NOTICIAS - AUTÓNOMA DE NARIÑO</title>
		<meta name="description" content="Leidy Mera, estudiante de la Corporación Universitaria Autónoma de Nariño, sede Ipiales, ha ganado importantes reconocimientos a nivel mundial debido a su pasión y dedicación por el ciclo montañismo ¡Conozcamos esta desafiante historia!">
		<meta name="keywords" content="Leidy Mera Gana importantes reconocimientos">
		<meta property="og:image" <?php echo 'content=http://'.$servidor.'/img/noticias/slider-portal-de-noticias.jpg'?>>
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
					<img class="mx-auto img-fluid" width="100%" src="img/noticias/portal-de-noticias-aunar.jpg"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu2.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-2 p-2 fondo-azul text-white">
					<div class="col-12 pr-2 pt-3 text-right f-negrita">ENERO</div>
					<div class="col-12 p-2 text-right"></div>
					<div class="col-12 p-2 text-right"></div>
					<div class="col-12 pr-2 text-right">Maquinarte</div>
					<div class="col-12 pr-2 text-right">Feria Institucional</div>
					<div class="col-12 pr-2 text-right">Maquinarte</div>
					<div class="col-12 pr-2 text-right">Feria Institucional</div>
					<div class="col-12 pr-2 text-right">Maquinarte</div>
					<div class="col-12 pr-2 text-right">Feria Institucional</div>
					<div class="col-12 p-2 text-right"></div>
					<div class="col-12 p-2 text-right"></div>
					<div class="col-12 pr-2 text-right f-negrita">FEBRERO</div>
					<div class="col-12 pr-2 text-right f-negrita">MARZO</div>
					<div class="col-12 pr-2 text-right f-negrita">ABRIL</div>
					
				</div>
				<div class="col-10 p-lg-5 fondo-gris-c">
					<div class="row d-flex justify-content-center fuente-institucional">
						
						<div class="col-8 text-center f-negrita texto-azul border-bottom borde-azul pb-3 f-size-18">
							Ipialeña ha conseguido importantes reconocimientos en campeonatos internacionales de ciclo montañismo
						</div>
						<div class="col-8 pt-sans f-italica p-lg-4"><p>Leidy Mera, estudiante de la Corporación Universitaria Autónoma de Nariño, sede Ipiales, ha ganado importantes reconocimientos a nivel mundial debido a su pasión y dedicación por el ciclo montañismo ¡Conozcamos esta desafiante historia!</p></div>
						
						<div class="col-8">
							<img class="mx-auto img-fluid" width="100%" src="img/noticias/slider-portal-de-noticias.jpg"/>
						</div>
						<div class="col-8 text-justify pt-3">
							<h5 class="text-center">¿Quién eres?</h5>
							<p>Mi nombre es Leidy Johana Mera, pertenezco a la Corporación Universitaria Autónoma de Nariño y hace diez años practico el ciclo montañismo.</p>
							<p>Cuéntanos tu historia con este deporte</p>
							<p>Me llamó la atención practicar este deporte por mi hermano, ya que lo acompañaba a las competencias. Me llamaba mucho la atención conocer este deporte y todas las cosas nuevas que uno aprende a diario. Todo lo que uno viaja y conoce lugares, y las experiencias que uno tiene.</p>
							<p>¿Qué es lo que más te gusta del ciclo montañismo?</p>
							<p>Lo que más me gusta del ciclo montañismo es que uno se siente muy libre en esto, recorriendo todos los lugares, paisajes, y sobretodo que uno conoce a diario muchos lugares. También cuando uno sale del país y conoce diferentes costumbres, cosas y lo más bonito de todo es que se aprende y son enseñanzas para toda la vida.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- <div class="col-12 fuente-institucional texto-azul f-negrita pt-3">COMPARTE ESTE CONTENIDO</div>
				<div class="col-12 fuente-institucional texto-azul f-negrita pt-3">INCONOS DE REDES SOCIALES</div> .-->
				<a href="https://www.facebook.com/sharer/sharer.php?u=http://190.14.239.67/portal-noticias-aunar.php" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>
			</div>
		</div>
		<!-- selider de noticias -->
		<?php
			include_once('slider/noticias-autonoma-de-narino.php');
		include_once('secciones/footer-principal.php'); ?>
		<!-- fin selider de noticias -->
		
	</body>
</html>