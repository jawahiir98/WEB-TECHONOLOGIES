<html>
<head>
	<title>Forgot Password Page</title>
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
	<table border = "1px" height = "40%" width = "100%" shade = "noshade">
		<tr align = "center">
			<td> 
				<form method="POST" action="Get_password.php">
					<fieldset style = "width : 30%">
						<legend align = "center">Forgot Password</legend>
						<table>
							<tr>
								<td>
									Email
								</td>
								<td>
									<input type = "text" name = "email" value = ""> 
								</td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td> <input type = "submit" name = "submit" value = "submit"> </td>
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