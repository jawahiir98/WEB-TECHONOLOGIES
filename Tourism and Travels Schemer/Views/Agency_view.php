<?php 
	session_start();
	require('../Model/AgentModel.php');
	$id = $_GET['cnt'];
	$agencyid = $_SESSION['current_agencyid'];
	$agent = getagent($id, $agencyid);
?>
<html>
<head>
	<title>Agent Portfolio</title>
	<a href="Homepage.php">Home| </a> <a href="Agency_Dashboard.php"> Dashboard| </a> <a href = "../Controller/logout.php">Logout </a>
	<style type="text/css">
		*{
			font-size: 17px;
			box-sizing: border-box;
			justify-content: center;
			align-content: center;
			align-items: center;
		}
	</style>
</head>
<body> <br> <br> <br>
	<table>
		<tr>
			<td> Agent ID: <?=$id?></td>
		</tr>
		<tr>
			<td> <hr noshade="noshade"> </td>
		</tr>
		<tr>
			<td>Name:  <?=$agent['name']?></td>
		</tr>
		<tr>
			<td> <hr noshade="noshade"> </td>
		</tr>
		<tr>
			<td>Contact:  <?=$agent['contact']?></td>
			
		</tr>
		<tr>
			<td> <hr noshade="noshade"> </td>
		</tr>
		<tr>
			<td>Rating:  <?=$agent['rating']?></td>
		</tr>
		<tr>
			<td> <hr noshade="noshade"> </td>
		</tr>
		<tr>
			<td>Hiring Rate:  <?=$agent['hire']?></td>
		</tr>
	</table>
</body>
</html>