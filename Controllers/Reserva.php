<?php
class Reserva extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function Reserva(){
        //$data['page_id']=3;
        $data['page_tag']="Reserva ";
        $data['page_title']="Reserva Hostal";
        $data['page_name']="reserva";
        $data['page_functions_js'] = "functionsReserva.js";
        $this->views->getView($this,"reserva",$data);
    }
    public function sReserva(){
        $fechaIni = $_POST['fechaIni'];
        $fechaFin = $_POST['fechaFin'];
        if ($fechaIni>$fechaFin){
            $fechaFin= $fechaIni;
        }
     
    }
    public function reservas(){
        $data = $this->model->selectReserva();
        $this->views->getView($this, "reserva",$data);
    }
    public function registrarReserva(){
        $fechaIni = $_POST['fechaIni'];
        $fechaFin = $_POST['fechaFin'];
        if ($fechaIni>$fechaFin){
            $fechaFin= $fechaIni;
        }
        $insert = $this->model->insertReserva($fechaIni,$fechaFin);
        if($insert){
            header("location: " . base_url() . "/reserva");
            die(); 
        }
    }
    public function editar(){
        $id = $_GET['idReserva'];
        $data = $this->model->editReserva();
        if($data==0){
            $this->reservas();
        }else{
            $this->views->getView($this, "editar",$data);
        }
    }
    public function modificar(){
        $id =$_POST['idReserva'];
        $fechaIni = $_POST['fechaIni'];
        $fechaFin = $_POST['fechaFin'];
        $actualizar = $this->model->actualizarReserva($fechaIni,$fechaFin);
        if($actualizar){
            header("location:".base_url()."/reserva");
            die();
        }
    }
    public function eliminar(){
        $id = $_POST['idReserva'];
        $this->model->deleteReserva();
        header("location:".base_url()."/reserva");
            die();
    }
}
?>