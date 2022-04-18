<?php 
	session_start();
	require('../Model/MapModel.php');
	$id = $_GET['MID'];
	$map = getmap($id, $_SESSION['current_agencyid']);
	//print_r($map);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Cost</title>
</head>
<body>
	<div class="container">
		<form method = "POST" action  = "../Controller/Delete_cost_validate.php?mid=<?=$map['mapid']?>">
			<table border = "2px" style = "border:3px solid blue; border-color: slateblue;">
				<tr>
					<th width = "110"> From </th>
					<th width = "110"> To </th>
					<th width = "110"> Distance </th>
					<th width = "110"> Cost </th>
				</tr>
				<tr>
					<td>
						<?=$map['begin']?>
					</td>
					<td>
						<?=$map['end']?>
					</td>
					<td>
						<?=$map['distance']?>
					</td>
					<td>
						<?=$map['cost']?>
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value = "Delete">
		</form>
	</div>
</body>
</html>