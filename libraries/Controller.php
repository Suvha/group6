<?php
class Controller{
	
	public $model;

	public function __construct($model){

		$modelname = ucfirst($model).'Model';  //LoginModel

		include 'models/'.$modelname.'.php';

		$this->model = new $modelname; // $this->model = new LoginModel;
		

	}


	public function view($view, $params= array() ){
		
		extract($params);
		
		include 'templates/'.$view.'.php';
	}


	public function getModel($model){

		$modelname = ucfirst($model).'Model';  //LoginModel

		include 'models/'.$modelname.'.php';

		$mdoelObject = new $modelname; // $this->model = new LoginModel;
			
		return $modelObject;

	}
}