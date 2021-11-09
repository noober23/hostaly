<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i><?= $data['page_title']?></h1>
            <p>Listado habitaciones</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Habitaciones</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Lista de Habitaciones</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Lista Habitaciones</h3>
            <table class="table table-bordered" id="tableHabita">
              <thead>
                <tr>
                  <th>Nro Habitacion</th>
                  <th>Tipo Hab</th>
                  <th>Ocupado</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
    </div>
</main>


<?php footerAdmin($data); ?>