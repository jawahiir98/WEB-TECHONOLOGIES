<?php 
	session_start();
	require('../Model/MapModel.php');
	$id = $_GET['mid'];
	$map = getmap($id, $_SESSION['current_agencyid']);
	//print_r($map);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Cost</title>
</head>
<body>
	<div class="container">
		<form method = "POST" action  = "../Controller/Edit_cost_validate.php?mid=<?=$map['mapid']?>">
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
						<input type="text" name="cost" value = "<?=$map['cost']?>">
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value = "Save">
		</form>
	</div>
</body>
</html>