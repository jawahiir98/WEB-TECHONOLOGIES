<?php 
	session_start();
	require('../Model/AgencyModel.php');
	$agencyid = $_SESSION['current_agencyid'];
	$current_agency = getagency($agencyid);
	$pic = $current_agency['logo'];
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Assert/Agency_profile.css">
	<title>Profile Page</title>

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
	<div class = "container">
		<div>
			<div class="profile-box">
				<form action = "Homepage2.php"class = "menu"> <input type="submit" value="Dashboard"></form>
				<form action = "Agency_edit_profile.php"class = "setting"> <input type="submit" value="Edit Profile"></form>
				<!-- <button id = "menu" class="menu"> Dashboard</button> -->
				<!-- <button id = "setting" class="setting"> Edit Profile</button> -->
				<img class="profile-pic" src ="upload/<?=$pic?>" >
				<div class="content">
					<table class = "table">
						<tr>
							<td class = "TD" >Agency Name : </td>
							<td class = "TD2"> <?=$current_agency['agencyname']?> </td> 
						</tr>
						<tr>
							<td class = "TD">Username : </td>
							<td class = "TD2"> <?=$current_agency['username']?> </td> 
						</tr>
						<tr>
							<td class = "TD">Email : </td>
							<td class = "TD2"> <?=$current_agency['email']?> </td> 
						</tr>
						<tr>
							<td class = "TD">Contact Info. : </td>
							<td class = "TD2"> <?=$current_agency['contact']?> </td> 
						</tr>
					</table>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>