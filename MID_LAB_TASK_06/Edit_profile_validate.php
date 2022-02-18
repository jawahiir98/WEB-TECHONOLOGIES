<?php
	session_start();
	$name = "";
	$email = "";
	$gender = "";
	$dob = "";

	//print_r($_REQUEST);
	if(isset($_REQUEST['submit']))
	{
		if(($_REQUEST['myname']) != ""){
			$name = $_REQUEST['myname'];
			$_SESSION['current_user']['myname'] = $name;
			echo "$name";
		}
		if(($_REQUEST['email']) != ""){
			$email = $_REQUEST['email'];
			$_SESSION['current_user']['email'] = $email;
		}
		if(($_REQUEST['gender']) != ""){
			$gender = $_REQUEST['gender'];
			$_SESSION['current_user']['gender'] = $gender;
		}
		if(($_REQUEST['dob']) != ""){
			$dob = $_REQUEST['dob'];
			$_SESSION['current_user']['dob'] = $dob;
		}
		//print_r($_SESSION['current_user']);
		header("location: Profile.php");
?>
<?php

	}
	else{
		echo "ERROR";
	}

?>