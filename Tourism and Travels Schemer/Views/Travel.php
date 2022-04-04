<?php 
	$file = fopen('../Model/agent.txt', 'r');
	$array[] = ['rating' => "", 'id' => ""];
	$all[] = ['name'=> "",'email'=>"",'address'=>"",'number'=>"",'rating'=>"",'expert'=>"",'id'=>"",'rate'=>""];
	//$add = $agentname."|".$email."|".$address."|".$number."|".$rating."|".$expert."|".$id."|".$rate;
	while(!feof($file))
	{
		$string = fgets($file);
		if($string == "") continue;
		$agent = explode('|', $string);
		array_push($array, ['rating' => $agent[4], 'id' => $agent[6]]);
		array_push($all, [
			'name'=> $agent[0],'email'=>$agent[1],'address'=>$agent[2],'number'=>$agent[3],
			'rating'=>$agent[4],'expert'=>$agent[5],'id'=>$agent[6],'rate'=>$agent[7]
		]);
	}
	rsort($array);
	//print_r($all)
?>
<html>
<head>
	<a href="Homepage.php">Home| </a> <a href="Agency_Dashboard.php"> Dashboard| </a> <a href = "../Controller/logout.php">Logout </a>
</head>
<body>
	<br><br><br> 
	<table align = "center">
		<tr>
		<td> <a align = "center" href = "Travel2.php"> Sort By Hiring Rate |</a> </td>
		</tr>
		<tr>
			 <td colspan="3"> <hr width = "100%" noshade="noshade" > </td>
		</tr>
		<?php 
			$file = fopen('../Model/agent.txt', 'r');
			$cnt = 0;
			foreach($array as $a){
				foreach($all as $b){
					if($b['id'] == "") continue;
					//print_r($b); echo "\n";
					if($b['id'] != $a['id']) continue;

		?>
		<form method = "POST" action = "../Controller/Direct.php">
		<tr>
			<td colspan = "3" align = "center"> Agent ID: <input readonly type = "text" name="id" value = "<?=$b['id']?>"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td>: <input type="text" name = "agentname" value = "<?=$b['name']?> " readonly></td>
			<td></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type = "text" name = "email" value = "<?=$b['email']?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td>: <input type = "text" name = "address" value = "<?=$b['address']?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>: <input type = "text" name = "number" value = " <?=$b['number']?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Rating</td>
			<td>: <input type = "text" name = "rating" value =" <?=$b['rating']?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td>Hiring Rate</td>
			<td>: <input type = "text" name = "rate" value =" <?=$b['rate']?>" readonly></td>
			<td> </td>
		</tr>
		<tr>
			<td colspan = "3"><input size = "30" type = "text" name = "expert" value = "<?=$b['expert']?>" readonly></td>
		</tr>
		<tr>
			 <td colspan="3"> <hr width = "100%" noshade="noshade" > </td>
		</tr>
		<?php

			 //echo "\n";
			}
			}
		?>
		</form>
	</table>
	<br> <br>
	<fieldset  align = "center">
	<table border = '1' align = "center">
		<legend>Travel Costing Info.</legend>
		<tr height = "40">
			<th width = "110"> From </th>
			<th width = "110"> To </th>
			<th width = "110"> Distance </th>
			<th width = "110"> Cost </th>
		</tr>
		<?php 
			$file = fopen('../Model/mapwithcost.txt', 'r');
			$cnt = 0;
			while(!feof($file))
			{
				$string = fgets($file);
				if($string == "") continue;
				$inf = explode('|', $string);

		?>
		<tr height = "30">
			<td> <?=$inf[0]?> </td>
			<td> <?=$inf[1]?> </td>
			<td> <?=$inf[2]?> </td>
			<td> <?=$inf[3]?> </td>
			<td> 
				<a href = "Addcost.php?mid=<?=$inf[4]?>"> Insert Cost| </a> 
				<a href = "Editcost.php?mid=<?=$inf[4]?>"> Update Cost| </a> 
				<a href = "Deletecost.php?mid=<?=$inf[4]?>"> Delete Cost </a>
			</td>
		</tr>
		<?php

			 //echo "\n";
			}
		?>
	</table>
	</fieldset>
</body>
</html>