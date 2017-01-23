<?php

include 'db.php';

if( isset($_POST['sumbit']) ) {

	$data = array();

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$id = $_POST['id'];

	$image = $_FILES['avatar'];
	$avatar ='';

	//var_dump($image);
	if(isset($image) &&  $image['error'] == 0){

		$filename = $image['name'];
		$nameParts = explode('.', $filename);
		$extension = array_pop($nameParts);
		$avatar = time().date('Ymd').'.'.$extension;
		$destination = 'uploads/'.$avatar;

		move_uploaded_file($image['tmp_name'], $destination);
		
	}
	if(isset($id)){

		$query = "UPDATE tbl_user_profile SET
				fname='$fname',
				lname='$lname',
				email='$email',
				address='$address',
				gender='$gender'
				";

		if(!empty($avatar))	{
			$query = $query . ",avatar=$avatar";
		}	

		$query .=" WHERE id='$id'";
		mysqli_query($conn,$query);
		//mysqli_execute();


	}else{

		$query = "INSERT INTO tbl_user_profile(fname,lname,email,user_id,address,gender,avatar)
			VALUES('$fname','$lname','$email','1','$address','$gender','$avatar')
	";
		mysqli_query($conn,$query);
	}



	header('Location: list.php');

}else{

	die('Invalid method');
}
