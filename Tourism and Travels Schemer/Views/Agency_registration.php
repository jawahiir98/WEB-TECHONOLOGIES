<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../Assert/Agency_form.css">
	<title>Registration Page</title>
	<script type="text/javascript" src="../Assert/Agency_registration.js"></script>
</head>
<body>
	
	<div class="header">
		<div class="container">
		<div class = "head-container">
		<h5 align = "left">
			<a href="../Views/Homepage.php"> Home|</a> <a href="../Views/Homepage.php"> Sign In</a> 
		</h5> 
	</div>
		<h2>Agency Registration</h2>
	</div>
	<form id="form" class="form" name = "regform" onsubmit="return validation()"  method = "POST" action = "../Controller/Agency_registration_validate.php"><br>

		<div class="form-control">

			<label for="username">Agency name</label>
			<input type="text" id="agencyname" name = "agencyname" value = ""><br>
			<span id = "show"> </span>

		</div>

		<div class="form-control">

			<label for="username">Contact</label>
			<input type="text" id="contact"  name = "contact" ><br>
			<span id = "show1"> </span>

		</div>

		<div class="form-control">

			<label for="username">Username</label>
			<input type="text" id="username"  name = "username" ><br>
			<span id = "show2"> </span>

		</div>

		<div class="form-control">

			<label for="username">Email</label>
			<input type="email"  id="email" name = "email" ><br>
			<span id = "show3"> </span>
			
		</div>

		<div class="form-control">

			<label for="username">Password</label>
			<input type="password"  id="password" name = "password"> <br>
			<span id = "show4"> </span>
			
		</div>
		<div class="form-control">

			<label for="username">Confirm Password</label>
			<input type="password"  id="password2" name = "password2"> <br>
			<span id = "show5"> </span>
			
		</div>
		<div class="form-control">

			<label for="username">Logo</label>
			<input type="file" id="logo" name = "logo"> <br>
			<span id = "show6"> </span>
			
		</div>
		<input type ="submit" name = "submit" class = "button" value = "Submit"> 
	</form>
</div>
</body>
</html>