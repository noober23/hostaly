<?php
//CONFIGURACION LOCALHOST
//const BASE_URL="http://localhost/hostal";
//const DB_HOST="localhost";
//const DB_NAME="hostal";
//const DB_USER="root";
//const DB_PASS= "";

/*  
  CONFIGURACION HEROKU
*/
const BASE_URL="https://hostaly.herokuapp.com/";

const DB_HOST="us-cdbr-east-04.cleardb.com";
const DB_NAME="heroku_4e8b11e241cef3a";
const DB_USER="bd011ee28cbd6e";
const DB_PASS= "fa2007dd";

const DB_CHARSET="charset=utf8";

const SGBD="mysql:host=".DB_HOST.";dbname=".DB_NAME;

const METHOD="AES-256-CBC";

// Delimitation decimal and millar
const SPD=",";
const  SPM=",";


//mysql://bd011ee28cbd6e:fa2007dd@us-cdbr-east-04.cleardb.com/heroku_4e8b11e241cef3a?reconnect=true

?>
