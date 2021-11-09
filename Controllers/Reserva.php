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
        $this->views->getView($this,"reserva",$data);
    }
    public function sReserva(){
        $fechaIni = $_POST['fechaIni'];
        $fechaFin = $_POST['fechaFin'];
        if ($fechaIni>$fechaFin){
            $fechaFin= $fechaIni;
        }
     
    }
    
}
?>