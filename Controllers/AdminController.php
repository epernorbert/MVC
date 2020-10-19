<?php

class AdminController extends Controller {


	public static function insertMobile($brand, $type, $color) {
		
		if(isset($_POST['submit'])) {

			$brand = $_POST['brand'];				
			$type = $_POST['type'];
			$color = $_POST['color'];

			if(empty($brand) || empty($type) || empty($color)){
				header('Location: admin?insert=error');

			} else {
				Mobile::setMobiles($brand, $type, $color);
				header('Location: admin?insert=success');

			}

		}

		// Next function goes here
			
	}	
	
}

?>