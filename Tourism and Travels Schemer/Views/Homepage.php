<?php 
	session_start();
?>
<html>
<head>
	<div align = "right">
		<div align = "right">
			<form method = "POST" action = "../Controller/Agency_login_validate.php">
				Username : <input type = "text" name = "username" value = ""> <br>
				Password : <input type = "password" name = "password" value = "">  <br>
		</div>
		<input type = "submit" name = "submit" value = "Sign In">
		<a href = "Registration.php"><input type = "button" name = "SingUp" value = "Sing Up"></a>
		</form>
	</div>
</head>
<body>
	<style>
		#div1{
			background-color: royalblue;
			height:  60px;
			font-family: "Lucida Console", "Courier New", monospace;
			padding-top: 10px;
		}
	</style>
	<br> <br>
	<div>
		<div width = "20%"> </div>
		<div id = "div1" align="center"> <h3>SCHEME YOUR TRAVELS WITH EASE !</h2></div>
		<div width = "20%"> </div>
	</div>
</body>
</html>
