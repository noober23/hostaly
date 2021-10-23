<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i><?= $data['page_title']?></h1>
            <p>Reserva Habitaciones</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Nueva reserva Habitacion</a></li>
        </ul>
    </div>
</main>
<div class="clearfix"></div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Lista Habitaciones</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id Reserva Hab</th>
                  <th>id Reserva</th>
                  <th>Nro Habitacion</th>
                  <th>Tipo Hab</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12</td>
                  <td>1</td>
                  <td>101</td>
                  <td>1</td>
                  <td>50</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


<?php footerAdmin($data); ?>
