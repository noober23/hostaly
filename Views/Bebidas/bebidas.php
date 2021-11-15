<?php headerAdmin($data);
   
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><?= $data['page_title']?>
             <button class="btn btn-primary" type="button" onclick="openModal();">Nuevo</button>
           <?php  getModal('modalBebidas',$data); ?>
        </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Listado Bebidas</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableBebidas">
                  <thead>
                    <tr>
                      <th>IdBebidas</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><button class="btn btn-primary btn-sm btnEdit"><i class="fas fa-pencil-alt"></i></td>
                          <td><button class="btn btn-danger btn-sm btnDelete"><i class="fas fa-pencil-alt"></i>?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>

<?php footerAdmin($data);?>