<?php 

	session_start();
	require('../Model/MapModel.php');
	if(isset($_REQUEST['submit']))
	{
		if(deletemap($_GET['mid'], $_SESSION['current_agencyid'])){
			header('loation: ../Views/Travel2.php');
		}else{
			echo "An error occured deleting the map information";
		}
	}
?>