<?php 
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$file = fopen('../Model/agency.txt', 'r');
		while(!feof($file))
		{
			$get_file = fgets($file);
			$agency_array = explode('|', $get_file);
			if(isset($agency_array[2]) and isset($agency_array[3]))
			{
				//print_r($agency_array);
				if(trim($agency_array[2]) == $username && trim($agency_array[3]) == $password)
				{
					$current_user['username'] = trim($agency_array[2]);
					$current_user['password'] = trim($agency_array[3]);
					$current_user['email'] = trim($agency_array[1]);
					$current_user['agencyname'] = trim($agency_array[0]);
					$current_user['address'] = trim($agency_array[4]);
					$_SESSION['current_user'] = $current_user;
					//$_SESSION['status'] = 'true';
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../Views/Homepage2.php');
				}
			}
		}
		echo "Username or password does not match";
	}
	else echo "Please insert username and password";
?>