<?php 
	session_start();
	$id = $_SESSION['agent'];
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
		
				</table>			</td>
			<td>
				<table width="700">
					<tr>
						<td>
							<form method = "GET" action = "" enctype="multipart/form-data">
								Profile Picture <br>
								<input type = "file" name = "browse"> 
								<input type = "submit" name = "submit" value = "Submit">
							</form>
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</fieldset>
</body>
</html>