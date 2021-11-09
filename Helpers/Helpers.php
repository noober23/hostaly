<?php

function base_url(){
    return BASE_URL;
}
//Return to url Asset
function media(){
    return BASE_URL."/Assets";

}
function headerAdmin($data=""){
    $views_header ="Views/Template/header_admin.php";
    require_once ($views_header);
}
function footerAdmin($data=""){
    $views_footer ="Views/Template/footer_admin.php";
    require_once ($views_footer);
}

/*
function headerHotel($data=""){
    $views_header ="Views/Templates2/header_hotel.php";
    require_once ($views_header);
}
function footerHotel($data=""){
    $views_footer ="Views/Templates2/footer_hotel.php";
    require_once ($views_footer);
}
*/

//INfo formateada
function dep($data){
    $format = print_r('<pre>');
    $format .=print_r($data);
    $format .=print_r('<pre>');
    return $format;
}

//abrir modal
function getModal(string $nameModal, $data){
    $view_modal = "Views/Template/Modals/{$nameModal}.php";
    require_once $view_modal;
}




//Eliminar exceso de espacios entre palabras
function strClean($strCadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],['',''],$strCadena);
    $string= trim($string);
    $string=stripslashes($string);
    $string=str_ireplace("<script>","",$string);
    $string=str_ireplace("</script>","",$string);
    $string=str_ireplace("<script src>","",$string);
    $string=str_ireplace("<script type=>","",$string);
    $string=str_ireplace("SELECT * FROM","",$string);
    $string=str_ireplace("INSERT INTO","",$string);
    $string=str_ireplace("DELETE FROM","",$string);
    $string=str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string=str_ireplace("DROP TABLE","",$string);
    $string=str_ireplace("OR '1'='1'","",$string);
    $string=str_ireplace('OR "1"="1"',"",$string);
    $string=str_ireplace("is NULL;--","",$string);
    $string=str_ireplace("is NULL;--","",$string);
    $string=str_ireplace("LIKE'","",$string);
    $string=str_ireplace('LIKE "',"",$string);
    $string=str_ireplace("--","",$string);
    $string=str_ireplace("^","",$string);
    $string=str_ireplace("[","",$string);
    $string=str_ireplace("]","",$string);
    $string=str_ireplace("==","",$string);
    return $string;
}

function passGenerator($length =10){
    $pass="";
    $longitudPass=$length;
    $cadena ="ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz1234567890";
    $longitudCadena=strlen($cadena);
    for ($i=1;$i<=$longitudPass;$i++){
        $pos=rand(0,$longitudCadena-1);
        $pass.=substr($cadena,$pos,1);
    }
    return $pass;

}