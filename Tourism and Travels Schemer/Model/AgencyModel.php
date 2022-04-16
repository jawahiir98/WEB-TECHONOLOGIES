<?php 
	
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'tourism and travel schemer');
		return $con;
	}
	function login($username, $password)
	{
		$con = connection();
		$sql = "select * from agencies where username = '{$username}' and password = '{$password}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				if($username == $row['Username'] and $password == $row['Password'])
				{
					$_SESSION['current_userid'] = $row['agencyid'];
					return true;
				}
			}
		}
		return false;
	}
		

	function signup($name, $username, $email, $password, $contact, $logo){
		$con = connection();
		$ssql = "select * from agencies";
		$id = 1;
		$res = mysqli_query($con, $ssql);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_assoc($res)){
				$temp = $row['agencyid'];
				$id = max($id, $temp);
				print_r($row);
			}
			$id += 1;
		}
		$sql = "insert into agencies values ('{$id}','{$name}','{$email}','{$contact}','{$username}','{$password}','{$logo}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}
?>