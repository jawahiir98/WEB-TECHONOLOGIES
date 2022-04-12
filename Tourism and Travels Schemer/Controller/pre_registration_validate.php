<?php 
	session_start();
	print_r($_REQUEST);
	if(isset($_REQUEST['agency'])){
		header('location: ../Views/Agency_registration.php');
	}
?>