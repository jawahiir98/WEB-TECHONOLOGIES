<?php
	session_start();
	$current_user = $_SESSION['current_user'];
	//print_r($current_user);
	$Username = $current_user['username'];
?>
<html>
<head>
	<table>
		<tr>
			<td> </td>
			<td>
				Logged in as <a href="Agency_profile.php"> <?=$Username?></a>
			</td>
			<td width = "90%" align = "right">
				<a href = "../Controller/Logout.php"> <input type = "button" name = "logout" value = "Logout"> </a>
			</td>
		</tr>
	</table>
</head>
<body>
	<br> <br> <br>
	<table border = "1px">
		<tr>
			<td >
				<table width = "250px">
					<tr colspan = "100%"> 
						<h5 > Account </h5>
						<hr width = "100%" noshade="noshade" >
					</tr>
					<tr>
						<ul> 
							<li> <a href = "Agency_dashboard.php"> Dashboard </a> </li>
							<li> <a href = "Agency_profile.php"> View Profile </a> </li>
							<li> <a href = "Agency_edit_profile.php"> Edit Profile </a> </li>
							<li> <a href = "Agency_messages.php"> Messages </a> </li>
							<li> <a href = "Agency_agents.php"> Agents </a> </li>
							<li> <a href = "Add_agents.php"> Add Agent </a> </li>
						</ul>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>