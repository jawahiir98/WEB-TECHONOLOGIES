<?php 
	session_start();
	$id = $_GET['cnt'];
	$file = fopen('../Model/agent.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[6]) == $id){
			$agent = $userArray;
			break;
		}
	}	
	//print_r($agent);
	$agentname = $agent[0];
	$email = $agent[1];
	$address = $agent[2];
	$number = $agent[3];
	$rating = $agent[4];
	$expert = $agent[5];
	$rate = $agent[7];
?>
<html>
<head>
	
<body>
	<form method = "POST" action = "../Controller/Agent_edit_validate.php">
		<fieldset style = "width: 65%">
			<legend>Agent <?=$id?> Profile</legend>
			<table align = "left" style="width : 100%">
				<tr>
					<td width = "30%"> Agent ID: </td>
					<td >: <input readonly type = "text" name = "id" value = "<?= $id?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Name</td>
					<td >: <input type = "text" name = "agentname" value = "<?= $agentname?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Email </td>
					<td >: <input type = "text" name = "email" value = "<?= $email?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Address </td>
					<td >: <input type = "text" name = "address" value = "<?= $address?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Contact </td>
					<td >: <input type = "text" name = "number" value = "<?= $number?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Rating </td>
					<td >: <input type = "text" name = "rating" value = "<?= $rating?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td width = "30%"> Hiring Rate </td>
					<td >: <input type = "text" name = "rate" value = "<?= $rate?>"></td>
					<td> </td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td colspan="3"><input size = "55" type = "text" name = "expert" value = "<?= $expert?>"></td>
				</tr>
				<tr>
					 <td> <hr width = "100%" noshade="noshade" > </td>
				</tr>
				<tr>
					<td > <input type = "submit" name = "submit" value = "Submit"> </td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>