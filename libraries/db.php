<?php
include 'config.php';

class DB{
	
	private $conn;

	public $result;


	public function __construct(){

		$this->conn =mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		if(!$this->conn){
			die('Error in database connection.');
		}

	}

	public function select($sql){

		$this->result = mysqli_query($this->conn, $sql);
	}	

	public function getRows(){

		return mysqli_num_rows($this->result);
	}

}