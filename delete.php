<?php
$id = $_GET['id'];
if( isset($id) ){
	$data = json_decode($_COOKIE['users'], true);
	unset( $data[$id]);
	setcookie('users', json_encode($data), time()+(86400* 10));
	header('Location: list.php');

}