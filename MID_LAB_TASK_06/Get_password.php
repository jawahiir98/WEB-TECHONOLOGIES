<?php 

	session_start();
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		$users = $_SESSION['users'];
		$pass = "";
		$okay = false;
		$temp_mail = "";
		for($i = 1;$i < count($users);$i++)
		{
			 if (isset($users[$i])) {
		       	$user = $users[$i];
		       	$temp_mail = $user['email'];
		       	$pass = $user['password'];
		       	//echo "$temp_mail $pass";
		       	if($temp_mail == $email)
		       	{
		       		$okay = true;
		       		break;
		       	}
		    }
		}
		if($email == null or !$okay)
		{
			echo "Enter valid Email";
		}
		else
		{
			echo "Your Password for Email : $email is : $pass";
		}
	}
?>