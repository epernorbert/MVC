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

	public static function getMobileById($id) {						
		$sql = "SELECT * FROM mobile WHERE mobile_id=$id";			
		$stmt = self::connect()->query($sql);
		$result = $stmt->fetchAll();
		return $result;		
	}

	public static function deleteMobile($id) {						
		$sql = "DELETE FROM mobile WHERE mobile_id=$id";		
		$stmt = self::connect()->prepare($sql);
		$stmt->execute([$id]);
	}

	// next function goes here.

}