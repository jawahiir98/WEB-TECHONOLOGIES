<?php 
	session_start();
	require('../Model/AgentModel.php');
	$id = $_GET['cnt'];
	$agencyid = $_SESSION['current_agencyid'];
	if(deleteagent($id, $agencyid))
	{
		header('location: ../Views/Agency_agents.php');
	}
	else{
		echo "An error occured";
	}
?>