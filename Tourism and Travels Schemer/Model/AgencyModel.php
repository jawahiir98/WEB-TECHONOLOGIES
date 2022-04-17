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
	function getagencyid($username, $password)
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
					$agencyid = $row['agencyid'];
					return $agencyid;
				}
			}
		}
	}
	function getagency($agencyid)
	{
		$con = connection();
		$sql = "select * from agencies where agencyid = '{$agencyid}'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res))
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$Agency = [

					'agencyid' => $row['agencyid'],
					'agencyname' => $row['Name'],
					'email' => $row['Email'],
					'contact' => $row['Contact'],
					'username' => $row['Username'],
					'password' => $row['Password'],
					'logo' => $row['Logo']
				];
				return $Agency;
			}
		}
	}
	function update($name, $email, $contact, $id)
	{
		$con = connection();
		$sql = "update agencies set name ='{$name}',email = '{$email}',contact = '{$contact}' where agencyid='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>