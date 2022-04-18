<?php 
	session_start();
	require('../Model/AgentModel.php');
	$id = $_GET['cnt'];
	$agencyid = $_SESSION['current_agencyid'];

	$agent = getagent($id, $agencyid);
	//print_r($agent);
	$name = $agent['name'];
	$contact = $agent['contact'];
	$rate = $agent['rating'];
	$hire = $agent['hire'];
?>
<html>
<head >
	<title>Profile Edit Page</title>
	<link rel="stylesheet" type="text/css" href="../Assert/Agency_edit_profile.css">
	<table  width = "100%" style = "height:50px;padding:50px 50px;"> 
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
	<form method = "POST" action = "../Controller/Agent_edit_validate.php">
		<fieldset style = "width: 50%;">
			<legend>Agent <?=$id?> Profile</legend>
			<table align = "left" style="width : auto">
				<form method = "POST" action = "../Controller/Agent_edit_validate.php">	
					<tr>
						<td>Agent ID:</td>
						<td><input type="text" name="id" value = "<?=$id?>" readonly></td>
					</tr>
					<tr>
						<td>Agent Name:</td>
						<td><input type="text" name="agentname" value = "<?=$name?>"></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><input type="text" name="contact" value = "<?=$contact?>"></td>
					</tr>
					<tr>
						<td>Rating:</td>
						<td><input type="text" name="rating" value = "<?=$rate?>"></td>
					</tr>
					<tr>
						<td>Hiring Rate:</td>
						<td><input type="text" name="hire" value = "<?=$hire?>"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value = "Save">
						</td>
					</tr>
				</form>
			</table>
		</fieldset>
	</form>
</body>
</html>