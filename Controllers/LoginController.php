<?php

session_start();

class LoginController extends Controller {

	public static function loginUser($username, $password) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('Location: login?login=empty');
			exit();
		} else {
			$result = User::getUserByUsername($username);

			if($result == null){
				header('Location: login?login=username');
				exit();
			} else {
				$hashedPwdCheck = password_verify($password, $result['0']['password']);

				// De-hashing the password
				if($hashedPwdCheck == false){
					header('Location: login?login=password');
					exit();
				} else if($hashedPwdCheck == true){

					// Log in the user here
					$_SESSION['username_id'] = $result['0']['username_id'];
					$_SESSION['first_name'] = $result['0']['first_name'];
					$_SESSION['last_name'] = $result['0']['last_name'];
					$_SESSION['gender'] = $result['0']['gender'];
					$_SESSION['username'] = $result['0']['username'];
					$_SESSION['user_type'] = $result['0']['user_type'];
					$_SESSION['registration_date'] = $result['0']['registration_date'];					
					
					header("Location: admin?login=succes");
					
				}

			}

		} 

	}
	
}

?>