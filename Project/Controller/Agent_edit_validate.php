<?php 
	
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$agentname = $_REQUEST['agentname'];
		$email =  $_REQUEST['email'];
		$address =  $_REQUEST['address'];
		$number =  $_REQUEST['number'];
		$rating =  $_REQUEST['rating'];
		$expert =  $_REQUEST['expert'];
		$id = $_REQUEST['id'];
		if($agentname == "" or $email== "" or $address == "" or $number == "" or $rating == "" or $expert == "")
		{
			echo "Fields cannot be left empty";
		}
		else
		{

			$file = fopen('../Model/agent.txt', 'r');
			$found;
			while(!feof($file))
			{
				$string = fgets($file);
				$agent = explode('|', $string);
				if(isset($agent[6]) and trim($agent[6]) == $id){
					$found = $string;
					break;
				}
			}
			fclose($file);
			$add = $agentname."|".$email."|".$address."|".$number."|".$rating."|".$expert."|".$id;
			$file = '../Model/agent.txt';
			file_put_contents($file,str_replace($found, $add,file_get_contents($file)));

			header('location: ../Views/Agency_agents.php');
		}
	}
	else echo "Error";
?>