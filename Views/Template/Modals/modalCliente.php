<div class="tile">
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">ci</label>
                  <input class="form-control" type="text" id="ci" name="ci">
                </div>
                <div class="form-group">
                  <label class="control-label">tipo documento</label>
                  <select id="tipoDocu" name="tipoDocu">
                    <option id="1">carnet</option>
                    <option id="1">pasaporte</option>
                    <option id="1">libreta militar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Apellido</label>
                  <input class="form-control" type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Edad</label>
                  <input class="form-control" type="number" id="edad" name="edad">
                </div>
                <div class="form-group">
                  <label class="control-label">Nacionalidad</label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group">
                  <label class="control-label">Direccion</label>
                  <input class="form-control" type="text" id="direccion" name="direccion">
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Estado civil</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="estadoCivil" id="estadoCivil" value="S">Soltero
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="estadoCivil" id="estadoCivil" value="C">Casado
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Ocupacion</label>
                  <input class="form-control" type="text" id="ocupacion" name="ocupacion">
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Registrar</a>
              <button class="btn btn-danger" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
          </div>