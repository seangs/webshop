<?php
function __autoload($class_name){


	$dirs = [
		'lib/',
	];


	foreach($dirs as $dir) {
		$file = __DIR__."/$dir$class_name.class.php";
		if(file_exists($file)) {
			require_once($file);
			break;
		}
 else {echo "File does not exist";}
	}
}
