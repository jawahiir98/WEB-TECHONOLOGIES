<?php 
	session_start();
	$user = "";
	$name = "";
	$email = "";
	$gender = "";
	$dob = "";
	$male = false;
	$female = false;
	$other = false;
	if(isset($_SESSION['current_user']))
	{
		$user = $_SESSION['current_user'];
		$name = $user['myname'];
		$email = $user['email'];
		$gender = $user["gender"];
		$dob = $user['dob'];
		if($gender == "Male") $male = true;
		else if($gender == "Female") $female = true;
		else $other = true;
	}
?>
<html>
<head>
	<title>Dashboard</title>
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
							<li> <a href = "Dashboard.php"> Edit Profile </a> </li>
							<li> <a href = "Change_Profile_picutre.php"> Change Profile Picture </a> </li>
							<li> <a href = "Change_Password.php"> Change Password </a> </li>
						</ul>
					</tr>
				</table>
			</td>
			<td width = "100%" align = "center">
			<form method = "POST" action = "Edit_profile_validate.php">
				<fieldset style = "width: 65%">
					<legend>Profile</legend>
					<table align = "left" style="width : 100%">
						<tr>
							<td width = "30%"> Name</td>
							<td >: <input type = "text" name = "myname" value = "<?= $name?>"></td>
							<td> </td>
						</tr>
						<tr>
							 <td> <hr width = "100%" noshade="noshade" > </td>
						</tr>
						<tr>
							<td width = "30%"> Email </td>
							<td >: <input type = "text" name = "email" value = "<?= $email?>"></td>
							<td> </td>
						</tr>
						<tr>
							 <td> <hr width = "100%" noshade="noshade" > </td>
						</tr>
						<tr>
							<td width = "30%"> Gender</td>
							<td >:  
								<input type="radio" name="gender" value= "Male" <?php if($male == true) echo 'checked = "checked"' ?> > Male 
								<input type="radio" name="gender" value= "Female"  <?php if($female == true) echo 'checked	= "checked"' ?>> Female 
								<input type="radio" name="gender" value= "Other"  <?php if($other == true) echo 'checked = "checked"' ?> > Other
							</td>
							<td> </td>
						</tr>
						<tr>
							 <td> <hr width = "100%" noshade="noshade" > </td>
						</tr>
						<tr>
							<td width = "30%"> Date of birth</td>
							<td >: <input type="date" name="dob" value="<?= $dob?>"></td>
							<td> </td>
						</tr>
						<tr>
							 <td> <hr width = "100%" noshade="noshade" > </td>
						</tr>
						<tr>
							<td> <input type = "submit" name = "submit" value = "Submit"> </td>
						</tr>
					</table>
				</fieldset>
			</form>
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

							