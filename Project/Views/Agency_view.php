<?php 
	session_start();
	$id = $_GET['cnt'];
	
	$file = fopen('../Model/agent.txt', 'r');
	while(!feof($file))
	{
		$string = fgets($file);
		$user = explode('|', $string);
		if(isset($user[6]) and trim($user[6]) == $id){
			$agent = $user;
			break;
		}
	}
?>
<html>
<head>
	<title>Agent Portfolio</title>
	<a href="Homepage.php">Home| </a> <a href="Agency_Dashboard.php"> Dashboard| </a> <a href = "../Controller/logout.php">Logout </a>
</head>
<body>
	<fieldset>
	<table border = "1">
		<tr>
			<td >
				<table  width="400">
				<tr>
					<td> Agent ID: <?=$agent[6]?></td>
				</tr>
				<tr>
					<td> <hr noshade="noshade"> </td>
				</tr>
				<tr>
					<td>Name:  <?=$agent[0]?></td>
				</tr>
				<tr>
					<td>Email:  <?=$agent[1]?></td>

				</tr>
				<tr>
					<td>Addres:  <?=$agent[2]?></td>
				
				</tr>
				<tr>
					<td>Contact:  <?=$agent[3]?></td>
					
				</tr>
				<tr>
					<td>Rating:  <?=$agent[4]?></td>
				</tr>
				<tr>
					<td>Hiring Rate:  <?=$agent[7]?></td>
				</tr>
				</table>			
			</td>
			<td>
				<table width="700">
					<tr>
						<td>
							<img src="upload/<?=$_SESSION['agentpic']?>">
							<form method = "POST" action = "../Controller/Picture.php" enctype="multipart/form-data">
								<h4 align = "center">Profile Picture</h4> <br>
								<input type = "file" name = "browse"> 
								<input type = "submit" name = "submit" value = "Submit">
							</form>
							<a href="Agent_edit.php?cnt=<?=$id?>"> Edit Portfolio </a>
						</td>
					</tr>
					<tr>
						<td>
							<h3>More about <?=$agent[0]?>: </h3> <br>
							<?=$agent[5]?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</fieldset>
</body>
</html>