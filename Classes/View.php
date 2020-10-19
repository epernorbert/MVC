<?php

class View {

	public static $validRoute = array();	

	public static function set($route, $function) {

		self::$validRoute[] = $route;

		// The __invoke() method is called when a script tries to call an object as a function.
		if($_GET['url'] == $route) {
			$function->__invoke();
		}		
	}
}

?>