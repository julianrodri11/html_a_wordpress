<!-- modal para mostrar el video institucional -->
<!-- --------------------MODAL con formulario----------------------- -->
<!-- The Modal -->
<div class="modal fade" id="modalVideoInstitucional">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body fondo-gris-c">
        <button type="button" class="close bg-warning text-white f-negrita" data-dismiss="modal" data-toggle="tooltip" data-placement="left" title="Cerrar">X</button>
        <!-- ---------- -->
        <div class="embed-responsive embed-responsive-16by9">
         <?php /* <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sQVbUfhm2ZQ?rel=0" allowfullscreen></iframe>*/ ?>
        </div>
        <!-- ----------- -->
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn fondo-azul-oscuro text-white" data-dismiss="modal">Cerrar</button>
      </div>
      
    </div>
  </div>
</div>
<!-- -------------------FIN MODAL INICIAL-------------------- -->
<!-- script - para el video despues que el modal se aya cerrado -->
<?php
/*
<script>
$("#modalVideoInstitucional").on('hidden.bs.modal', function (e) {
$("#modalVideoInstitucional iframe").attr("src", $("#modalVideoInstitucional iframe").attr("src"));
});
</script>
*/
?>