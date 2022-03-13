<?php 
	session_start();
	$file = fopen('../Model/tmp.txt', 'w');
	fwrite($file, "");
	fclose($file);
	if(isset($_REQUEST['save']))
	{
		$pass = $_REQUEST['password'];
		$conf = $_REQUEST['confirm'];
		$agencyname = $_REQUEST['agencyname'];
		$email =  $_REQUEST['email'];
		$address =  $_REQUEST['address'];
		$username = $_SESSION['current_user']['username'];
		if($pass == "" or $conf == "" or $agencyname == "" or $email == "" or $address == "") 
		{
			echo "Fields cannot be left empty";
		}
		else if($pass != $conf)
		{
			echo "Passwords do not match";
		}
		else
		{
			$file = fopen('../Model/agency.txt', 'r');

			while(!feof($file))
			{
				$get_agency = fgets($file);
				$agency_array = explode('|', $get_agency);
				//print_r($agency_array);
				if(isset($agency_array[2]) and trim($agency_array[2]) == $username)
				{
					continue;
				}
				fwrite($tmp, $get_agency);
			}
			$string = $agencyname."|".$email."|".$username."|".$pass."|".$address."\r\n";
			fwrite($tmp, $string);
			fclose($file);
			fclose($tmp);
			$tmpp = fopen('../Model/tmp.txt', 'r');
			$file = fopen('../Model/agency.txt', 'w');
			$tmp = fread($tmpp, filesize('../Model/tmp.txt'));
			fwrite($file, $tmp);
			$current_user['username'] = $username;
			$current_user['password'] = $pass;
			$current_user['email'] = $email;
			$current_user['agencyname'] = $agencyname;
			$current_user['address'] = $address;
			//print_r($current_user);
			$_SESSION['current_user'] = $current_user;
			header('location: ../Views/Agency_profile.php');
		}
	}
	else
	{
		echo "Error";
	}
?>