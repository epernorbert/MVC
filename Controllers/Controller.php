<?php

class Controller extends Mobile{

	public static function CreateView($viewName) {
		require_once './Views/'.$viewName.'.php';
	}

	public static function getUrl(){
		$GLOBALS['url'] = $_SERVER['REQUEST_URI'];
		$host = substr($GLOBALS['url'], strrpos($GLOBALS['url'], '/') + 1);		
		return $host;		
	}

	// next function goes here.
	
}

?>