<?php 
	session_start();

	include 'classes/db.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$user = array();
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user['username'] = $username;
		$user['password'] = $password;

		$db = new DB();
		$query = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
		
		$db->select($query);
		$num_rows = $db->getRows();
		
		//var_dump($num_rows );exit;
		
		if($num_rows >0 ){

			$_SESSION['loggedinuser'] = $user;

			if( isset($_POST['loggedin'])){
			
			setcookie('remberme',1, time()+(86400 * 30));
			}
		
			header('Location: list.php');

		}else{
			$error_message = 'Invalid username or password.';
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>Lgin Form</h2>
		<?php if($error_message){?>
			<div class="alert alert-danger"><?php echo $error_message;?></div>
		<?php } ?>
		<form name="myform" id="myfrom" method="post" action="">
			
		<div class="form-group">
		<label for="fname">Username</label>
		<input type="text" class="form-control" id="username" placeholder="Username" name="username">
		</div>

		<div class="form-group">
		<label for="fname">Password</label>
		<input type="password" class="form-control" id="password" name="password">
		</div>

		<div class="form-group">
	
		<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Login">

		<input type="checkbox" name="loggedin" value="1"> Remember me
		</div>

	</div>

</body>
</html>