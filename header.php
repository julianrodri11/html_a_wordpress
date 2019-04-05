<meta charset="<?php bloginfo('charset'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/aunar.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.min.js" async></script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/popper.min.js" async></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
<noscript id="deferred-styles">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/personalizado.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/hover.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/animate.css">
</noscript>
<script>
var loadDeferredStyles = function() {
var addStylesNode = document.getElementById("deferred-styles");
var replacement = document.createElement("div");
replacement.innerHTML = addStylesNode.textContent;
document.body.appendChild(replacement)
addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);
</script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/bootstrap.min.js" async></script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/personalizado.js" async></script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.smoove.min.js" async></script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/efectos_smoove.js" async></script>
<?php /*VARIABLE QUE SACA EL NOMBRE DEL SERVIDOR*/ //$servidor = $_SERVER['SERVER_NAME']; ?>
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/shepherd-theme-default.css">
