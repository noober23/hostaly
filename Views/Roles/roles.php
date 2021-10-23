<?php headerAdmin($data);
   
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-briefcase"></i><?= $data['page_title']?>
             <button class="btn btn-primary" type="button" onclick="openModal();">Nuevo</button>
           <?php  getModal('modalRoles',$data); ?>
        </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Listado Roles</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableRoles">
                  <thead>
                    <tr>
                      <th>idRol</th>
                      <th>Rol</th>
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

<?php footerAdmin($data);?>