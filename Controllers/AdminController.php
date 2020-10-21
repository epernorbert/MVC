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
			echo '<button type="submit">
					<a href="./delete/'.$result[$row]['mobile_id'].'">Delete</a>
				  </button>';	
		}
	}

	public static function deleteMobile($id){

		Mobile::getMobileById($id);
		Mobile::deleteMobile($id);

		header('Location: ../admin?delete=success');

	}

	// next function goes here.	
	
}

?>