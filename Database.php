<?php 

class Database 
{
	
	private static $database; //si on veut utiliser une variable dans une fonction static il faut que celle la soit aussi static

	public static function connect() //ici nous avons une fonction static qui pourra s'appeler sans l'instantiation d'une class
	{
		try
		{
			self::$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			echo 'database ouvert';
			return self::$database; //l'utilisation d'une variable static s'utilise avec self::nomAttribut
 		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}
	}


	public static function disconnect()
	{
		self::$database = NULL; //je remet database a NULL pour ne pas pourrir ma base avec d'autre elements
		echo 'database fermé';
	}
}

 ?>