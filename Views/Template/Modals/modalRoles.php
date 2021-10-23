<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal">
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
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
