<?php

	if( isset( $_COOKIE['remberme'])){
		
		$_SESSION['loggedinuser'] = array('username' =>'xyz','password'=>'abcd');
		
	}