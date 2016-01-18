<?php

	function t($key){	
		if (session_status = PHP_SESSION_NONE){
			session_start();
			if(isset($_GET['lang'])) {
				$_SESSION['lang'] = $_GET['lang'];
			}
			if(!isset($_SESSION['lang'])) {
				$_SESSION['lang'] = 'en'; // default value
			}
			$t = include($_SESSION['lang'] . 'php'); // include lang file
		}elseif (session_status = PHP_SESSION_DISABLED){
			return $key;
		}else{
			return t[$key];
		}
	}

?>