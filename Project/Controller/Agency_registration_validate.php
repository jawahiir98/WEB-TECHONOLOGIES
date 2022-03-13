<?php 
	session_start();
	//print_r($_REQUEST);
	$agency = [
		'agencyname' => "", 'email' => "", 'username' => "", 'password' => "", 'confirm' => "","address" => ""
	];
	if(isset($_REQUEST['submit']))
	{
		$agencyname = $_REQUEST['agencyname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirm = $_REQUEST['confirm'];
		$address = $_REQUEST['address'];
		$okay = true;
		if($agencyname == null or $username == null or $email == null or $confirm == null or $address ==  null or $password == null) $ok = false;
		if(!$okay) {
			echo "Field cannot be blank";
		}
		if($confirm != $password)
		{
			echo "password and Confirm Password does not match";
		}
		else
		{
			$file = fopen('../Model/agency.txt', 'r');
			$add = true;
			$name_taken = false;
			$email_taken = false;
			while(!feof($file))
			{
				$get_agency = fgets($file);
				$agency_array = explode('|', $get_agency);
				if(isset($agency_array[2]) and trim($agency_array[2]) == $username)
				{
					$name_taken = true;
					$add = false;
				}
				else if(isset($agency_array[1]) and trim($agency_array[1]) == $email)
				{
					$email_taken = true;
					$add = false;
				}
			}
			if($add){
				$get_agency = "";
				$get_agency = $agencyname."|".$email."|".$username."|".$password."|".$address."\r\n";
				fclose($file);
				$file = fopen('../Model/agency.txt', 'a');
				fwrite($file, $get_agency);
				fclose($file);
				header('location: ../Views/Homepage.php');
			}
			else{
				if($name_taken) printf("This username already exists. Please select another username");
				if($email_taken) printf("This Email has already been registered.");
			}
		}
	}
?>