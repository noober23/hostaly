<?php

$dns = 'localhost';
$username ='root';
$dbpass ='';
$bd= 'proy';


try{
	$dbcon = new PDO("mysql:host=$dns;dbname=$bd", $username, $dbpass);
	
}
catch(PDOException $e){
	print "Error? :".$e->getMessage()."<br/>";
	die();
}
$dbcon = null;

?>