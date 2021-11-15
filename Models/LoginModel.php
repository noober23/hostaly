<?php 
class LoginModel extends Mysql
{   
    private $intIdUsuario;
    private $strUsuario;
    private $strPassword;
    private $strToken;
    public function __construct()
    {
        parent::__construct();
    }

    public function usuarios(){
        $data['page_id'] =3;
        $data['page_tag']="Login ";
        $data['page_title']="Login hostal";
        $data['page_name']="Login";
        $data['page_functions_js'] = "functions_login.js";
        $this->views->getView($this,"usuarios",$data);
    }

    public function loginUser(string $usuario, string $passwords){
        $this->strUsuario = $usuario;
        $this->strPassword =$passwords;
        $sql = "SELECT idUser FROM usuario WHERE
            username = '$this->strUsuario' and 
            password ='$this->strPassword'";
        $request = $this->select($sql);
        return $request;
    }
    public function sessionLogin(int $iduser){
        $this->intIdUsuario = $iduser;
        
    }
}
?>