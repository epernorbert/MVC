<?php

class LogoutController extends Controller {

	public static function logout() {

		if(isset($_POST['submit'])){
	    session_start();
	    session_unset();
	    session_destroy();
	    header("Location: login");
	    exit();
	    
		}

	}

}

?>