<?php
headerAdmin($data);
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i><?= $data['page_title']?></h1>
            <p>Reserva</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Lista Reserva</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Contenido</div>
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
                      <th>Acciones</th>
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
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

              <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2></h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2021-09-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2021-09-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2021-09-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2021-09-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2021-09-30"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-10-01"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-10-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2021-09-26">26</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2021-09-27">27</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2021-09-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2021-09-29">29</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2021-09-30">30</td><td class="fc-day-number fc-fri fc-past" data-date="2021-10-01">1</td><td class="fc-day-number fc-sat fc-past" data-date="2021-10-02">2</td></tr></thead></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-10-03"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-10-04"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-10-05"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-10-06"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-10-07"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-10-08"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-10-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2021-10-03">3</td><td class="fc-day-number fc-mon fc-past" data-date="2021-10-04">4</td><td class="fc-day-number fc-tue fc-past" data-date="2021-10-05">5</td><td class="fc-day-number fc-wed fc-past" data-date="2021-10-06">6</td><td class="fc-day-number fc-thu fc-past" data-date="2021-10-07">7</td><td class="fc-day-number fc-fri fc-past" data-date="2021-10-08">8</td><td class="fc-day-number fc-sat fc-past" data-date="2021-10-09">9</td></tr></thead></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-10-10"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-10-11"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-10-12"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-10-13"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-10-14"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-10-15"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-10-16"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2021-10-10">10</td><td class="fc-day-number fc-mon fc-past" data-date="2021-10-11">11</td><td class="fc-day-number fc-tue fc-past" data-date="2021-10-12">12</td><td class="fc-day-number fc-wed fc-past" data-date="2021-10-13">13</td><td class="fc-day-number fc-thu fc-past" data-date="2021-10-14">14</td><td class="fc-day-number fc-fri fc-past" data-date="2021-10-15">15</td><td class="fc-day-number fc-sat fc-past" data-date="2021-10-16">16</td></tr></thead></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-10-17"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-10-18"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-10-19"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-10-20"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-10-21"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-10-22"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-10-23"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2021-10-17">17</td><td class="fc-day-number fc-mon fc-past" data-date="2021-10-18">18</td><td class="fc-day-number fc-tue fc-past" data-date="2021-10-19">19</td><td class="fc-day-number fc-wed fc-past" data-date="2021-10-20">20</td><td class="fc-day-number fc-thu fc-past" data-date="2021-10-21">21</td><td class="fc-day-number fc-fri fc-past" data-date="2021-10-22">22</td><td class="fc-day-number fc-sat fc-past" data-date="2021-10-23">23</td></tr></thead></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-10-24"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-10-25"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-10-26"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-10-27"></td><td class="fc-day fc-widget-content fc-thu fc-today fc-state-highlight" data-date="2021-10-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-10-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-10-30"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2021-10-24">24</td><td class="fc-day-number fc-mon fc-past" data-date="2021-10-25">25</td><td class="fc-day-number fc-tue fc-past" data-date="2021-10-26">26</td><td class="fc-day-number fc-wed fc-past" data-date="2021-10-27">27</td><td class="fc-day-number fc-thu fc-today fc-state-highlight" data-date="2021-10-28">28</td><td class="fc-day-number fc-fri fc-future" data-date="2021-10-29">29</td><td class="fc-day-number fc-sat fc-future" data-date="2021-10-30">30</td></tr></thead></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-10-31"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-11-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-11-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-11-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-11-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-11-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-11-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2021-10-31">31</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2021-11-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2021-11-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2021-11-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2021-11-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2021-11-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2021-11-06">6</td></tr></thead></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                
            </div>
        </div>
    </div>

</main>


<?php footerAdmin($data); ?>
