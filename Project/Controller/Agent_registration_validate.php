<?php 
	session_start();
	if(isset($_REQUEST['submit']))
	{
		//print_r($_REQUEST['submit']);
		$agentname = $_REQUEST['agentname'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$number = $_REQUEST['num'];
		$expert = $_REQUEST['expert'];
		$rating = 0.0;
		$rate = $_REQUEST['rate'];
		$file = fopen('../Model/agent.txt', 'r');
		$id = 1;
		while (!feof($file)) {
			// code..
			$string = fgets($file);
			$agentarray = explode('|', $string);
			$id = max($id, $agentarray[6]);
		}
		$id += 1;
		fclose($file);
		if($agentname == "" or $email == "" or $number == "" or $address == "" or $rate == null)
		{
			echo "Fields cannot be empty";
		}
		if($expert == "" or $expert == null)
		{
			$expert = "None";
		}
		$file = fopen('../Model/agent.txt', 'a');
		$agent = $agentname."|".$email."|".$address."|".$number."|".$rating."|".$expert."|".$id."|".$rate."\r\n";

		//print($agent);
		fwrite($file, $agent);
		fclose($file);
		header('location: ../Views/Add_agents.php');
	}
	else
	{
		echo "Error";
	}
?>
