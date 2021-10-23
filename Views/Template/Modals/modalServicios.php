<!-- Modal -->
<div class="modal fade" id="modalFormServicio" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="control-label">Nombre Servicio</label>
                  <input class="form-control" type="text"  id="txtServicio" name= "txtServicio" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Precio</label>
                  <input class="form-control" type="number" id="txtPrecio" name= "txtPrecio" required>
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
