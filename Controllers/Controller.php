<?php

class Controller extends Mobile{

	public static function CreateView($viewName) {
		require_once './Views/'.$viewName.'.php';
	}

	public static function showMobiles(array $data) {
		$result = Mobile::getMobiles();					

		$data = $data;
		$howManyDisplay = $data[0];		
		
		for($row = 0; $row < $howManyDisplay; $row++) {	
			echo '<br>';
			foreach (array_slice($data, 1) as &$value) {			
				echo $result[$row][$value] . '&nbsp';			
			}			
		}
	}
}

?>