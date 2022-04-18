
<html>
<head>
	<a href="Homepage2.php">Home| </a><a href = "../Controller/logout.php">Logout </a>
</head>
<body>
	<div class="container">
		<div class="agent">
			<table align = "center" >
				<?php 
					session_start();
					require('../Model/AgentModel.php');
					$id = $_SESSION['current_agencyid'];
					
					$Agents = getagents($id);
					
					foreach($Agents as $cholo)
					{
						$id = $cholo['agentid'];
						$name = $cholo['agentname'];
						$contact = $cholo['contact'];
						$rate = $cholo['rating'];
						$hire = $cholo['hire'];

				?>
					<tr>
						<td>Agent ID:</td>
						<td><?=$id?></td>
					</tr>
					<tr>
						<td>Agent Name:</td>
						<td><?=$name?></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><?=$contact?></td>
					</tr>
					<tr>
						<td>Rating:</td>
						<td><?=$rate?></td>
					</tr>
					<tr>
						<td>Hire Rate:</td>
						<td><?=$hire?></td>
					</tr>
					<tr>
						<td> <a href="../Views/Agent_edit.php?cnt=<?=$id?>">Edit</a> | </td>
						<td> <a href="../Controller/Agent_delete.php?cnt=<?=$id?>">Delete|</a> 
						<td> <a href="../Views/Agency_view.php?cnt=<?=$id?>">View</a> </td> 
					</tr>
					
				<?php

					}
				?>
			</table>
		</div>
	</div>
</body>
</html>