<?php 

	session_start();
	require('../Model/MapModel.php');
	if(isset($_REQUEST['submit']))
	{
		if($_REQUEST['cost'] == null)
		{
			echo "Null value entered,please try again";
		}
		else{
			if(udpatecost($_REQUEST['cost'], $_GET['mid'], $_SESSION['current_agencyid'])){
				header('loaction: ../Views/Travel2.php');
			}else{
				echo "An error occured updating the cost";
			}
		}
	}
?>