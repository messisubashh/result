<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','result');
class dbConnect{
	public $db;
	public function __construct(){
		$this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if (mysqli_connect_errno())
		{
			echo "Error:could not connect to database.";
			exit;
		}
	}
}
?>