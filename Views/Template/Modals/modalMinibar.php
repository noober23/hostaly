<!-- Modal -->
<div class="modal fade" id="modalFormMinibar" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Minibar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formMinibar" name="formMinibar">
              <input type="hidden" id="idMinibar" name="idMinibar" value="">
                <div class="form-group">
                  <label class="control-label">idBebida</label>
                  <select name="idBebida" id="idBebida">
                      <option value=""></option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Cantidad Inicial</label>
                  <input class="form-control" type="number" id="CantInicial" name="CantInicial" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Cantidad Consumido</label>
                  <input class="form-control" type="number" id="CantConsumo" name="CantConsumo" required>
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