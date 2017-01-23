<?php 
session_start();

	$session= $_SESSION['loggedinuser'];
	if( !isset($session)){
		header('Location: login.php');
	}

 $data = json_decode($_COOKIE['users'], true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container">
		<h2>Add new user</h2>
		<form name="myform" id="myfrom" method="post" action="process.php" enctype="multipart/form-data">
			
		<div class="form-group">
		<label for="fname">First Name</label>
		<input type="text" class="form-control" id="fname" placeholder="First name" name="fname">
		</div>

		<div class="form-group">
		<label for="lname">Last Name</label>
		<input type="text" class="form-control" id="lname" placeholder="Last name" name="lname">
		</div>

		<div class="form-group">
		<label for="lname">Email</label>
		<input type="text" class="form-control" id="email" placeholder="Email" name="email">
		</div>

		<div class="form-group">
		<label for="lname">Gender</label>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		</div>

		<div class="form-group">
		<label for="lname">Interest</label>
		<input type="checkbox" name="interest[]" value="music"> Music
		<input type="checkbox" name="interest[]" value="internet"> Internet
		<input type="checkbox" name="interest[]" value="traveling"> Travelling
		<input type="checkbox" name="interest[]" value="bloggin"> Bloggin
		</div>

		<div class="form-group">
		<label for="lname">Address</label>
		<textarea name="address" class="form-control"></textarea>
		</div>	

		<div class="form-group">
		<label for="lname">Country</label>
		<select name="country">
			<option value="NP">Nepal</option>
			<option value="US">USA</option>
			<option value="CH">China</option>
		</select>
		</div>


		<div class="form-group">
		<label for="lname">Avatar</label>
		<input type="file" name="avatar">
		</div>

		<div class="form-group">
			<input type="submit" name="sumbit" value="Submit" class="btn btn-primary">
		</div>
		
	</div>


</body>
</html>