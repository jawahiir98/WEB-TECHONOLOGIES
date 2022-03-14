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
				<a href = "Homepage.php"> <input type = "button" name = "logout" value = "Logout"> </a>
			</td>
		</tr>
	</table>
	
</head>
<body>
	<br> <br>
	<h2 align = "center"> SCHEME YOUR TRAVELS WITH EASE! </h2> <br>
	<a href = "../Views/Agency_dashboard.php"> Deshboard </a>
</body>
</html>