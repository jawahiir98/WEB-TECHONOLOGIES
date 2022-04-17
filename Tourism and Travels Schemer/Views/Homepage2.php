<?php
	session_start();
	$current_agencyid = $_SESSION['current_agencyid'];
	$con = mysqli_connect('localhost', 'root', '', 'tourism and travel schemer');
	$sql = "select * from agencies where agencyid = '{$current_agencyid}'";
	$res = mysqli_query($con, $sql);
	if($res)
	{
		$row =  mysqli_fetch_assoc($res);
		$Username = $row['Username'];
	}
	else
	{
		echo "Error";
	}
?>
<html>
<head>
	<style>
		h2{
			color : slategray;
		}
		input{
			background-color: skyblue;
		}
		a{
			font-family:  "Lucida Console", "Courier New", monospace;
		}
	</style>
	<table>
		<tr>
			<td> </td>
			<td style = "width: auto;justify-content: center;">
				Logged in as <a href="Agency_profile.php"> <?=$Username?></a>
			</td>
			<td width = "90%" align = "right">
				<a href = "../Controller/Logout.php"> <input type = "button" name = "logout" value = "Logout"> </a>
			</td>
		</tr>
	</table>
	
</head>
<body>
	<br> <br>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		#div1{
			background: linear-gradient(to right, rgb(40, 173, 147), rgba(204, 229, 255, 0.4));
			height:  60px;
			font-size: 1.0em;
			font-family: "Lato", sans-serif;
			padding-top: 10px;
		}
		#img1{
			border: 2px solid black;
			background-image: url(../Assert/Image/Image01.jpg);
			background-size: auto;
			width: 900px;
			height:  400px;
		}
		li {
		    list-style: none;
		    float: top;
		    display: block;
		    padding: 5px 10px;
		}
		.navbar{
			width: 400px;
			padding-left: 850px;
			font-family: 'Poppins', sans-serif;
			font-size: 20px;
			justify-content: space-around;
			color: salmon;
			display:  flex;
			flex-direction: column;
			align-items: center;
		}
		li :hover {
		    position: relative;
		    top: -5px; /* this will raise the element */
		    padding-bottom: 10px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		#foot{
			padding-left: 40px;
			font-size:  15px;
			height: 50px;
			width: 250px;
		}
	</style>
	<div>
		<div width = "20%"> </div>
		<div align = "center" id = "div1"> <h3>SHEME YOUR TRAVELS WITH EASE !</h3> </div>
		<div width = "20%"> </div>
	</div>
	<br> <br>
	<div id = "img1">
		<div>
			<nav class = "navbar" align = "center" >
				<h3 style = "padding-left:  20px;"> Dashboard </h3> 
				<ul> 
					<li> <a href = "Agency_profile.php"> View Profile </a> </li>
					<li> <a href = "Agency_edit_profile.php"> Edit Profile </a> </li>
					<li> <a href = "Agency_messages.php"> Messages </a> </li>
					<li> <a href = "Agency_agents.php"> Agents </a> </li>
					<li> <a href = "Add_agents.php"> Add Agent </a> </li>
					<li> <a href = "Travel.php"> Travel Management </a> </li>
				</ul>
				<div> 
					<div id = "admin"style = "width:  auto; padding-left: 50px;"> 
						<img src = "../Assert/Image/msgicon.png">
						<a href = "" id = "foot">Contact An Admin </a>
					 </div>
				</div>
			</nav>
		</div>
	</div>
</body>
</html>