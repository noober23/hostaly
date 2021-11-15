<!-- Modal -->
<div class="modal fade" id="modalFormTipoHabita" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Tipo Habitacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formTipoHabita" name="formTipoHabita">
              <input type="hidden" id="idTipoHabita" name="idTipoHabita" value="">
                <div class="form-group">
                  <label class="control-label">Tipo Habitacion</label>
                  <input class="form-control" type="number" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Precio</label>
                  <input class="form-control" type="number" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Descripcion</label>
                  <textarea class="form-control" rows="2" id="descripcion" name="descripcion" placeholder="Descripcion de la habitacion"></textarea>
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