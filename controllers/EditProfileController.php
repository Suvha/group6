<?php
class EditProfileController extends Controller{
	public function __construct(){
		parent:: __construct('profile');
	}
	public function index(){
		$profile = $this->model->profile();
		$this->view('editProfile', array('profile'=> $profile) );
	}
public function editProfile(){
			$post = $_POST;
			$id=$_SESSION['user_id'];
			$profile = $this->model->profile();
	if($post) {
/*	$fname = $post['fname'];
	$lname = $post['lname'];
	$email = $post['email'];
	$gender = $post['gender'];
	$address = $post['address'];*/

	$image = $_FILES['avatar'];
	$avatar ='';
	if(isset($image) &&  $image['error'] == 0){

		$filename = $image['name'];
		$nameParts = explode('.', $filename);
		$extension = array_pop($nameParts);
		$avatar = time().date('Ymd').'.'.$extension;
		$destination = 'uploads/'.$avatar;

		move_uploaded_file($image['tmp_name'], $destination);
		
	}
	$post['avatar']=$profile['avatar'];
	echo "                                ";
	echo $post['avatar'];
	if(isset($id)){

		if(!empty($avatar))	{
			$post['avatar']=$avatar;
		}	
		var_dump($post);
		$result=$this->model->editProfile($post);

	}
	header('Location: home');

}else{

	die('Invalid method');
}

	}
}