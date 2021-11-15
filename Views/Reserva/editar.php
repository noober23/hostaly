<?php
headerAdmin();
?>
<!-- Begin Page Content -->

    <main>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>reserva/modificar" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $data['idReserva']; ?>">
                                            <label class="control-label">Fecha Inicio</label>
                                            <input type="date" id="fechaIni" name="fechaIni">
                                               
                                            <label class="control-label">Fecha Fin</label>
                                            <input type="date" id="fechaFin" name="fechaFin">
                                            
                                            <input type="date" id="fechaReserva" name="fechaReserva">   
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Modificar</button>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>reserva" type="button">Atras</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>