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
		

	function signup()
	{
		
	}	
?>