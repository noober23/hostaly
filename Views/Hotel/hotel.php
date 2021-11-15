<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><?= $data['page_title']?></h1>
            <button class="btn btn-primary" type="button" onclick="openModal();">Nuevo</button>
           <?php  getModal('modalHotel',$data); 
           ?>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Datos Informativos Hostal</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Datos Informativos Hostal</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <table class="table table-bordered" id="tableHotel">
              <thead>
                <tr>
                  <th>IDHotel</th>
                  <th>nombre</th>
                  <th>Estrellas</th>
                  <th>Categoria</th>
                  <th>Direccion</th>
                  <th>Ciudad</th>
                  <th>Telefono</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
    </div>
</main>


<?php footerAdmin($data); ?>