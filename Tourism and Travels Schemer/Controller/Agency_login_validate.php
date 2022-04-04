<?php 
	session_start();
	require('../Model/AgencyModel.php');

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		if($username != null and $password != null)
		{
			if(login($username, $password))
			{
				print_r($_SESSION['current_agencyid']);
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../Views/Homepage2.php');
			}
			else{
				header('location: ../Views/Homepage.php?msg=error');
			}
		}
		else echo "Please insert username and password";
	}
	else echo "Error";
	
?>