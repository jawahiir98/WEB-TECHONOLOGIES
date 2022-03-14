<html>
<head>
	<title>Travel Costs</title>
	<a href="Homepage.php">Home| </a> <a href="Agency_Dashboard.php"> Dashboard| </a> <a href = "../Controller/logout.php">Logout </a> <br>
	<a href="Travel.php"> Travel Management </a>
</head>
<body>
	<br><br><br><br>
	<form method = "POST" action = "Cost_validate.php">
		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td> From</td>
							<td> <input type="text" name="pick"> </td> 
						</tr>
					</table>
				</td>

				<td>
					<table>
						<tr>
							<td> To</td>
							<td> <input type="text" name="des"> </td> 
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td> Cost</td>
							<td> <input type="text" name="cost"> </td> 
							<td> <input type="submit" name="submit" value = "Enter"> </td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>