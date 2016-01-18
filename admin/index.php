<?php
ini_set ( 'DISPLAY_ERRORS', 0 );
include '../private/include.php';

 if(! login::isLogged()){
 	include 'pages/login.php';
 	return false;	
 }

?>