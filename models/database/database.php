<?php 
	// $con = 'mysql:host=localhost;dbname=book_library';
	// $username = 'root';
	// $password = '';
	// $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
	// try {
	// 	$db = new PDO($con, $username, $password, $options);
	// 	// echo "<h1>Connection OK</h1>";
	// } catch (PDOException $e) {
	// 	$error_message = $e->getMessage();
	// 	echo 'Error connecting to database';
	// 	exit();
	// }

	/**
	 * summary
	 */
	class Database
	{
	    /**
	     * summary
	     */
	    private static $dsn ='mysql:host=localhost;dbname=book_library';
	    private static $username ='root';
	    private static $pass ='';
	    private static $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
		private static $db;
	    public function __construct()
	    {
	        
	    }
	    public static function getDB()
	    {
	    	if (!isset(self::$db)) {
	    		try {
	    			self::$db = new PDO(self::$dsn,
	    								self::$username,
	    								self::$pass,
	    								self::$options);
	    		} catch (PDOException $e) {
	    			$error_message = $e->getMessage();
	    			echo "Erro connecting to database: ".$error_message;
	    		}
	    		
	    	}
	    	return self::$db;
	    }
	}
 ?>