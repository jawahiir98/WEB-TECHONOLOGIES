<?php 
	session_start();
	$username = "";
	if(isset($_SESSION['current_user']))
	{
		$username = $_SESSION['current_user']['username'];
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
				Logged in as:  <a href = "Profle.php"> <?php if(isset($username)) echo "$username" ?>  |</a> 
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
					<tr colspan = "100%t"> 
						<h5 > Account </h5>
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
				Welcome <?php echo "$username"; ?>
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