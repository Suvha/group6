<?php

class LoginController extends Controller{

	public function __construct(){

	parent::__construct('login');

	}
	public function index(){

		$this->view('login');
		
	}

	public function login(){

		$post = $_POST;
		$user = array();
	
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user['username'] = $username;
		$user['password'] = $password;
		
		//var_dump($user);exit;

		$return = $this->model->login($user);
		
		if($return){
			//var_dump($return);

			$user = $this->model->getUser();

			//var_dump($user);exit;

			$_SESSION['loggedinuser'] = true;
			$_SESSION['user_id'] = $user['id'];
			header('Location: home');

		}else{
			$_SESSION['errorMessage'] ='Invalid username or password';
			header('location: login');
		}

	}
	

}