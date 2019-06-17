function asistente() {
	const tour = new Shepherd.Tour({
		defaultStepOptions: {
			scrollTo: true,
			showCancelLink: true
		},
		useModalOverlay: true
	});

	tour.addStep('modal-informativo', {
		title: 'Modal Informativo',
		text: 'En este modal encontrará las noticias generales, eventuales que al hacer click lo redireccionarán al evento o la noticia publicada',
		attachTo: '.modal-open bottom',
		buttons: [{
			text: 'Siguiente',
			action: tour.next
		}]

	});
	tour.addStep('menu1', {
		title: 'Menú',
		text: 'En este menú encuentra todo lo relacionado......',
		attachTo: '.navbar bottom',
		buttons: [{
			text: 'Siguiente',
			action: tour.next
		}]

	});
	tour.addStep('logo-central', {
		title: 'Logo principal',
		text: 'Al hacer click permite regresar a la página principal.',
		attachTo: '#cont-logo bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});
	tour.addStep('redes-sociales', {
		title: 'Redes Sociales',
		text: 'Al hacer click en los iconos, redireccionará a cada una de las redes sociales de nuestra institución',
		attachTo: '.asis-redessociales bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('accesibilidad', {
		title: 'Accesibilidad',
		text: 'En esta sección puede traducir la página a diferentes idiomas, hacer zoom + y -, además de poder cambiar el contraste y restablecer los valores por defecto',
		attachTo: '.asis-iconosaccesibilidad bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('menu-principal', {
		title: 'Menú Principal',
		text: 'Se encuentra la información referente a programas académicos y dependencias de la institución',
		attachTo: '#navbarNavDropdown_principal bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});


	///prueba

	tour.addStep('buscador-programas', {
		title: 'Búsqueda de programas',
		text: 'En esta sección se puede seleccionar, buscar y filtrar por ciudad y modalidad los diferentes programas ofertados por AUNAR ',
		attachTo: '.fondo-mundo bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('noticias', {
		title: 'Publicación de noticias',
		text: 'Se muestran las tres noticias principales más recientes',
		attachTo: '.asis-noticias bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('mas-noticias', {
		title: 'Más Noticias',
		text: 'Las noticias más antiguas pasan a esta sección, a partir de la cuarta noticia, así mismo se muestran máximo nueve noticias antiguas en grupos de a tres ',
		attachTo: '.asis-mas-noticias bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});
	tour.addStep('link-portal-noticias', {
		title: 'Link a portal de noticias',
		text: 'Redirecciona al portal principal de noticias AUNAR ',
		attachTo: '.asis-portal-noticias bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('enlaces-internos', {
		title: 'Enlaces internos',
		text: 'Así mismo se tienen enlaces de interés que hacen parte de la institución como radio, televisión, campus virtual, entre otros ',
		attachTo: '.asis-enlaces-interes bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});
	tour.addStep('eventos', {
		title: 'Eventos AUNAR',
		text: 'En esta sección se muestran 9 eventos, distribuidos en grupos de 3',
		attachTo: '#mas_eventos bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('footer', {
		title: 'Pie de página',
		text: 'En el footer se encuentran reglamentos, documentos, formatos, entre otros, los cuales se pueden ver y descargar',
		attachTo: 'footer bottom',
		buttons: [{
			text: 'Atras',
			action: tour.back
		},
		{
			text: 'Siguiente',
			action: tour.next
		}
		],

	});

	tour.addStep('ir-al-inicio', {
		title: 'Subir',
		text: 'El icono permite llegar al inicio de la página',
		attachTo: '#myBtn left',
		buttons: [{
			text: 'Finalizar',
			action: tour.cancel
		}
			// ,
			// {
			// 	text: 'Siguiente',
			// 	action: tour.next
			// }
		],

	});

	tour.start()
}