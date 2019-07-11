$(document).ready(function () {
	$("[data-toggle=\'tooltip\']").tooltip();
});
$(window).scroll(function () {
	if ($("#cont-logo").offset().top > 56) {
		$("#cont-logo").addClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-4 pr-lg-4  efecto-antes");
		$("#navbar1").removeClass("mt-5");
		document.getElementById("myBtn").style.display = "block";
	} else {
		$("#cont-logo").removeClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-4 pr-lg-4  efecto-despues");
		$("#navbar1").addClass("mt-0");
		document.getElementById("myBtn").style.display = "none";
	}
});

function iralinicio() {
	var body = $("html, body");
	body.stop().animate({
		scrollTop: 0
	}, 500, 'swing', function () {});
}
$(document).ready(function () {
	if (sessionStorage.getItem("story") !== 'true') {
		sessionStorage.setItem("story", "true");
		$("#myModal").modal();
	}
	$('#reset-session').on('click', function () {
		sessionStorage.setItem('story', '');
	});
});
$(document).ready(function () {
	$('#google_translate_element').click(function () {
		$("#navbar1").addClass("mt-5");
	});
});
$(document).ready(function () {
	$('#oferta-academica').mouseenter(function () {
		document.getElementById("cont-oferta-institucional").style.display = "block";
	});
	$('#cont-oferta-institucional').mouseleave(function () {
		document.getElementById("cont-oferta-institucional").style.display = "none";
	});
	$('#oferta-academica').mouseleave(function () {
		document.getElementById("cont-oferta-institucional").style.display = "block";
	});
});
$(document).ready(function () {
	$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
		var $el = $(this);
		var $parent = $(this).offsetParent(".dropdown-menu");
		if (!$(this).next().hasClass('show')) {
			$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		}
		var $subMenu = $(this).next(".dropdown-menu");
		$subMenu.toggleClass('show');
		$(this).parent("li").toggleClass('show');
		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
			$('.dropdown-menu .show').removeClass("show");
		});
		if (!$parent.parent().hasClass('navbar-nav')) {
			$el.next().css({
				"top": $el[0].offsetTop,
				"left": $parent.outerWidth() - 4
			});
		}
		return false;
	});
});
$(document).ready(function () {
	$(".modal").each(function () {
		var i = $(this).find("iframe").attr("src");
		$(this).on("click", function () {
			$(this).find("iframe").attr("src", ""), $(this).find("iframe").attr("src", i)
		})
	})
});
