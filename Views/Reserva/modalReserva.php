<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Nuevo Reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formReserva" name="formReserva">
              <input type="hidden" id="idReserva" name="idReserva" value="">
                <div class="form-group">
                  <label class="control-label">Reserva</label>
                  <input class="form-control" type="text"  id="idReserva" name="idReserva" readonly="">
                </div>
                <div class="form-group">
                  <label class="control-label">Fecha Inicio</label>
                  <input type="date" id="fechaIni" name="fechaIni">
                </div>
                <div class="form-group">
                  <label class="control-label">Fecha Fin</label>
                  <input type="date" id="fechaFin" name="fechaFin">
                </div>
    
                <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="#" data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
