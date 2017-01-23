<?php
session_start();


include ('config.php');
include ('libraries/request.php');
include ('libraries/router.php');
include ('libraries/Controller.php');
include ('libraries/Model.php');


$route = new Router();

$route->get('login',function(){
	
	$obj = new LoginController();
	$obj->index();

});


$route->post('login',function(){
	
	$obj = new LoginController();
	$obj->login();

});


$route->get('profile',function(){
	//echo 'profile Router';
	$obj = new ProfileController();
	$obj->index();
});

$route->get('home',function(){

	$obj = new HomeController();
	$obj->index();

});
$route->get('editProfile',function(){

	$obj = new EditProfileController();
	$obj->index();
});
$route->post('editProfile',function(){

$obj = new EditProfileController();
$obj->editProfile();
});