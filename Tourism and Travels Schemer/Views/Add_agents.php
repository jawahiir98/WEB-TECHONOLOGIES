<html>
	<head>

	</head>
<body>
	<br> <br> <br>
	<a href="Agency_dashboard.php"> Dashboard </a>
	<table height = "60%" width = "100%" >
		<tr align = "left">
			<td> 
				<form method="POST" action="../Controller/Agent_registration_validate.php">
					<fieldset align="center" style = "width: 35%">
						<legend>AGENT REGISTRATION</legend>
						<table align="center">
							<tr >
								<td>Agent Name </td>
								<td>: <input type="text" name="agentname" value=""> </td>
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
							<tr>
								<td> Address </td>
								<td>: <input type = "text" name = "address" value = ""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr >
								<td>Contact Number </td>
								<td>: <input type="text" name="num" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> Agent's Fields of expertise </td>
								<td>: <input type = "text" name = "expert" value = ""> </td>
							</tr>
							<tr >
								<td>Hiring Rate </td>
								<td>: <input type="text" name="rate" value=""> </td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td> <br></td>
							</tr>
							<tr>
								<td colspan = "3"> 
									<input type = "submit" name = "submit" value = "Add">
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
				<a href = "Agency_agents.php"> View Agents </a>
			</td>
		</tr>
	</table>
</body>
</html>