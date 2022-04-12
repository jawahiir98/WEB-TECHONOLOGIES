<html>
<head>

	<style>
		 @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		.table{
			height: 400px;
			width: 100%;
			display: justify;
		}
		.head{
			height: 200px;
		}
		.table-content{
			width: auto;
			font-family: 'Poppins', sans-serif;
		}
	</style>
	<title>Registration Page</title>
	<table class = "head" > 
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
	<div class = "table">
		<table align = "center">
		<tr align = "left">
			<td> 
				<form method="POST" action="../Controller/Agency_registration_validate.php">
					<fieldset align="center" class = "table-content">
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
								<td> Agency Logo </td>
								<td>: <input type = "file" name = "logo" value = ""> </td>
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
	</div>
</body>
</html>