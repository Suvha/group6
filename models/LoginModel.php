<?php
class LoginModel extends Model{

	public function __construct(){

		parent::__construct();
	}

	public function login($data = array()){

		$username = $data['username'];
		$password = $data['password'];

		
		$query = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
		$this->select($query);
		$num_rows = $this->getNumRows();

		return $num_rows;

	}

	public function getUser(){
		
		return  $this->getRow();

	}
}
