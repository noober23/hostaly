<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i><?= $data['page_title']?></h1>
            <p>USUARIOS</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    
    <div class="tile">
            <h3 class="tile-title">Registro de Huesped</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Ci/nit</label>
                  <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Direccion</label>
                  <textarea class="form-control" type="text" placeholder="Enter your address"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Sexo</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Masculino
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Femenino
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Identity Proof</label>
                  <input class="form-control" type="file">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">I accept the terms and conditions
                    </label>
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
       <!-- Fin formulario--> 
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableUsuarios">
                  <thead>
                    <tr>
                      <th>idUsuario</th>
                      <th>Usuario</th>
                      <th>Autorizacion</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>


<?php footerAdmin($data); ?>
