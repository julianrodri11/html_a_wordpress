var fontSize = 1,
  factor = 0.1,
  limite = 5,
  limitedesc = 5,
  contador = 0;
contadordesc = 0
// Menu superior
$('#aumentar').on('click', function () {

  if (contador <= limite) {
    fontSize = fontSize + factor;
    $('body').css({
      'font-size': fontSize + 'em'
    });
    contador++;
  }
});
//
$('#disminuir').on('click', function () {

  if (contadordesc <= limitedesc) {
    fontSize = fontSize - factor;
    $('body').css({
      'font-size': fontSize + 'em'
    });
    contadordesc++;
  }
});

$('#restablecer').on('click', function () {
  fontSize = 1;
  $('body').css({
    'font-size': fontSize + 'em'
  });
  contador = 0;
  contadordesc = 0;
});