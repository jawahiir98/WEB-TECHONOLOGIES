<?php 
	session_start();
	$user = [
				'myname'=> "",'email'=>"",'username'=>"",'password'=>"",'confirm'=>"",'gender'=>"",'dob'=>""
			];
	$_SESSION['users'][0] = $user;
	if(isset($_REQUEST['submit']))
	{
		$myname = $_REQUEST['myname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirm = $_REQUEST['confirm'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$okay = true;
		if($myname == null or $username == null or $email == null or $confirm == null or $gender ==  null or $password == null or $dob == null) $ok = false;
		if($confirm != $password) $ok = false;
		if(!$okay)
		{
			echo "Registration incomplete";
		}
		else
		{
			$user = [
				'myname'=>$myname,'email'=>$email,'username'=>$username,'password'=>$password,'confirm'=>$confirm,'gender'=>$gender,'dob'=>$dob
			];
			//print_r($user);
			$users = $_SESSION['users'];
			$index = count($users);
			$_SESSION['users'][$index] = $user;
			header('location: Login_page.php');
		}
	}

?>