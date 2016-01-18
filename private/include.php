<?php

// Example to auto-load class files from multiple directories using the SPL_AUTOLOAD_REGISTER method.
// It auto-loads any file it finds starting with class.<classname>.php (LOWERCASE), eg: class.from.php, class.db.php
require_once $base_path.'config.php';
require_once $base_path.'/private/external.php';

spl_autoload_register(function($class_name) {

	// Define an array of directories in the order of their priority to iterate through.
	$dirs = array(
			'funct/', // Project specific classes (+Core Overrides)
			'class/', // Core classes example
	);

	// Looping through each directory to load all the class files. It will only require a file once.
	// If it finds the same class in a directory later on, IT WILL IGNORE IT! Because of that require once!
	foreach( $dirs as $dir ) {
		if (file_exists($dir.'class.'.strtolower($class_name).'.php')) {
			require_once($dir.'class.'.strtolower($class_name).'.php');
			return;
		}
		if (file_exists($dir.'func.'.strtolower($class_name).'.php')) {
			require_once($dir.'func.'.strtolower($class_name).'.php');
			return;
		}
	}
});
?>