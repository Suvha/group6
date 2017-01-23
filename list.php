<?php session_start();
	
	include('session.php');
	include('classes/db.php');

	$session= $_SESSION['loggedinuser'];
	if( !isset($session)){
		header('Location: login.php');
	}

 //$data = json_decode($_COOKIE['users'], true);
	$db = new DB();
	$db->select("SELECT * FROM tbl_user_profile");
	$result = $db->result;


/* echo '<pre>';
 print_r($data);
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Listing</title>
		<title>Homepage</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<h2>User List</h2>
	<a href="form.php" class="btn btn-primary">Add User</a>
	<a href="logout.php" class="btn btn-danger">Logout</a>
	<table class="table">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Avatar</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Action</th>
				<tr>		
			</thead>


			<tbody>
				<?php while($dd = mysqli_fetch_assoc($result) ) {?>
				<tr>
					<td><?php echo $key+1;?></td>
					<td>
						<img src="uploads/<?php echo $dd['avatar'];?>" width="40px">		
					</td>
					<td><?php echo $dd['fname']. '' . $dd['lname'];?></td>
					<td><?php echo $dd['email'];?></td>
					<td><?php echo $dd['address'];?></td>
					<td><?php echo $dd['gender'];?></td>
					<td><a href="edit.php?id=<?php echo $dd['id'];?>">Edit</a>| 
					<a href="delete.php?id=<?php echo $ddp['id'];?>"  onclick="return conf();">Delete</a></td>
				</tr>	
				<?php } ?>	
			</tbody>
		</table>
</div>
<style type="text/css">
	
</style>
<script type="text/javascript">
	function conf(){
		var result = confirm('Are you sure you want to delete this record?');
		if(result){
			return true;
		}else{
			return false;
		}
	}
</script>
</body>
</html>