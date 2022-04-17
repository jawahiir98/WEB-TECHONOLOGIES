<?php 

	$json = $_GET['myjson'];
	$student = json_decode($json);
	
	echo json_encode($student);
?>