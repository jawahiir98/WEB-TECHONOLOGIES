<html>
<head>
	<a href="Homepage.php">Home| </a> <a href="Agency_Dashboard.php"> Dashboard| </a> <a href = "../Controller/logout.php">Logout </a>
</head>
<body>
	<br><br><br>
	
	<table align = "center" >
		
		<tr>
			 <td colspan="3"> <hr width = "100%" noshade="noshade" > </td>
		</tr>
		<?php 
			$file = fopen('../Model/agent.txt', 'r');
			$cnt = 0;
			while(!feof($file))
			{
				$string = fgets($file);
				if($string == "") continue;
				$agent = explode('|', $string);
				$cnt = trim($agent[6]);
				//$agent = $agentname."|".$email."|".$address."|".$number."|".$rating."|".$expert."\r\n";

		?>
		<form method = "POST" action = "../Controller/Direct.php">
		<tr>
			<td colspan = "3" align = "center"> Agent ID: <input readonly type = "text" name="id" value = "<?=$agent[6]?>"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td>: <input type="text" name = "agentname" value = "<?=$agent[0]?> " readonly></td>
			<td></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type = "text" name = "email" value = "<?=$agent[1]?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td>: <input type = "text" name = "address" value = "<?=$agent[2]?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>: <input type = "text" name = "number" value = " <?=$agent[3]?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Rating</td>
			<td>: <input type = "text" name = "rating" value =" <?=$agent[4]?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Hiring Rate</td>
			<td>: <input type = "text" name = "rate" value =" <?=$agent[7]?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td colspan = "3"><input size = "30" type = "text" name = "expert" value = "<?=$agent[5]?>" readonly></td>
		</tr>
		<tr>
			<td> <a href="../Views/Agent_edit.php?cnt=<?=$cnt?>">Edit</a> | </td>
			<td> <a href="../Controller/Agent_delete.php?cnt=<?=$cnt?>">Delete|</a> 
			<td> <a href="../Views/Agency_view.php?cnt=<?=$cnt?>">View</a> </td> 
		</tr>
		<tr>
			 <td colspan="3"> <hr width = "100%" noshade="noshade" > </td>
		</tr>
		<?php

			 //echo "\n";
			}
		?>
	</form>
	</table>
</body>
</html>