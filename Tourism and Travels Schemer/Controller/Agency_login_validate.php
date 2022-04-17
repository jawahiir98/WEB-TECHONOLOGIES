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
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				$agencyid = getagencyid($username, $password);
				
				$_SESSION['current_agencyid'] = null;
				$_SESSION['current_agencyid'] = $agencyid;
				//print_r($_SESSION);
				header('location: ../Views/Homepage2.php?');
			}
			else{
				header('location: ../Views/Homepage.php?msg=error');
			}
		}
		else echo "Please insert username and password";
	}
	else echo "Error";
	
?>