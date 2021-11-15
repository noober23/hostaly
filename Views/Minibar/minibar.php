<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i><?= $data['page_title']?></h1>
            <p>Listado Minibar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Minibar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Lista de Minibar</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Lista Minibar</h3>
            <table class="table table-bordered" id="tableMinibar">
              <thead>
                <tr>
                  <th>IDMinibar</th>
                  <th>idBebida</th>
                  <th>Cantidad Inicial</th>
                  <th>Cantidad Consumida</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
    </div>
</main>


<?php footerAdmin($data); ?>