<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/aunar.ico">
<noscript id="deferred-styles">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/personalizado.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/hover.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/animate.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/shepherd-theme-default.css">
</noscript>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.min.js" async></script>
<script  type="text/javascript" src="<?php bloginfo('template_url')?>/js/popper.min.js" async></script>
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

