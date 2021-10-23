<?php
class main{
    public function encriptar($string){

    }
    public function loadData($data){
        foreach ($data as $key => $value){
            if (passGenerator())
            $this->{$key} = $value;
        }
    }
}
