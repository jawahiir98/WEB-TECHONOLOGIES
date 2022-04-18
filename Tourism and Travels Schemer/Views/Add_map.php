<?php 

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Map Information</title>
</head>
<body>
	<div class="container">
		<form method = "POST" action = "../Controller/Add_map_validate.php">
			<table class="tb">
				<tr>
					<th>From</th>
					<th>To</th>
					<th>Cost</th>
					<th>Distance</th>
				</tr>
				<tr>
					<td><input type="text" name="from"></td>
					<td><input type="text" name="to"></td>
					<td><input type="text" name="cost"></td>
					<td><input type="text" name="distance"></td>
					<td><input type="submit" name="submit" value = "Add"></td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</form>
	</div>
</body>
</html>