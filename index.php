<?php
// mostrar como funciona MCV modelo Vista Controlador
require_once ("Config/Config.php");
require_once ("Helpers/Helpers.php");
$url = !empty($_GET['url']) ? $_GET['url']: 'home/home';
$arrUrl = explode("/",$url);
$controller = $arrUrl[0];
$method =$arrUrl[0];
$param="";

//controller method
if (!empty($arrUrl[1]))
{
    if ($arrUrl[1]!="")
    {
        $method = $arrUrl[1];
    }
}

//param
if (!empty($arrUrl[2])){
    if ($arrUrl[2]!=""){
        for ($i=2;$i<count($arrUrl);$i++){
            $param.=$arrUrl[$i].",";
        }
        $param =trim($param,',');
        //echo $param;
    }
}

//AutoLoad
 require_once("Libraries/Core/Autoload.php");

//Load
 require_once ("Libraries/Core/Load.php");


 ?>