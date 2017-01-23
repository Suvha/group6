<?php 
	include 'db.php';
	if( isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM tbl_user_profile WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);		

	}else{
		die('Access Denied!!');
	}
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
		<input type="text" class="form-control" id="fname" placeholder="First name" name="fname" value="<?php echo $user['fname'];?>">
		</div>

		<div class="form-group">
		<label for="lname">Last Name</label>
		<input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" value="<?php echo $user['lname'];?>">
		</div>

		<div class="form-group">
		<label for="lname">Email</label>
		<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $user['email'];?>">
		</div>

		<div class="form-group">
		<label for="lname">Gender</label>
		<input type="radio" name="gender" value="male" 
		<?php if($user['gender'] == 'male') echo 'checked';?>>Male
		<input type="radio" name="gender" value="female" <?php if($user['gender'] == 'female') echo 'checked';?>>Female
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
		<textarea name="address" class="form-control"><?php echo $user['address'];?></textarea>
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
		<label for="lname">Existing Avatar</label>
		<img src="uploads/<?php echo $user['avatar'];?>" width="60px">
		</div>

		<div class="form-group">
		<label for="lname">Avatar</label>
		<input type="file" name="avatar">
		</div>

		<div class="form-group">
			<input type="submit" name="sumbit" value="Update" class="btn btn-primary">
			<input type="hidden" name="id" value="<?php echo $user['id'];?>">
		</div>
		
	</div>


</body>
</html>