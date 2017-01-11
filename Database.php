<?php 

class Database 
{
	
	private static $database;

	public static function connect()
	{
		self::$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		return self::$database;
	}


	public static function disconnect()
	{
		self::$database = NULL;
	}
}

 ?>
