<?php 
	
	session_start();
	require('../Model/AgentModel.php');
	if(isset($_REQUEST['submit']))
	{
		$id = $_REQUEST['id'];
		$agencyid = $_SESSION['current_agencyid'];
		$name = $_REQUEST['agentname'];
		$contact = $_REQUEST['contact'];
		$hire = $_REQUEST['hire'];
		$rating = $_REQUEST['rating'];
		if($name == ""){
			echo "Name cannot be emtpy";
		}
		else if($contact == ""){
			echo "Contact cannot be empty";
		}
		else if($hire == ""){
			echo "Hiring rate cannot be empty";
		}
		else if($rating == ""){
			echo "Rating cannot be empty";
		}
		else{
			if(updateagent($id, $agencyid, $name, $contact, $hire, $rating))
			{
				header('location: ../Views/Agency_agents.php');
			}
			else{
				echo "An error occured updating information";
			}
		}
	}
	else echo "Error";
?>