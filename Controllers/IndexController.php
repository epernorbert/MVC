<?php

class IndexController extends Controller {

	public static function showMobiles(array $data) {
		$result = Mobile::getMobiles();					

		$data = $data;
		$howManyDisplay = $data[0];
		
		for($row = 0; $row < $howManyDisplay; $row++) {	
			echo '<br>';		
			foreach (array_slice($data, 1) as &$value) {			
				echo '<a href="mobile-id/'.$result[$row]['mobile_id'].'"> '.$result[$row][$value].' </a>';
			}
		}
	}

	// next function goes here	

}

?>