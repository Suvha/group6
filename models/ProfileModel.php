<?php
class ProfileModel extends Model{

	public function __construct(){
		
		parent::__construct();
	}


	public function profile(){
		$user_id = $_SESSION['user_id'];
		$query = "SELECT * FROM tbl_user_profile WHERE user_id='$user_id'";
		$this->select($query);
		return $this->getRow();
	}
	public function editProfile($arrayProfile= array()){
		var_dump($arrayProfile);
		echo ($_SESSION['user_id']);
		$id= $_SESSION['user_id'];
		$firstname=$arrayProfile['fname'];
		$lastname=$arrayProfile['lname'];
		echo $lastname;
		$email=$arrayProfile['email'];
		$address=$arrayProfile['address'];
		$gender=$arrayProfile['gender'];
		$avatar=$arrayProfile['avatar'];
		//var_dump($arrayProfile).exit();
		$query = " UPDATE tbl_user_profile SET
				user_id='$id',
				fname='$firstname',
				lname='$lastname',
				email='$email',
				address='$address',
				gender='$gender',
				avatar='$avatar' WHERE user_id='$id'";
		$this->select($query);
			$rowNum=$this->getNumRows();
			return $rowNum;

		}
}