<?php
include_once"crud.php";
include_once"DBConnector.php";
class user implements Crud{
	private $user_id;
	private $first_name;
	private $last_name;
	private $city_name;
	private $connection;
	function _construct($first_name,$last_name,$city_name){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->city_name = $city_name;
		$this->connection = new DBConnector();
				
			
		}
		public function setUserId($user_id){
			$this->user_id = $user_id;

		}
		public function getUserId(){
		return $this->$user_id;

		}
		public function setUsername($username)
		{
			$this->username = $username;
		}

		public function save(){
			$fn = $this->first_name;
			$ln = $this->last_name;
			$city =$this->city_name;
			$this->connection = mysqli_connect('localhost','root','','ics3104');
			$res = mysqli_query($this->connection, "INSERT INTO user(first_name,last_name,user_city) VALUES('$fn','$ln','$city')");
			return $res;


		}
		public function readAll(){
				$this->connection();

			$res = mysqli_query($this->con->conn, "SELECT * FROM user") or die("Error " . mysqli_error($this->con->conn));

			$this->DBClose();

			return $res;
		}
		public function readUnique(){
			return null;
		}
		public function search(){
			return null;
		}
		public function update(){
			return null;
		}
		public function removeOne(){
			return null;
		}
		public function removeAll(){
			return null;
		}
	}
?>