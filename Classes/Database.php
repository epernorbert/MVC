<?php

class Database {

	public static $host = "localhost";
	public static $user = "root";
	public static $pwd = "";
	public static $dbName = "mobileshopmvcdb";


	public static function connect() {
		$pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$user, self::$pwd);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;		
	}

}

?>