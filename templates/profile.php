
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="../bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
		<div class="container">
			<ul>
				<li> Name: <?php echo $profile['fname'] . ' ' .$profile['lname'];?></li>
				<li> Email: <?php echo $profile['email'];?></li>
				<li> Avatar: <img src="../uploads/<?php echo $profile['avatar'];?>" width="100px"></li>

			</ul>		
		</div>
	
</body>
</html>