<?php

class Router{

	private  $request;

	public function __construct(){

		$this->request = new Request();
		
	}

	public function get($uri,$clouser){

		if ($_SERVER['REQUEST_METHOD'] === 'GET') {

			$local_uri = $this->request->getUri();
			
			preg_match('/\.php.*/', $local_uri, $matches);
			
			//echo $matches[0];

			//echo '.php/'.$uri;

			if($matches[0] == '.php/'.$uri){
			  	$contrellerName = ucfirst($uri).'Controller';
				include 'controllers/'.$contrellerName.'.php';
				call_user_func($clouser);
			}	
		}

	}


	public function post($uri,$clouser){

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$local_uri = $this->request->getUri();
			
			preg_match('/\.php.*/', $local_uri, $matches);
			
			if($matches[0] == '.php/'.$uri){
			  
				$contrellerName = ucfirst($uri).'Controller';
				include 'controllers/'.$contrellerName.'.php';
				call_user_func($clouser);
			}	
		}

	}

}