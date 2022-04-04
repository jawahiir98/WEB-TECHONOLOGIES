<html>
<head>
	<title>Registration Page</title>
	<table  width = "100%"> 
		<tr>
			<td> 
				<h5 align = "left">
				<a href="../Views/Homepage.php"> Home|</a> <a href="../Views/Homepage.php"> Sign In</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="../Controller/Agency_registration_validate.php">
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
						<table align="center">
							<tr >
								<td>Agency Name </td>
								<td>: <input type="text" name="agencyname" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Email </td>
								<td>: <input type="text" name="email" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Username </td>
								<td>: <input type="text" name="username" value="" > </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Password </td>
								<td>: <input type="password" name="password" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Confirm Password </td>
								<td>: <input type="password" name="confirm" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Address </td>
								<td>: <input type = "text" name = "address" value = ""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Submit">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>