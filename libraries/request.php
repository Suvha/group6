<?php 

class Request{

	private $local_uri;

	public function __construct(){

		$this->local_uri = $_SERVER["REQUEST_URI"];
	}

	public function getUri(){
		
		return $this->local_uri;
	}
}