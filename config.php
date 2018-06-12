<?php

define("DS", DIRECTORY_SEPARATOR);

spl_autoload_register(function($nameClass){

	$dirClass = 'class';
	$filename = __DIR__ . DS . $dirClass . DS . $nameClass.".php";	

	if(file_exists($filename)){
		require_once($filename);
	} 
});