<?php 
	session_start();
	require('../Model/MapModel.php');
	$maps = getmaps($_SESSION['current_agencyid']);
	arsort($maps);
?>
<html>
<head>
	<a href="Homepage2.php">Home| </a> <a href = "../Controller/logout.php">Logout </a>
	<style type="text/css">
	    a {
	    	text-decoration: none;
	    	color: slateblue;
		    float: top;
		    padding: 5px 10px;
		}
		li {
		    list-style: none;
		    float: top;
		    display: block;
		    padding: 5px 10px;
		}
		li :hover {
		    position: relative;
		    top: -5px; /* this will raise the element */
		}
	</style>
</head>
<body>
	<br><br><br> 
	<fieldset  align = "center">
	<table border = '1' align = "center">
		<legend>Travel Costing Info.</legend>
		<tr height = "40">
			<th width = "110"> From </th>
			<th width = "110"> To </th>
			<th width = "110"> Distance </th>
			<th width = "110"> Cost </th>
			<th> Menu</th>
		</tr>
		<?php 
			
			foreach($maps as $inf){

		?>
		<tr height = "30">
			<td> <?=$inf['from']?> </td>
			<td> <?=$inf['to']?> </td>
			<td> <?=$inf['cost']?> </td>
			<td> <?=$inf['distance']?> </td>
			<td> 
				<ul>
					<li>	
						<a href = "Editcost.php?mid=<?=$inf['mapid']?>"> Update Cost </a> <br>
					</li>
					<li>
						<a href = "Deletemap.php?mid=<?$inf['mapid']?>"> Delete Cost </a>
					</li>
				</ul>
			</td>
		</tr>
		<?php

			}
		?>

	</table>
	</fieldset>
	<button id = "button">
		<a href="Add_map.php">Add Information</a>
	</button>
</body>
</html>