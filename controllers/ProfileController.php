<?php
class ProfileController extends Controller{

	public function __construct(){
		//echo 'COnstruct';
		parent::__construct('profile');
	}

	public function index(){

		$profile = $this->model->profile();
		$this->view('profile', array('profile'=> $profile) );
	}

}