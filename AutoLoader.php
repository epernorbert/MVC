<?php

spl_autoload_register('AutoLoader');

function AutoLoader($className) {
	
	//C:/xampp/htdocs/mobileshopmvc/classes/
	$pathClasses = $_SERVER['DOCUMENT_ROOT'] . "/mvc/Classes/";

	//C:/xampp/htdocs/mobileshopmvc/Controllers/
	$pathControllers = $_SERVER['DOCUMENT_ROOT'] . "/mvc/Controllers/";

	//C:/xampp/htdocs/mobileshopmvc/Models/
	$pathModels = $_SERVER['DOCUMENT_ROOT'] . "/mvc/Models/";	

	if(file_exists($pathClasses.$className.'.php')) {

		require_once $pathClasses.$className.'.php';

	} else if(file_exists($pathControllers.$className.'.php')) {

		require_once $pathControllers.$className.'.php';

	} else if(file_exists($pathModels.$className.'.php')) {

		require_once $pathModels.$className.'.php';
		
	} 
	
}

