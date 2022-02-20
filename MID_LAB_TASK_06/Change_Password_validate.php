<?php

	session_start();
	if(isset($_REQUEST['submit'])){
		$retype = "";
		$newpass = "";
		$curpass = $_SESSION['current_user']['password'];
		//print_r($_SESSION['current_user']);
		if($curpass != $_REQUEST['curpass'])
		{
			echo "Current Password does not match";
		}
		else{
			$newpass = $_REQUEST['newpass'];
			$retype = $_REQUEST['retypepass'];
			if($retype != $newpass)
			{
				echo "Please make sure that the new password and retype password match";
			}
			else{
				$_SESSION['current_user']['password'] = $newpass;
			}
		}
		header('location: Dashboard.php');
	}
	else{
		echo "Error in changing password";
	}
?>
