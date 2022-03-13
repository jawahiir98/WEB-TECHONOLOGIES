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
				<a href="../Views/Homepage2.php"> Home|</a> <a href="../Views/Homepage.php"> Logout</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td>
				<form method = "POST" action = "../Controller/Agency_edit_validate.php"> 
					<fieldset align="center" style = "width: 35%">
						<legend>Profile</legend>
						<table align="center">
							<tr>
								<td>Agency Name: </td>
								<td><input type ="text" name = "agencyname" value = "<?=$agencyname?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email: </td>
								<td><input type ="text" name = "email" value = "<?=$email?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password: </td>
								<td><input type ="Password" name = "password" value = "<?=$password?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Confirm Password: </td>
								<td><input type ="Password" name = "confirm" value = "<?=$password?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address: </td>
								<td><input type ="text" name = "address" value = "<?=$address?>"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> </td>
								<td><input type ="submit" name = "save" value = "save"></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>