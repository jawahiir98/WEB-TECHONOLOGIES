<html>
<head>
	<title>Login Page</title>
	<table border = "1px" width = "100%"> 
		<tr>
			<td> 
				<h2 align="left"> XCompany</h2> 
				<h5 align = "right">
				<a href="Homepage.php"> Home|</a> <a href="Login_page.php"> Login|</a> <a href="Registration.php"> Registration</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table height = "60%" width = "100%" border = "1px">
		<tr align = "center">
			<td> 
				<form method="POST" action="Registration_validate.php">
					<fieldset align="center" style = "width: 35%">
						<legend>REGISTRATION</legend>
						<table align="center">
							<tr >
								<td>Name </td>
								<td>: <input type="text" name="myname" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Email </td>
								<td>: <input type="text" name="email" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Username </td>
								<td>: <input type="text" name="username" value="" > </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Password </td>
								<td>: <input type="password" name="password" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Confirm Password </td>
								<td>: <input type="password" name="confirm" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td colspan = "100%">
									<fieldset>
										<legend>
											Gender:
										</legend>
											<input type="radio" name="gender" value="Male"> Male
											<input type="radio" name="gender" value="Female"> Female
											<input type="radio" name="gender" value="Other"> Other <br>
									</fieldset>
								</td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td colspan = "100%"> 
									<fieldset>
										<legend>Date of birth: </legend>
										<input type="date" name="dob" value=""> <br>
									</fieldset>
								</td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Submit">
									<input type = "submit" name = "reset" value = "Reset">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
	<table width = "100%" border = "1px">
		<tr height = "50px">
			<td align = "center"> Copyright @2017 </td>
		</tr>
	</table>
</body>
</html>