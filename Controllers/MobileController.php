<?php

class MobileController extends Controller {

	public static function showMobiles($id) {
		
		$result = Mobile::getMobileById($id);

		echo $result['0']['brand'];
		echo $result['0']['type'];
		echo $result['0']['color'];

	}

	// next function goes here.

}

?>