/* activar tooltip para redes sociales cuando se ponga el mouse encima*/
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


// Sript para el efecto del logo con el scroll cuando baje se haga mas pequeño y cuando este en la posición inicial el logo este normal
$(window).scroll(function() {
  if ($("#cont-logo").offset().top > 56) {
    $("#cont-logo").addClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-4 pr-lg-4  efecto-antes");
// para arreglar el traductor
$("#navbar1").removeClass("mt-5");
//boton de ir al inicio
document.getElementById("myBtn").style.display = "block";
} else {
  $("#cont-logo").removeClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-4 pr-lg-4  efecto-despues");

// para arreglar el traductor
$("#navbar1").addClass("mt-0");
//boton ir al inicio ocultar
document.getElementById("myBtn").style.display = "none";
}
});



//función que sirve para ir al inicio de la página cuando se haga click
//boton ubicado en el menú 1
function iralinicio()
{
//document.body.scrollTop = 0;
//document.documentElement.scrollTop = 0;
var body = $("html, body");
body.stop().animate({scrollTop:0}, 500, 'swing', function() {
//alert("Finished animating");
});
}


$(document).ready(function(){
// verifica si existe una sesión, si no existe abre el modal

// sessionStorage.getItem('key');
if (sessionStorage.getItem("story") !== 'true')
{ // sessionStorage.setItem('key', 'value'); pair
sessionStorage.setItem("story", "true");
// Calling the bootstrap modal
$("#myModal").modal();
}

// sirve para crear un boton con id reset-session y destruir la sesion o se podria colocar por horas ,
// es decir si pasa una hora se destruye la sesion y se muestra el modal
$('#reset-session').on('click',function()
{
  sessionStorage.setItem('story','');
});
});




// cuando se haga click en el cuadro de traducción
// baje un poco la margen para que se visualice bien el menú
$(document).ready(function ()
{
  $('#google_translate_element').click(function ()
  {
    $("#navbar1").addClass("mt-5");
// regresa al estado normal en la función del scroll $("#navbar1").removeClass("mt-5"); $("#navbar1").addClass("mt-0"); en
});
});



$(document).ready(function ()
{
  $('#oferta-academica').mouseenter(function ()
  {
    document.getElementById("cont-oferta-institucional").style.display = "block";
  });
  $('#cont-oferta-institucional').mouseleave(function ()
  {
    document.getElementById("cont-oferta-institucional").style.display = "none";
  });
  $('#oferta-academica').mouseleave(function ()
  {
    document.getElementById("cont-oferta-institucional").style.display = "block";
  });
});



/*!
 * Bootstrap 4 multi dropdown navbar ( https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar/ )
 * Copyright 2017.
 * Licensed under the GPL license
 */


$( document ).ready( function () {
    $( '.dropdown-menu a.dropdown-toggle' ).on( 'click', function ( e ) {
        var $el = $( this );
        var $parent = $( this ).offsetParent( ".dropdown-menu" );
        if ( !$( this ).next().hasClass( 'show' ) ) {
            $( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
        }
        var $subMenu = $( this ).next( ".dropdown-menu" );
        $subMenu.toggleClass( 'show' );
        
        $( this ).parent( "li" ).toggleClass( 'show' );

        $( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
            $( '.dropdown-menu .show' ).removeClass( "show" );
        } );
        
         if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
            $el.next().css( { "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 } );
        }

        return false;
    } );
} );