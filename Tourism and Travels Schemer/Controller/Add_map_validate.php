<?php 

	session_start();
	require('../Model/MapModel.php');
	$id = $_SESSION['current_agencyid'];
	print_r($_REQUEST);
	if(isset($_REQUEST['submit']))
	{
		$from = $_REQUEST['from'];
		$to = $_REQUEST['to'];
		$cost = $_REQUEST['cost'];
		$dis = $_REQUEST['distance'];
		if($from == null || $to == null|| $cost == null || $dis == null){
			echo "Fields cannot be blank";
		}
		else{
			if(insertmap($id, $from, $to, $cost, $dis)){
				header('location: ../Views/Travel2.php');
			}else{
				echo "Error occured in adding location information";
			}
		}
	}
?>