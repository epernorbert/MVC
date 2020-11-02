<?php

class User extends Database {

	// Methods
	public static function getUserByUsername($username) {

		$sql = "SELECT * FROM user WHERE username = '$username'";
		$stmt = self::connect()->query($sql);
		$result = $stmt->fetchAll();
		return $result;
	}

	// Next function goes here.

}

?>