<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="../bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>Login Form</h2>
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