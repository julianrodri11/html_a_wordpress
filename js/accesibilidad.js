// CODIGO QUE SIRVE PARA HACER ZOOM, YA SEA AUMENTAR O
// DISMINUIR LA FUENTE, ADEMÁS DE CAMBIAR EL CONTRASTE 
// DE TODA LA PÁGINA A GRISES

var fontSize = 1,
  factor = 0.1,
  limite = 5,
  limitedesc = 5,
  contador = 0;
contadordesc = 0
// AUMENTAR LA FUENTE DE LA PÁGINA
$('#aumentar').on('click', function () {

  if (contador <= limite) {
    fontSize = fontSize + factor;
    $('body').css({
      'font-size': fontSize + 'em'
    });
    $('li').css({
      'font-size': fontSize + 'em'
    });
    contador++;
  }
});
// DISMINUIR LA FUENTE DE LA PÁGINA
$('#disminuir').on('click', function () {

  if (contadordesc <= limitedesc) {
    fontSize = fontSize - factor;
    $('body').css({
      'font-size': fontSize + 'em'
    });
    $('li').css({
      'font-size': fontSize + 'em'
    });
    contadordesc++;
  }
});
// RESTABLECER EL TAMAÑO DE LA FUENTE DE LA PÁGINA
$('#restablecer').on('click', function () {
  fontSize = 1;
  $('body').css({
    'font-size': fontSize + 'em'
  });
  $('li').css({
    'font-size': fontSize + 'em'
  });
  contador = 0;
  contadordesc = 0;
  // RESTABLECER EL COLOR DE LA PÁGINA
  $("div").removeClass("filtro-gris");
  $("a").removeClass("filtro-gris");
  $("p").removeClass("filtro-gris");
  $("img").removeClass("filtro-gris");
  $("footer").removeClass("filtro-gris");
});
// COLOCAR PÁGINA EN GRIS
$("#contraste").on("click", function () {
  $("div").addClass("filtro-gris");
  $("a").addClass("filtro-gris");
  $("p").addClass("filtro-gris");
  $("img").addClass("filtro-gris");
  $("footer").addClass("filtro-gris");

});