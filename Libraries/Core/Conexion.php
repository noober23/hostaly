<?php
 class Conexion{

     private $host= DB_HOST;
     private $user= DB_USER;
     private $pass = DB_PASS;
     private $db = DB_NAME;
     private $conect;

     public function __construct(){
         $connectString = "mysql:host=".$this->host.";dbname=".$this->db.";charset-utf8";
         try{ $this->conect =new PDO($connectString,$this->user,$this->pass);
           // echo "Connexion Exitosa";
         $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }catch (Exception $e){
             $this->conect="Error de Conexion";
            echo "ERROR: ".$e->getMessage();
         }
     }

     public function connect()
     {
        return $this->conect;
     }

     public function prepare(){
         return false;
     }
 }


?>