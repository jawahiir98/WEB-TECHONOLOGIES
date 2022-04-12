<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<style>
		#register{
			height: 800px;
			width: 100%;
			padding: 80px 40px;
			align-content: center;
			display: justify;
			background: linear-gradient(to right, rgb(145, 105, 17), rgba(204, 229, 255, 0.4));
		}

	</style>
	<div id = "register">
		<div align = "center"> 
			<form method="POST" action = "../Controller/pre_registration_validate.php">
				 <h3><p> Register as :</p></h3>
				<input type = "submit" name = "user" value = "Traveller">
				<input type = "submit" name = "agency" value = "Agency"> 
				<input type = "submit" name = "admin" value = "Admin"> <br>
			</form>
		</div>
	</div>
</body>
</html>