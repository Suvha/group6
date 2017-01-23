<?php session_start();

session_unset($_SESSION['loggedinuser']);

setcookie('remberme',0, time() + (86400 * (-2)));

header('Location: login.php');
//session_destroy();