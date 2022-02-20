<?php 
	session_start();
	$user = "";
	$name = "";
	$email = "";
	$gender = "";
	$dob = "";
	// if(isset($_SESSION['second_cur'])){
	// 	print_r($_SESSION['second_cur']);
	// 	$_SESSION['current_user'] = $_SESSION['second_cur'];
	// }
	if(isset($_SESSION['current_user']))
	{
		//print_r($_SESSION['current_user']);
		$user = $_SESSION['current_user'];
		$username = $user['username'];
		$name = $user['myname'];
		$email = $user['email'];
		$gender = $user['gender'];
		$dob = $user['dob'];
	}
?>
<html>
<head>
	<title>Profile</title>
	<table border = "1px" width = "100%"> 
		<tr>
			<td> 
				<h2 align="left"> XCompany</h2> 
				<h5 align = "right">
				Logged in as:  <a href = "Profile.php"> <?php if(isset($username)) echo "$username" ?> |</a> 
				<a href="Logout.php"> Logout </a>
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table border = "1px">
		<tr>
			<td >
				<table width = "250px">
					<tr colspan = "100%"> 
						<h5 > Accountant</h5>
						<hr width = "100%" noshade="noshade" >
					</tr>
					<tr>
						<ul> 
							<li> <a href = "Dashboard.php"> Dashboard </a> </li>
							<li> <a href = "Profile.php"> View Profile </a> </li>
							<li> <a href = "Edit_profile.php"> Edit Profile </a> </li>
							<li> <a href = "Change_Profile_picutre.php"> Change Profile Picture </a> </li>
							<li> <a href = "Change_Password.php"> Change Password </a> </li>
						</ul>
					</tr>
				</table>
			</td>
			<td width = "100%" align = "center">
				<fieldset style = "width: 65%">
						<legend>Change Profile Picture</legend>
						<table align = "left" style="width : 100%">
							<tr> 
								<td> <img src=""> </td>
							</tr>
							<tr rowspan = "3">
								<td> <img src=""> </td>
							</tr>
							<tr>
								<td><input type="file" name="browse"></td>
							</tr>
							<tr>
								<td> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td> <input type = "submit" name = "submit" value = "Submit"> </td>
							</tr>
						</table>
					</fieldset>
			</td>
		</tr>
	</table>
	<table width = "100%" border = "1px">
		<tr height = "50px">
			<td align = "center"> Copyright @2017 </td>
		</tr>
	</table>
</body>
</html>

							