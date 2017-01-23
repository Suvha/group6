<?php

class HomeController extends Controller{
	public function __construct(){
		parent::__construct('profile');
	}

		public function index(){
			
		$profile = $this->model->profile();
		$this->view('homepage', array('profile'=> $profile) );
		
	}
}