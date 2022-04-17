<?php 
	session_start();
	require('../Model/AgencyModel.php');
	//print_r($_SESSION['current_user']);
	$current_agency = getagency($_SESSION['current_agencyid']);
	$_SESSION['cur_agency'] = $current_agency;
	$pic = $current_agency['logo'];
?>
<html>
<head >
	<title>Profile Edit Page</title>
	<link rel="stylesheet" type="text/css" href="../Assert/Agency_edit_profile.css">
	<script type="text/javascript" src="../Assert/Agency_edit.js"></script>
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
	<style>
	    #form-msg {
	        background-color: rgb(255, 232, 232);
	        border: 1px solid red;
	        color: red;
	        display: none;
	        font-size: 12px;
	        font-weight: bold;
	        margin-bottom: 10px;
	        padding: 10px 25px;
	        max-width: 250px;
	    }

	</style>
	<div class = "form">
		<h6 id = "id" style = "display: none"> <?=$_SESSION['current_agencyid']?> </h6>
		<label for = "agencyname"> Agency Name </label> <br>
		<input type="text" id="agencyname" value ="<?=$current_agency['agencyname']?>" > <br>

		<label for = "contact"> Contact </label> <br>
		<input type="text" id="contact" value ="<?=$current_agency['contact']?>" ><br>

		<label for = "email"> Email </label> <br>
		<input type="email" id="email" value ="<?=$current_agency['email']?>" > <br>

		<button type="submit" id="btn-submit" onclick = "ajax()">Save</button>

		<ul id="form-msg">
			<li> Hello </li>
		</ul>
	</div>
	
</body>
</html>