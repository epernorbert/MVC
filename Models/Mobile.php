<?php

class Mobile extends Database {

	// Properties
	public static $brand;
	public static $type;
	public static $color;

	// Methods
	public static function getMobiles() {
		$sql = "SELECT * FROM mobile";
		$stmt = self::connect()->query($sql);

		$result = $stmt->fetchAll();
		$GLOBALS['numberOfRecord'] = count($result);

		return $result;
	}

	public static function setMobiles($brand, $type, $color) {		
		$sql = "INSERT INTO mobile(brand, type, color) VALUES (?, ?, ?)";
		$stmt = self::connect()->prepare($sql);
		$stmt->execute([$brand, $type, $color]);

	}

}