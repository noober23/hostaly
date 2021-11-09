<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formRol" name="formRol">
              <input type="hidden" id="idRol" name="idRol" value="">
                <div class="form-group">
                  <label class="control-label">Rol</label>
                  <input class="form-control" type="text"  id="txtRol" name="txtRol" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Autorizacion</label>
                  <select class="form-control" id="Auto" name="Auto" required>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                  </select>
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
