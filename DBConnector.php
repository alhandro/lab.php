<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ics3104');

class DBConnector{
	public $conn;
	function _construct(){
		$this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS) or die("Error:".mysqli_connect_error());
		mysqli_select_db($this->conn,DB_NAME);
	}
	public function closeDatabase(){
		mysqli_close($this->conn);
	}
	
}
?>
