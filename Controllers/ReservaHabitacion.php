<?php
class ReservaHabitacion extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function  ReservaHabitacion(){
        //$data['page_id']=3;
        $data['page_tag']="Reserva habitacion ";
        $data['page_title']="Reserva habitacion Hostal";
        $data['page_name']="reserva Habitacion";
        $this->views->getView($this,"reservaHabitacion",$data);
    }
    
    
}
?>