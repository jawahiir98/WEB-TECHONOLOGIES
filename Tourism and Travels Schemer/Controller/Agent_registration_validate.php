<?php 
	session_start();
	require('../Model/AgentModel.php');
	print_r($_GET);
	if(isset($_REQUEST['submit']))
	{
		print_r($_REQUEST);
		$name = $_REQUEST['agentname'];
		$contact = $_REQUEST['contact'];
		$rate = $_REQUEST['rate'];
		$hire = $_REQUEST['hire'];
		if($name == "" or $contact == "" or $rate == "" or $hire == ""){
			echo "An error occured";
		}
		else{

			if(signup($_GET['agencyid'], $name,$contact, $rate, $hire))
			{
				header('location: ../Views/Agency_agents.php');
			}
		}
	}

?>