<?php

Class DB
{
    // DB Config Details
    private static $db_host = 'localhost';
    private static $db_name = 'lapfox';
    private static $db_user = 'root';
    private static $db_pass = 'root';
    
    // Don't edit below here
	private static $link = null;
	
	public static function access()
	{
		if(self::$link == null){
			self::connect();
		}
		return self::$link;
	}
	
	private static function connect()
	{
		try
		{
			$dsn = ('mysql:host=' . self::$db_host . ';dbname=' . self::$db_name);
			self::$link = new PDO($dsn, self::$db_user, self::$db_pass);		}
		catch (PDOException $e) 
		{
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}

?>