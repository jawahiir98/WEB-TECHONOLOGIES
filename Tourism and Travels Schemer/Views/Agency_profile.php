<?php 
	session_start();
	//print_r($_SESSION['current_user']);
	$current_user = $_SESSION['current_user'];
	$username = $current_user['username'];
	//'agencyname' => "", 'email' => "", 'username' => "", 'password' => "", 'confirm' => "","address" => ""
	$email = $current_user['email'];
	$agencyname = $current_user['agencyname'];
	$password = $current_user['password'];
	$address = $current_user['address'];
?>
<html>
<head>
	<title>Registration Page</title>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/Homepage2.php"> Home|</a> <a href="../Views/Homepage.php"> Sign In</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
						<table align="center">
							<tr>
								<td>Agency Name: </td>
								<td><?=$agencyname?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email: </td>
								<td><?=$email?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Username: </td>
								<td><?=$username?> </td>	
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password: </td>
								<td><?=$email?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address: </td>
								<td><?=$address?> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
						</table>
					</fieldset>
			</td>
		</tr>
	</table>
	<a href="Agency_edit_profile.php"> Edit Profile </a>
</body>
</html>