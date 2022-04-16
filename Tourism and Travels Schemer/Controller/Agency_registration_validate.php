<?php 
	session_start();
	require('../Model/AgencyModel.php');
	if(isset($_REQUEST['submit']))
	{
		$agencyname = $_REQUEST['agencyname'];
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$password = $_REQUEST['password'];
		$logo = $_REQUEST['logo'];
		print_r($_REQUEST);
		if($agencyname != null or $username != null or $email != null or $contact != null or $password != null or $logo != null){
			//($name, $username, $email, $password, $contact, $logo){
			if(signup($agencyname,$username,$email,$password,$contact,$logo)){
				header('location: ../Views/Homepage.php');
			}else{
				echo "An error occured, please try again";
			}
		}
		else{
			echo "Please check if informations are okay";
		}
	}
?>